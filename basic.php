<?php
// This code puts the canvas image on the server
if(isset($GLOBALS['HTTP_RAW_POST_DATA'])){
	$rawImage = $GLOBALS['HTTP_RAW_POST_DATA'];
	$removeHeaders = substr($rawImage, strpos($rawImage, ",")+1);
	$decode = base64_decode($removeHeaders);
	$filename = time()."card".mt_rand();
	$fopen = fopen('card_images/'.$filename.'.jpg', 'wb');
	fwrite($fopen, $decode);
	fclose($fopen);
	echo $filename;
	exit();
}
?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Customize a birthday card</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<style>
body{ font-family: Arial, Helvetica, sans-serif; }
#theform{ background: url(images/ktp.jpeg) no-repeat; width:800px; height:500px; margin:0px auto; }
#theform > div{ margin-left:240px; padding-top:350px;}
#theform > div > input{ display:block; padding:7px; width:320px; }
#theform > div > #name2{ margin-top:290px; }
.menu{ width:800px; margin:0px auto; text-align:center; padding:20px; }
.menu > button{ font-size:19px; padding:10px 30px; cursor:pointer; }
#card_canvas{ display:block; width:800px; height:500px; margin:0px auto; }
</style>
<script>
function _(x){return document.getElementById(x);}
var demo_card_1 = new Image();
demo_card_1.src = "images/ktp.jpeg";
console.log(demo_card_1.src)
function preview(){
	var name1 = _("name1").value;
	var name2 = _("name2").value;
	if(name1 == "" || name2 == ""){
		alert("Please fill in both fields");
		return false;
	}
	var ctx = _('card_canvas').getContext('2d');
	ctx.drawImage(demo_card_1, 0, 0);
	ctx.fillStyle = 'rgba(255,255,255,1)';
	ctx.font = 'bold 34px "Comic Sans MS", cursive';
	ctx.shadowColor = 'rgba(0,0,0,1)';
	ctx.shadowOffsetX = 1;
	ctx.shadowOffsetY = 1;
	ctx.shadowBlur = 2;
	ctx.fillText(name1, 240, 104, 320);
	ctx.fillText(name2, 240, 426, 320);
}
function render(){
	_("renderbtn").style.display = "none";
	_("canvas_save_status").innerHTML = "rendering... please wait...";
	var ctx = _('card_canvas').getContext('2d');
	var imgdata = ctx.canvas.toDataURL("image/jpg");
	var hr = new XMLHttpRequest();
	hr.open("POST", "card_create.php", true);
	hr.setRequestHeader("Content-type", "canvas/upload");
	hr.onreadystatechange = function() {
		if(hr.readyState == 4 && hr.status == 200) {
			window.location = "card.php?id="+hr.responseText;
		}
	}
	hr.send("cd="+imgdata);
}
</script>
</head>
<body>
<form id="theform" onsubmit="return false">
  <div>
    <input id="name1" placeholder="Recipient Name">
    <input id="name2" placeholder="Your Name">
  </div>
</form>
<div class="menu">
  <button id="btn1" onclick="preview()">&darr; Preview &darr;</button>
</div>
<canvas id="card_canvas" width="800" height="500"></canvas>
<div class="menu">
  <button id="renderbtn" onclick="render()">Render and Share</button>
  <span id="canvas_save_status"></span>
</div>
<div style="height:200px;"></div>
</body>
</html>