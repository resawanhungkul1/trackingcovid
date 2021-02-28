<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TRACKING COVID-19</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets2/img/Kawal Corona.png" rel="icon">
  <link href="assets2/img/Kawal Corona.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets2/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets2/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets2/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets2/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets2/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v4.0.0
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

      <h1 class="logo me-auto"><a href="index.html">Tracking Covid</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets2/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="#dashboard">Dashboard</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#hotline">Hotline</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to Kawal Corona</h1>
      <h2>Coronavirus Global & Indonesia Live Data</h2>

    </div>
  </section><!-- End Hero -->

  <main id="main">



    <!-- ======= Counts Section ======= -->
    <section id="dashboard" class="kotak">
       <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="kotak-box">
              <i><img src="{{asset('img/sad-u6e.png')}}" width="50" height="50" alt="Positif"></i>
                <p>TOTAL POSITIF</p>
                <h2><?php echo $positif['value'] ?> </h2>
                <br>
              <p>Orang</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="kotak-box">
              <i ><img src="{{asset('img/happy-ipM.png')}}" width="50" height="50" alt="Positif"></i>
              <p>TOTAL SEMBUH</p>
               <h2><?php echo $sembuh['value'] ?></h2>
               <br>
              <p>Orang</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="kotak-box">
              <i><img src="{{asset('img/emoji-LWx.png')}}" width="50" height="50" alt="Positif"></i>
              <p>TOTAL MENINGGAL</p>
                <h2><?php echo $meninggal['value'] ?></h2>
              <br>
              <p>Orang</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="kotak-box">
              <i ><img src="{{asset('img/indonesia-PZq.png')}}" width="50" height="50" alt="Positif"></i>
              <h2 >INDONESIA</h2>
       
                      <p class="mb-0 number-font">{{ $positif1 }}&nbsp; POSITIF <br>{{$sembuh1}}&nbsp;SEMBUH <br> {{$meninggal1}}&nbsp;MENINGGAL</p>
          
                
              
            </div>
          </div>

        </div>

       </div>
    </section><!-- End kotaks Section -->

    <!-- ======= Services Section ======= -->
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
    </section><!-- End Services Section -->
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


      <section id="about" class="services">
            <div class="container">
      
              <div class="section-title">
                <h2> About</h2>
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
      </section>

    <!-- ======= Appointment Section ======= -->
    <!-- End Appointment Section -->

    <!-- ======= Departments Section ======= -->
    ><!-- End Departments Section -->

    <!-- ======= Doctors Section ======= -->
    <!-- End Doctors Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Testimonials Section ======= -->
><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
            <div class="container">
      
              <div class="section-title">
                <h2>Hubungi Kami</h2>
                <p>Berikut Informasi Kontak Yang Bisa Digunakan Berbagai Keperluan</p>
                </div>
            </div>
      
   
      
            <div class="container">
              <div class="row mt-5">
      
                <div class="col-lg-4">
                  <div class="info">
                    <div class="address">
                      <i class="bi bi-geo-alt"></i>
                      <h4>Location:</h4>
                      <p>A108 Adam Street, New York, NY 535022</p>
                    </div>
      
                    <div class="email">
                      <i class="bi bi-envelope"></i>
                      <h4>Email:</h4>
                      <p>info@example.com</p>
                    </div>
      
                    <div class="phone">
                      <i class="bi bi-phone"></i>
                      <h4>Call:</h4>
                      <p>+1 5589 55488 55s</p>
                    </div>
      
                  </div>
      
                </div>
  
               </div>
      
    
      
              </div>
      
            </div>
          </section>
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

 

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
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
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->

  <script src="assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets2/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets2/vendor/php-email-form/validate.js"></script>
  <script src="assets2/vendor/counterup/counterup.min.js"></script>
  <script src="assets2/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets2/js/main.js"></script>
  <!-- DataTables -->
  <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

  <!-- Template Main JS File -->
  
  <script>
    $(function () {
      $('#example1').DataTable({
        "info":true,
        "responsive": true,
      });
      $('#example2').DataTable({
        "responsive": true,
      });
    });
  </script>

</body>

</html>