<?php
include_once 'config.php';
if (isset($_POST['simpan'])) {
   
   if (daftar($_POST) > 0 ) {
       header("Location: index.php?sukses");
   }else{
    header("Location: index.php?nisn");
   }
}

  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Registrasi</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/logo.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <meta name="google-site-verification" content="NXUAWnvzSWz1fAJABx3gzqgQFZJqvI1MA3rspxi6JyA" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-165262180-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-165262180-1');
</script>
<script async src="https://cse.google.com/cse.js?cx=011613507369153229587:9dwgkihppxe"></script>
<div class="gcse-search"></div>

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex justify-content-between">
                        <!-- Logo Area -->
                        <div class="logo">
                            <a href="index.php"><img style="width: 50px;height: 50px;" src="img/core-img/logo.png" alt=""></a>
                        </div>

                        <!-- Top Contact Info -->
                        <div class="top-contact-info d-flex align-items-center">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Langkap Bangsalsari Jember, 68154"><img src="img/core-img/placeholder.png" alt=""> <span>Langkap Bangsalsari Jember, 68154</span></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="smkbulugading@yahoo.com"><img src="img/core-img/message.png" alt=""> <span>smkbulugading@yahoo.com</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="credit-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="creditNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="http://siakad.smkbu.epizy.com">Login</a></li>
                                    <li><a href="daftar.php">Daftar</a></li>
                                   
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Contact -->
                        <div class="contact">
                            <a href="#"><img style="height: 40px;width: 40px;" src="img/core-img/logo.png" alt=""> SMK BULUGADING</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/bg3.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Daftar</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Daftar</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
  

        <!-- ##### Google Maps ##### -->
        <div class="map-area">
           <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6859.397485524198!2d113.556743!3d-8.198883!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x666d71a20a26558!2sSMK%20Full%20Day%20Bustanul%20Ulum%20Bulugading!5e1!3m2!1sid!2sid!4v1586851083678!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <!-- Contact Area -->
            <div class="contact---area">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <!-- Contact Area -->
                            <div class="contact-form-area contact-page">
                                <h4 class="mb-50"> Silahkan isi Formulir Dibawah Ini</h4>

                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label style="color: white;" >nama lengkap</label>
                                                <input type="text" class="form-control" id="name" placeholder="Nama Lengkap" name="nama" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label style="color: white;" >Nisn</label>
                                                <input type="text" class="form-control" id="email" placeholder="Nisn" name="nisn" required="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label style="color: white;" >Nik</label>
                                                <input type="text" class="form-control" id="subject" placeholder="Nik" name="nik" required="">
                                            </div>
                                        </div>
                                          <div class="col-6">
                                            <div class="form-group">
                                                <label style="color: white;" >Tempat Lahir</label>
                                                <input type="text" class="form-control" id="subject" placeholder="Tempat Lahir" name="tempat_lahir" required="">
                                            </div>
                                        </div>
                                         <div class="col-6">
                                            <div class="form-group">
                                                <label style="color: white;" >Tanggal Lahir</label>
                                                <input type="date" class="form-control" id="subject" placeholder="Tanggal Lahir" name="tgl_lahir" required="">
                                            </div>
                                        </div>
                                         <div class="col-6">
                                            <div class="form-group">
                                                <label style="color: white;" >Jenis Kelamin</label>
                                                <select name="jk" class="form-control" >
                                                    <option value=""> -- pilih Jenis Kelamin --</option>
                                                     <option value="Laki laki">Laki laki</option>
                                                     <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                             <div class="col-6">
                                            <div class="form-group">
                                                <label style="color: white;" >Nama ibu kandung</label>
                                                <input type="text" class="form-control" id="subject" placeholder="ibu kandung" required="" name="ibu_kandung">
                                            </div>
                                        </div>
                                         <div class="col-6">
                                            <div class="form-group">
                                                <label style="color: white;" >Agama</label>
                                                <select name="agama" class="form-control" >
                                                    <option value=""> -- pilih agama --</option>
                                                    <option>islam</option>
                                                    <option>budha</option>
                                                    <option>kristen</option>
                                                    <option>hidnu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label style="color: white;" >Alamat Lengkap</label>
                                                <input type="text" class="form-control" id="subject" name="alamat" placeholder="ex: desa/kecamatan/kota" required="">
                                            </div>
                                        </div>
                                         <div class="col-6">
                                            <div class="form-group">
                                                <label style="color: white;" >Desa Kelurahan</label>
                                                <input type="text" class="form-control" id="subject" name="desa_kelurahan" placeholder="desa kelurahan" required="">
                                            </div>
                                        </div>
                                         <div class="col-6">
                                            <div class="form-group">
                                                <label style="color: white;" >Kecamatan </label>
                                                <input type="text" class="form-control" id="subject" name="kecamatan" placeholder="Kecamatan" required="">
                                            </div>
                                        </div>
                                         <div class="col-6">
                                            <div class="form-group">
                                                <label style="color: white;" >No hp </label>
                                                <input type="text" class="form-control" id="subject" name="nohp" placeholder="No hp" required="">
                                            </div>
                                        </div>
                                       
                                         <div class="col-6">
                                            <div class="form-group">
                                                <label style="color: white;" >Alasal Sekolah </label>
                                                <input type="text" class="form-control" id="subject" name="asal_sekolah" placeholder="Asal Sekolah" required="">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn credit-btn mt-30" type="submit" name="simpan"> Daftar </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

  
    <!-- ##### Newsletter Area End ###### -->

   <footer class="footer-area section-padding-100-0">
        <div class="container">
            <div class="row">

                

                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copywrite-content d-flex flex-wrap justify-content-between align-items-center">
                            <!-- Footer Logo -->
                            <a href="index.html" class="footer-logo"><img style="height: 70px;width: 70px;" src="img/core-img/logo.png" alt=""></a>

                            <!-- Copywrite Text -->
                             <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> SMK Full Day Bustanul Ulum<i class="fa fa-heart-o" aria-hidden="true"></i> powered by <a href="https://colorlib.com" target="_blank">Abdul Munif</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>