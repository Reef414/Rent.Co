<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rent.Co - Penyewaan kamera</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand" href="index.php">
            <img src="./gambar/tampilan/logo-putih.png" width="170" height="50" class="d-inline-block align-top" alt="">
        </a>

        <!-- Navbar Search -->
        <!--<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" width="800px">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
            </div>
        </form>-->
    </nav>
    
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
          <li class="nav-item">
              <div class="profil" style="margin-left:27%;">
                  <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="./gambar/tampilan/ig-warna.png" width="100px;">
              </div>
              <p style="color:white; text-align: center;">nama user</p>
          </li>
          
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="confirm-sewa.php">
            <i class="far fa-handshake"></i>
            <span>Konfirmasi sewa</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile_pemilik.php" >
            <i class="fas fa-fw fa-folder"></i>
            <span>Lihat Profil</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listkamera.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Kamera</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Log out</span></a>
        </li>
      </ul>

    <div id="content-wrapper">
    <aside class="col-sm-10" style="margin-top:20px; background-color:#ffffff; margin-bottom:300px;">
                    <div class="sidebar_widget">
                        <div class="widget_heading">
                        <h5><i class="fa fa-envelope" aria-hidden="true"></i>Edit data kamera</h5><br>
                        </div>
                        <form method="post">
                        <div class="md-form">
                      <label for="form3" class="" >Merk kamera</label>
                      <input type="text" id="form3" class="form-control" name="merk" >
                  </div><br>
                  <div class="md-form">
                      <label for="form4" >Seri Kamera</label>
                      <input type="text" id="form4" class="form-control" name="seri" >
                  </div><br>
                  <div class="md-form">
                      <label for="form7">Spesifikasi Kamera</label>
                      <textarea class="form-control" id="SpekTextArea" rows="3" name="spek"></textarea>
                  </div><br>
                  <div class="md-form">
                      <label for="form6">Kondisi Kamera</label>
                      <textarea class="form-control" id="kondisiTextArea" rows="3" name="kondisi"></textarea>
                  </div><br>
                  <div class="md-form">
                      <label for="form5">Harga Sewa</label>
                      <input type="text" id="form5" class="form-control" name="harga">
                  </div><br>
                  <div class="md-form">
                      <label for="form8">Status Kamera</label>
                      <input type="text" id="form8" class="form-control" name="status">
                  </div><br>
                  <div class="md-form">
                      <label for="form9">Foto Kamera</label>
                      <input type="file" name="gbr-kamera">
                  </div><br>
                            <div class="form-group">
                            <button type="submit" class="btn btn-dark"  name="submit" value="Book Now">Sewa </button>
                            </div>
                                
                        </form>
                    </div>
                </aside>

  </div>
  <!-- /#wrapper -->




    
</body>
</html>