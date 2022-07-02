
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
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Form Isian</h2>
        <p class="lead">Isian Diatas harus valid dan Jelas</p>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h4 class="mb-3">Silahkan Upload Tanda Tangan Anda</h4>
          <form method="POST" action="aksi.php?act=upload_ttd" enctype="multipart/form-data">
            <div class="row">

            <div class="col-md-12">
              <label for="address2"> Upload Tanda Tangan <span class="text-muted">)*</span></label>
              <input type="file" class="form-control" name="ttd" required>
            </div>
            <p>.</p>
            <div class="col-md-12">
                <button class="btn btn-primary btn-lg btn-block"  type="submit"> Upload </button>
            </div>
          </form>
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
