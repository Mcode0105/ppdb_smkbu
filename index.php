<?php
include_once 'config.php';
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
    <title>Home</title>

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

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area">
        <div class="hero-slideshow owl-carousel">

            <!-- Single Slide -->
            <div class="single-slide bg-img">
                <!-- Background Image-->
                <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(img/bg-img/bg1.jpg);"></div>
                <!-- Welcome Text -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center">
                        <!-- cek apkah pendaftaran berhasil -->
                         <?php if (isset($_GET['sukses'])): ?>
                              <div class="row h-100 align-items-center justify-content-center">
                             <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4 style="color: blue;"><i class="icon fa fa-check"></i> Selamat, Pendaftaran Berhasil!</h4>
                           SELAMAT DATANG CALON PESERTA DIDIK BARU, SILAHKAN LOGIN MENGGUNAKAN USERNAME DAN PASSWORD NISN
                           <h2 style="text-align: center;"><a href="http://siakad.smkbu.epizy.com/">login disini</a></h2>
                            </div>
                          
                            <?php elseif (isset($_GET['nisn'])) : ?>
                                 <div class="row h-100 align-items-center justify-content-center">
                             <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-ban"></i> Maaf, Pendaftaran Gagal!</h4>
                           Nisn anda sudah terdaftar, silahkan ulangi kembali
                            </div>
                        <?php endif ?>
                           

                        <!-- enddd -->
                        <div class="col-12 col-lg-9">
                            <div class="welcome-text text-center">
                               <h3 style="color: yellow;" data-animation="fadeInDown" data-delay="100ms">SELAMAT DATANG PESERTA DIDIK BARU</h3>
                                <h2 data-animation="fadeInDown" data-delay="300ms"> <span>SMK FULL DAY BUSTANUL ULUM BULUGADING</span></h2>
                                <h4 style= "color: yellow;" >PPDB ONLINE  </h4>
                                <p data-animation="fadeInDown" data-delay="500ms">Aplikasi pendaftaran peserta didik baru berbasis web, untuk mempermudah siswa mengisi formulir secara online</p>
                               <a href="daftar.php" class="btn credit-btn mt-50" data-animation="fadeInDown" data-delay="700ms">Daftar</a>
                               <a href="https://drive.google.com/file/d/1v5UFSWJBIOXe27f_46su90GS4dCkU1pv/view?usp=sharing" target="_blank" download class="btn credit-btn mt-50" data-animation="fadeInDown" data-delay="700ms" >Lihat Video ppdb</a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Duration Indicator -->
                <div class="slide-du-indicator"></div>
            </div>

            <!-- Single Slide -->
            <div class="single-slide bg-img">
                <!-- Background Image-->
                <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(img/bg-img/bg2.jpg);"></div>
                <!-- Welcome Text -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 col-lg-9">
                            <div class="welcome-text text-center">
                                <h3 data-animation="fadeInDown" data-delay="100ms">SELAMAT DATANG PESERTA DIDIK BARU</h3>
                                <h2 data-animation="fadeInDown" data-delay="300ms"> <span>SMK FULL DAY BUSTANUL ULUM BULUGADING</span></h2>
                                 <h4 style= "color: yellow;" >PPDB ONLINE  </h4>
                                <p data-animation="fadeInDown" data-delay="500ms">Aplikasi pendaftaran peserta didik baru berbasis web, untuk mempermudah siswa mengisi formulir secara online</p>
                                 <a href="daftar.php" class="btn credit-btn mt-50" data-animation="fadeInDown" data-delay="700ms">Daftar</a>
                               <a href="https://drive.google.com/file/d/1v5UFSWJBIOXe27f_46su90GS4dCkU1pv/view?usp=sharing" target="_blank" download class="btn credit-btn mt-50" data-animation="fadeInDown" data-delay="700ms">Lihat Video ppdb</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Duration Indicator -->
                <div class="slide-du-indicator"></div>
            </div>

            <!-- Single Slide -->


            <!-- Single Slide -->
    

        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Features Area Start ###### -->
   
    <!-- ##### Features Area End ###### -->

    <!-- ##### Call To Action Start ###### -->
    <section class="cta-area d-flex flex-wrap">
        <!-- Cta Thumbnail -->
        <div class="cta-thumbnail bg-img jarallax" style="background-image: url(img/bg-img/logo.png);  "></div>

        <!-- Cta Content -->
        <div class="cta-content">
            <!-- Section Heading -->
            <div class="section-heading white">
                <div class="line"></div>
                <h3>Visi Misi</h3>
                <h2>SMK FULL DAY BUSTANUL ULUM</h2>
            </div>
            <h5 style="color: blue;" >VISI</h5>
            <h6>Sebagai Pusat Pendidikan dan pengembangan kepribadian peserta didik yang agamis,mandiri, kreatif dan bserwawasan global</h6>
            <h5 style="color: blue;" >MISI</h5>
            <h6><strong style="color: white;" >1. medidik peserta didik denagan nilai agama islam kuat dan kokoh</stong>
            	<strong style="color: white;">2. membina peserta didik agar mempunyai keimanan yg kuat</strong>
            	<strong style="color: white;">3. mengembangkan kegiatan pendidikan dan keahlian dengan model pembelajaran life skill, berjiwa wirausaha,unggul dalam iptek, dan mempunyai akuntabilitas publik</strong>
            	<strong style="color: white;">4. melahirkan lulusan yang berkualitas publik dan mampu berdaya saing yang tinggi dan berwawsan global dengan metodologi kontemporer</strong>
            </h6>
            <br>
                       <h3>jumlah Daftar siswa baru </h3>
            <div class="d-flex flex-wrap mt-50 text-center ">
                <div class="single-skils-area mb-70 mr-5">
                    <div id="circle" class="circle" data-value="1">
                        <div class="skills-text">
                            <?php $l = mysqli_query($conn,"SELECT * FROM siswa WHERE jk = 'Laki laki' "); 
                                  $lk = mysqli_num_rows($l);
                            ?>
                            <span><?= $lk; ?>%</span>
                        </div>
                    </div>
                    <p>laki laki</p>
                </div>

                <!-- Single Skills Area -->
                <div class="single-skils-area mb-70 mr-5">
                    <div id="circle2" class="circle" data-value="1">
                        <div class="skills-text">
                            <?php $p = mysqli_query($conn,"SELECT * FROM siswa WHERE jk = 'Perempuan' "); 
                                  $pr = mysqli_num_rows($p);
                            ?>
                            <span><?= $pr;  ?>%</span>
                        </div>
                    </div>
                    <p>Perempuan</p>
                </div>
                <div class="single-skils-area mb-70 mr-5">
                    <div id="circle2" class="circle" data-value="1">
                        <div class="skills-text">
                            <?php $j = mysqli_query($conn,"SELECT * FROM siswa  "); 
                                  $jr = mysqli_num_rows($j);
                            ?>
                            <span><?= $jr;  ?></span>
                        </div>
                    </div>
                    <p>jumlah total siswa baru</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Call To Action End ###### -->

    <!-- ##### Call To Action Start ###### -->
  
    <!-- ##### Call To Action End ###### -->

    <!-- ##### Services Area Start ###### -->
    
    <!-- ##### Miscellaneous Area End ###### -->

    <!-- ##### Newsletter Area Start ###### -->
    
    <!-- ##### Newsletter Area End ###### -->

    <!-- ##### Footer Area Start ##### -->
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

  <!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "100023591091497", // Facebook page ID
            whatsapp: "+6281553817215", // WhatsApp number
            call_to_action: "silahkan hubungi kami melalui sosial media", // Call to action
            button_color: "#129BF4", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "facebook,whatsapp", // Order of buttons
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->

</body>

</html>