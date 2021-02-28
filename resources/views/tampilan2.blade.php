<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medilab Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets3/img/favicon.png" rel="icon">
  <link href="assets3/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets3/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets3/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets3/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets3/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets3/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets3/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets3/vendor/owl.carousel/assets3/owl.carousel.min.css" rel="stylesheet">
  <link href="assets3/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets3/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v2.1.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <?php
        $datapositif = file_get_contents("https://api.kawalcorona.com/positif");
        $positif = json_decode($datapositif, TRUE);
        $datasembuh = file_get_contents("https://api.kawalcorona.com/sembuh");
        $sembuh = json_decode($datasembuh, TRUE);
        $datameninggal = file_get_contents("https://api.kawalcorona.com/meninggal");
        $meninggal = json_decode($datameninggal, TRUE);
        $dataid = file_get_contents("https://api.kawalcorona.com/indonesia");
        $id = json_decode($dataid, TRUE);
        $dataidprovinsi = file_get_contents("https://api.kawalcorona.com/indonesia/provinsi");
        $idprovinsi = json_decode($dataidprovinsi, TRUE);
        $datadunia= file_get_contents("https://api.kawalcorona.com/");
        $dunia = json_decode($datadunia, TRUE);
      ?>
  <!-- ======= Top Bar ======= -->
 

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Medilab</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets3/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a class="nav-link scrollto" href="#dashboard">Dashboard</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#hotline"><i class="fa fa-phone-square"></i>Hotline</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>

        </ul>
      </nav><!-- .nav-menu -->


    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to Medilab</h1>
      <h2>We are team of talented designers making websites with Bootstrap</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <!-- End Why Us Section -->



    <!-- ======= Counts Section ======= -->
    
    <section id="dashboard" class="counts">
       <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i><img src="{{asset('img/sad-u6e.png')}}" width="50" height="50" alt="Positif"></i>
                <p>TOTAL POSITIF</p>
                 <span data-toggle="counter-up"><?php echo $positif['value'] ?> </span>
                <br>
              <p>Orang</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i ><img src="{{asset('img/happy-ipM.png')}}" width="50" height="50" alt="Positif"></i>
              <p>TOTAL SEMBUH</p>
               <span data-toggle="counter-up"><?php echo $sembuh['value'] ?></span>
               <br>
              <p>Orang</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i><img src="{{asset('img/emoji-LWx.png')}}" width="50" height="50" alt="Positif"></i>
              <p>TOTAL MENINGGAL</p>
                <span data-toggle="counter-up"><?php echo $meninggal['value'] ?></span>
              <br>
              <p>Orang</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i ><img src="{{asset('img/indonesia-PZq.png')}}" width="50" height="50" alt="Positif"></i>
              <h2 >INDONESIA</h2>
       
                      <p class="mb-0 number-font">{{ $positif1 }}&nbsp; POSITIF <br>{{$sembuh1}}&nbsp;SEMBUH <br> {{$meninggal1}}&nbsp;MENINGGAL</p>
          
                
              
            </div>
          </div>

        </div>

       </div>
    </section><!-- End Counts Section -->
        <section id="" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Data Indonesia Berdasarkan provinsi</h2>
        </div>

        <div class="row">
                <div class="card-body" >
                      <div class="table-responsive">
                            <table id="example1" class="table table-bordered" >
                               <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Provinsi</th>
                                <th scope="col">Positif</th>
                                <th scope="col">Sembuh</th>
                                <th scope="col">Meninggal</th>
                                </tr>
                               </thead>
                               <tbody>
        
                              @php
                                  $no = 1;    
                              @endphp
                              <?php
                                  foreach ($provinsi as  $value){
          
                                  
                                  ?>
                              <tr>
                                  <td> <?php echo $no++ ?></td>
                                  <td> {{$value->nama_provinsi}}</td>
                                  <td> {{$value->jumlah_positif}}</td>
                                  <td> {{$value->jumlah_sembuh}}</td>
                                  <td> {{$value->jumlah_meninggal}}</td>
                               
                              
                              </tr>
                                  <?php 
                              
                              } ?>
                               </tbody>
                            </table>
                      </div>
                
              </div>
    
            </div>

      </div>
    </section>
    <section id="services" class="services">
            <div class="container">
      
              <div class="section-title">
                <h2>Data  Kasus Coronavirus Global</h2>
              </div>
      
              <div class="row">
              
                 
                      <div class="card-body" >
                         <div style="height:600px;overflow:auto;margin-right:15px;">
                                 <table class="table table-bordered"  fixed-header  >
                                 <thead>
                                     <tr>
                                     <th scope="col">No</th>
                                     <th scope="col">Negara</th>
                                     <th scope="col">Positif</th>
                                     <th scope="col">Sembuh</th>
                                     <th scope="col">Meninggal</th>
                                     </tr>
                                 </thead>
                                 <tbody>
             
                                 @php
                                     $no = 1;    
                                 @endphp
                                 <?php
                                     foreach  ($dunia as $key =>$value){
             
                                     
                                     ?>
                                 <tr>
                                     <td> <?php echo $no++ ?></td>
                                     <td> <?php echo $value['attributes']['Country_Region'] ?></td>
                                     <td> <?php echo $value['attributes']['Confirmed'] ?></td>
                                     <td><?php echo $value['attributes']['Recovered']?></td>
                                     <td><?php echo $value['attributes']['Deaths']?></td>
                                 </tr>
                                     <?php 
                                 
                                 } ?>
                                 </tbody>
                                 </table>
                                
                               
                    
                   </div>
                  
                </div>
      
              </div>
      
            </div>
    </section><!-- End Services Section -->

    <!-- ======= Services Section ======= -->
      <!-- End Counts Section -->
    <section id="hotline" class="kotak">
          <div class="container">
              <div class="section-title">
                  <h2>Coronavirus Hotline Indonesia</h2>
                  <p>Layanan darurat via telepon yang di sediakan oleh Kemkes dan juga Pemprov DKI Jakarta</p>
                </div>
                <br>
           <div class="row">
   
             <div class="col-lg-3 col-md-6">
               <div class="kotak-box">
                 <i><img src="{{asset('img/unnamed-9mT.png')}}" width="50" height="50" alt="Positif"></i>
                   <a href="tel:0215210441"><h3>021-5210-441 </h3></a>
                   <br>
                   <p>Kementrian Kesehatan</p>
               </div>
             </div>
   
             <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
               <div class="kotak-box">
                  <i><img src="{{asset('img/unnamed-9mT.png')}}" width="50" height="50" alt="Positif"></i>
                  <a href="tel:081212123119"><h3>0812-1212-3119</h3></a>
                  <br>
                  <p>Kementrian Kesehatan</p>
               </div>
             </div>
   
             <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
               <div class="kotak-box">
                 <i><img src="{{asset('img/logo-dki.png')}}" width="50" height="50" alt="Positif"></i>
                 
                 <a href="tel:112"><h3>112 </h3></a>
                 <br>
                 <p>Pemprov DKI Jakarta</p>
               </div>
             </div>
   
             <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
               <div class="kotak-box">
                 <i><img src="{{asset('img/logo-dki.png')}}" width="50" height="50" alt="Positif"></i>
                 
                 <a href="tel:0813-8837-6955"><h3>0813-8837-6955 </h3></a>
                 <br>
                 <p>Pemprov DKI Jakarta</p>
                 
               </div>
             </div>
    
   
           </div>

        <br>
          <div class="row">
   
              <div class="col-lg-3 col-md-6">
                <div class="kotak-box">
                  <i><img src="{{asset('img/jatengnew.png')}}" width="50" height="50" alt="Positif"></i>
                    <a href="tel:0243580713"><h3>024-358-0713 </h3></a>
                    <br>
                    <p>Pemprov Jawa Tengah</p>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                <div class="kotak-box">
                   <i><img src="{{asset('img/jatengnew.png')}}" width="50" height="50" alt="Positif"></i>
                   <a href="tel:082313600560"><h3>0823-1360-0560 </h3></a>
                   <br>
                   <p>Pemprov Jawa Tengah</p>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="kotak-box">
                  <i><img src="{{asset('img/jatim.png')}}" width="50" height="50" alt="Positif"></i>
                  
                  <a href="tel:0318430313"><h3>031-843-0313 </h3></a>
                  <br>
                  <p>Pemprov Jawa Timur</p>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="kotak-box">
                  <i><img src="{{asset('img/jatim.png')}}" width="50" height="50" alt="Positif"></i>
                  
                  <a href="tel:081334367800"><h3>0813-3436-7800 </h3></a>
                  <br>
                  <p>Pemprov Jawa Timur</p>
                  
                </div>
              </div>
     
    
            </div>
           <br>
         <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="kotak-box">
                  <i><img src="{{asset('img/jabar.png')}}" width="50" height="50" alt="Positif"></i>
                    <a href="tel:119"><h3>119 </h3></a>
                    <br>
                    <p>Pemprov Jawa Barat</p>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                <div class="kotak-box">
                   <i><img src="{{asset('img/jabar.png')}}" width="50" height="50" alt="Positif"></i>
                   <a href="tel:0215210441"><h3>0811-209-3306 </h3></a>
                   <br>
                   <p>Pemprov Jawa Barat</p>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="kotak-box">
                  <i><img src="{{asset('img/yogya.jpg')}}" width="50" height="50" alt="Positif"></i>
                  
                  <a href="tel:0274555585"><h3>0274-555-585</h3></a>
                  <br>
                  <p>Pemprov D.I Yogyakarta</p>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="kotak-box">
                  <i><img src="{{asset('img/yogya.jpg')}}" width="50" height="50" alt="Positif"></i>
                  
                  <a href="tel:08112764800"><h3>0811-2764-800 </h3></a>
                  <br>
                  <p>Pemprov D.I Yogyakarta</p>
                  
                </div>
              </div>
        </div>
   
        </div>
       </section>


       <section id="services" class="services">
            <div class="container">
      
              <div class="section-title">
                <h2>Services</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
              </div>
      
              <div class="row">
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                 <a href="https://www.kompas.com/tren/read/2020/03/03/183500265/infografik-daftar-100-rumah-sakit-rujukan-penanganan-virus-corona">
                  <div class="icon-box">
                    <div class="icon"><i class="fas fa-hospital"></i></div>
                    <h4><a href="https://www.kompas.com/tren/read/2020/03/03/183500265/infografik-daftar-100-rumah-sakit-rujukan-penanganan-virus-corona">
                        Daftar 100 Rumah Sakit Rujukan Penangan Virus Corona</a></h4>
                    <p>Kompas</p>
                  </div>
                 </a>
                </div>
      
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                  <a href="https://www.unicef.org/indonesia/id/coronavirus">
                  <div class="icon-box">
                    <div class="icon"><i class="fas fa-notes-medical"></i></div>
                    <h4><a href="https://www.unicef.org/indonesia/id/coronavirus">
                        Novel Corona Virus (COVID-19) Hal-hal Yang Perlu Anda Ketahui</a></h4>
                    <p>Unicef Indonesia</p>
                  </div>
                  </a>
                </div>
      
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4  mt-md-0">
                 <a href="https://infeksiemerging.kemkes.go.id/">
                  <div class="icon-box">
                    <div class="icon"><i class="fas fa-hospital-user"></i></div>
                    <h4><a href="https://infeksiemerging.kemkes.go.id/">Media Informasi Resmi Penyakit Infeksi Emerging</a></h4>
                    <p>Kementrian Kesehaan</p>
                  </div>
                 </a>
                </div>
      
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                 <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public">
                  <div class="icon-box">
                    <div class="icon"><i class="fas fa-dna"></i></div>
                    <h4><a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public">
                        Coronavirus Diase (COVID-19) Advice For The Public</a></h4>
                    <p>WHO</p>
                  </div>
                 </a>
                </div>
      
              </div>
      
            </div>
      </section><!-- End Services Section -->






  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Medilab</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Medilab</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets3/vendor/jquery/jquery.min.js"></script>
  <script src="assets3/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets3/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets3/vendor/php-email-form/validate.js"></script>
  <script src="assets3/vendor/venobox/venobox.min.js"></script>
  <script src="assets3/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets3/vendor/counterup/counterup.min.js"></script>
  <script src="assets3/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets3/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets3/js/main.js"></script>

</body>

</html>