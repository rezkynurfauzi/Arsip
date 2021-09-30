<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="Arsip Buku Berbasis Website">
        <meta name="keywords" content="Arsip, Buku, Online, Website">
  <link rel="icon" href="../../favicon.ico">

  <title>Arsip Buku</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">
  <script src="js/ie-emulation-modes-warning.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>

</head>

<body background="img/page-background.png">

  <div class="container">

    <form class="form-signin" action="insert-anggota.php" method="post">
      <center>
        <h2 class="form-signin-heading"><span class="glyphicon glyphicon-th-large"></span> Arsip Buku </h2>
      </center>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" id="email" name="email" class="form-control" placeholder="Email" autocomplete="off" autofocus="on" required>
      </div>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" autocomplete="off" autofocus="on" required>
      </div>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" id="username" name="username" class="form-control" placeholder="Username" autocomplete="off" autofocus="on" required>
      </div>
      <div class="input-group" style="margin-top: 5px;">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
        <input type="text" id="password" name="password" class="form-control" placeholder="Password" autocomplete="off" required>
      </div>
      <div class="input-group" style="margin-top: 5px;">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <select class="form-control" name="jk" id="jk">
          <option> -- Pilih Salah Satu --</option>
          <option value="P"> Perempuan</option>
          <option value="L"> Laki-laki</option>
        </select>
      </div>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" id="umur" name="umur" class="form-control" placeholder="Usia" autocomplete="off" autofocus="on" required>
      </div>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" id="ttl" name="ttl" class="form-control" placeholder="Tempat, Tanggal Lahir (DD MM YY)" autocomplete="off" autofocus="on" required>
      </div>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat" autocomplete="off" autofocus="on" required>
      </div>
      <br />
      <input type="submit" value="Daftar" class="btn btn-sm btn-primary" />&nbsp;
      <a href="login.html" class="btn btn-sm btn-danger">Batal </a>
      <p>Login? <a href="login.html">klik disini</a></p>
    </form>

  </div> <!-- /container -->

  <center>
    <h5 class="form-signin">Copyright &copy; <a href="#" data-toggle="modal" data-target="#contact">Arsip Buku</a>
    </h5>
  </center>

  <!-- Modal Dialog Contact -->
  <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Contact Us</h4>
        </div>
        <div class="modal-body">
          <p> Arsip Buku adalah salah satu layanan bagi pengguna untuk dapat mengakses berbagai Dokumen yang dan
            dilakukan kapan saja dan dari mana saja, dengan menggunakan jaringan internet.</p>
          <p> Arsip Buku bebasis website yang responsif, untuk info, saran, maupun kritik bisa menghubungi kami :
          </p>
          <table>
            <tr>
              <td>E-mail</td>
              <td>:</td>
              <td><a href="#">arsipbuku@gmail.com</a></td>
            </tr>
            <br />
            <tr>
              <td>Blog</td>
              <td>:</td>
              <td><a href="#" target="_blank">www.arsipbuku.com</a></td>
            </tr>
            <br />
            <tr>
              <td>Website</td>
              <td>:</td>
              <td><a href="#" target="_blank">www.arsipbuku.com</a></td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- end dialog modal -->


  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>