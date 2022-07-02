
<?php
session_start();
if(!empty($_SESSION['foto']) AND empty($_SESSION['ttd'])){
  $img=$_SESSION['foto'];
} else if(!empty($_SESSION['ttd']) AND empty($_SESSION['foto'])){
  $img=$_SESSION['ttd'];
}else if(!empty($_SESSION['foto']) AND !empty($_SESSION['ttd'])){
  $img=$_SESSION['foto'];
  $ttd = $_SESSION['ttd'];
}else{ 
  $img="img.jpeg";
  $ttd="ttd.png";
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title> Aplikasi KTP Online </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">

	<script type="text/javascript">
    var myFont = new FontFace('myFont', 'url(assets/fonts//OCRAStd.otf)');
    myFont.load().then(function(font){
      document.fonts.add(font);
      console.log('Font loaded');
    });



		function _(x){return document.getElementById(x);}
		var demo_card_1 = new Image(); demo_card_1.src = "images/ktp.jpeg";
    var demo_card_2 = new Image(); demo_card_2.src = "images/<?php echo $img;?>";
    var demo_card_3 = new Image(); demo_card_3.src = "images/<?php echo $ttd;?>";
		function preview(){

    var tgl = new Date(); 
    var day = tgl.getDate();	
    var month = tgl.getMonth();	
    var year = tgl.getFullYear();
    

			var name1 = _("nik").value;
			var name2 = _("nama").value;
      var name3 = _("ttl").value;
      var name4 = _("jk").value;
      var name5 = _("alamat").value;
      var name6 = _("rt_rw").value;
      var name7 = _("kelurahan").value;
      var name8 = _("kecamatan").value;
      var name9 = _("agama").value;
      var name10 = _("status").value;
      var name11 = _("pekerjaan").value;
      var name12 = _("warga").value;
      var name13 = _("berlaku").value;
      var name14 = _("gol").value;
      var name15 = _("provinsi").value; 
      var name16 = _("kabupaten").value;
      var full_provinsi = "PROVINSI "+name15.toUpperCase() ;
      var full_kabupaten = " KOTA "+name16.toUpperCase() ;
      var wilayah = full_kabupaten.toUpperCase() ;
      var name17 = day+"-"+month+"-"+year;
			if(name1 == "" || name2 == "" || name3 == "" || name4 == "" || name5 == "" || name6 == "" || name7 == "" || name8 == "" || name9 == "" || name10 == "" || name11 == "" || name12 == "" || name13 == "" || name14 == "" || name15 == "" || name16 == ""){
				alert("Please fill in both fields");
				return false;
			}
			var ctx = _('card_canvas').getContext('2d');
			ctx.drawImage(demo_card_1, 0, 0);
			ctx.shadowColor = 'rgba(0,0,0,1)';
			ctx.shadowOffsetX = 0;
			ctx.shadowOffsetY = 0;
			ctx.shadowBlur = 0;
      ctx.font = "20px myFont";
			ctx.fillText(name1, 100, 75, 150); //left  , top , ukuran font
      ctx.font = "14px Arial";
			ctx.fillText(name2, 122, 102, 150);
      ctx.fillText(name3, 122, 116, 150);
      ctx.fillText(name4, 122, 131, 150);
      ctx.drawImage(demo_card_2,350, 60, 140, 150);
      ctx.fillText(name5, 122, 144, 150);
      ctx.fillText(name6, 119, 160, 150);
      ctx.fillText(name7, 120, 174, 150);
      ctx.fillText(name8, 119, 190, 150);
      ctx.fillText(name9, 120, 206, 150);
      ctx.fillText(name10, 120, 220, 150);
      ctx.fillText(name11, 120, 235, 150);
      ctx.fillText(name12, 120, 250, 150);
      ctx.fillText(name13, 120, 265, 150);
      ctx.fillText(name14, 330, 131, 150);
      ctx.font = 'bold 16px Arial';
      ctx.fillText(full_provinsi, 145, 25, 250);
      ctx.font = 'bold 16px Arial';
      ctx.fillText(full_kabupaten, 141, 45, 250);
      ctx.drawImage(demo_card_3,400, 250, 50, 50);
      ctx.font = "14px Arial";
      ctx.fillText(name17, 390, 243, 150);
      ctx.font = "14px Arial";
      ctx.fillText(wilayah, 350, 230, 150);
		}

    function save(){
      const rand = (Math.random() * 134536348674647387);
      const myCanvas = document.querySelector("#card_canvas");
      const a = document.createElement('a');
      document.body.appendChild(a);
      a.href = myCanvas.toDataURL("image/png");
      a.download = rand+".png";
      a.click();
      document.body.removeChild(a);
       //console.log(rand);

      // let image = document.querySelector("#card_canvas");
      // let canva = image.toDataURL()
      // let url = 'uploadktp.php';
      // var ajax = new XMLHttpRequest();
      // ajax.open("POST", url);
      // ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      // ajax.onreadystatechange = function () {
      //     if (ajax.readyState == 4 && ajax.status == 200) {
      //         alert(ajax.responseText);
      //     }
      // }
      // ajax.send(canva);

    }

	</script>
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Form Isian</h2>
        <p class="lead">Isian Diatas harus valid dan Jelas supaya tidak terjadi kesalahan pada database</p>
      </div>

      <h4 class="mb-3">Silahkan Isi Data Anda</h4>
      <br>
      <div class="row">
          <div class="col-md-6 text-center">
           <?php 
            if(!empty($_SESSION['foto'])){
                echo  "<img src=".'images/'.$_SESSION['foto']." width='100%'>";
              }else{
            ?>
                <button onclick="window.location.href='upload_foto.php'" class="btn btn-primary btn-lg btn-block"> Upload Foto  </button> <br>
            <?php } ?>
          </div>
          <div class="col-md-6 text-center">
          <?php 
            if(!empty($_SESSION['ttd'])){
                echo  "<img src=".'images/'.$_SESSION['ttd']." width='100%'>";
              }else{
            ?>
                <button onclick="window.location.href='upload_ttd.php'" class="btn btn-primary btn-lg btn-block"> Upload Tanda Tangan  </button> <br>
            <?php } ?>
          </div>
      </div>

      <br>
      <br>
      <div class="row">
        <div class="col-md-12">
          <form onsubmit="return false">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">NIK</label>
                <input type="text" class="form-control" id="nik" placeholder="" value="" required>
                <div class="invalid-feedback">
                  )*
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="" value="" required>
                <div class="invalid-feedback">
                  )*
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Tempat/Tanggal Lahir</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">#</span>
                </div>
                <input type="text" class="form-control" id="ttl" placeholder="Tempat Tanggal Lahir">
                <div class="invalid-feedback" style="width: 100%;">
                  )*
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Jenis Kelamin <span class="text-muted">)*</span></label>
              <input type="text" class="form-control" id="jk" placeholder="Jenis Kelamin">
              <div class="invalid-feedback">
                )*
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Alamat</label>
              <input type="text" class="form-control" id="alamat" placeholder="Alamat">
              <div class="invalid-feedback">
                )*
              </div>
            </div>

            <div class="mb-3">
              <label for="address2">RT/RW <span class="text-muted">)*</span></label>
              <input type="text" class="form-control" id="rt_rw" placeholder="RT RW">
            </div>

		    	<div class="mb-3">
              <label for="address2">Kel/Desa <span class="text-muted">)*</span></label>
              <input type="text" class="form-control" id="kelurahan" placeholder="kelurahan">
            </div>

			    <div class="mb-3">
              <label for="address2">Kecamatan <span class="text-muted">)*</span></label>
              <input type="text" class="form-control" id="kecamatan" placeholder="kecamatan">
            </div>

            <div class="mb-3">
              <label for="address2">Kabupaten <span class="text-muted">)*</span></label>
              <input type="text" class="form-control" id="kabupaten" placeholder="kabupaten">
            </div>

            <div class="mb-3">
              <label for="address2">Provinsi <span class="text-muted">)*</span></label>
              <input type="text" class="form-control" id="provinsi" placeholder="provinsi">
            </div>

			    <div class="mb-3">
              <label for="address2">Agama<span class="text-muted">)*</span></label>
              <input type="text" class="form-control" id="agama" placeholder="agama">
            </div>

			    <div class="mb-3">
              <label for="address2">Status Perkawinan <span class="text-muted">)*</span></label>
              <input type="text" class="form-control" id="status" placeholder="Status Pernikahan">
            </div>

			      <div class="mb-3">
              <label for="address2">Pekerjaan <span class="text-muted">)*</span></label>
              <input type="text" class="form-control" id="pekerjaan" placeholder="Pekerjaan">
            </div>

			      <div class="mb-3">
              <label for="address2">Kewarganegaraan <span class="text-muted">)*</span></label>
              <input type="text" class="form-control" id="warga" placeholder="Kewarganegaraan">
            </div>

			      <div class="mb-3">
              <label for="address2">Berlaku Sampai <span class="text-muted">)*</span></label>
              <input type="text" class="form-control" id="berlaku" placeholder="Berlaku">
            </div>

            <div class="mb-3">
              <label for="address2"> Golongan Darah <span class="text-muted">)*</span></label>
              <input type="text" class="form-control" id="gol" placeholder="Golongan Darah">
            </div>

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block"  onclick="preview()"> Render </button>
          </form>
        </div>
      </div>      
      <br>
      <div class="row">
            <div class="col-md-12 text-center">
              <canvas id="card_canvas" width="500" height="317"></canvas>
            </div>
            <br>
            <br>
            <br>
            <div class="col-md-12 text-center">
              <button onclick="save()" class="btn btn-primary btn-lg btn-block"> Simpan  </button>
          </div>
      </div> 
	

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2022-2024 Paranusa</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/vendor/holder.min.js"></script>
  </body>
</html>


