<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medilab Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets2/img/favicon.png" rel="icon">
  <link href="assets2/img/apple-touch-icon.png" rel="apple-touch-icon">

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
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="bi bi-phone"></i> +1 5589 55488 55
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Medilab</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets2/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="#contact">Dashboard</a></li>
          <li><a class="nav-link scrollto" href="#contact">Hotline</a></li>
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
    <section id="counts" class="counts">
       <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i><img src="{{asset('img/sad-u6e.png')}}" width="50" height="50" alt="Positif"></i>
                <p>TOTAL POSITIF</p>
                <h2 class="mb-0 number-font"><?php echo $positif['value'] ?> </h2>
                <br>
              <p>Orang</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i ><img src="{{asset('img/happy-ipM.png')}}" width="50" height="50" alt="Positif"></i>
              <p>TOTAL SEMBUH</p>
               <h2 class="mb-0 number-font"><?php echo $sembuh['value'] ?></h2>
               <br>
              <p>Orang</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i><img src="{{asset('img/emoji-LWx.png')}}" width="50" height="50" alt="Positif"></i>
              <p>TOTAL MENINGGAL</p>
                <h2 class="mb-0 number-font"><?php echo $meninggal['value'] ?></h2>
              <br>
              <p>Orang</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i ><img src="{{asset('img/indonesia-PZq.png')}}" width="50" height="50" alt="Positif"></i>
              <h2 >INDONESIA</h2>
       
                      <p class="mb-0 number-font">{{ $positif1 }}&nbsp; POSITIF, &nbsp;{{$sembuh1}}&nbsp;SEMBUH,&nbsp; {{$meninggal1}}&nbsp;MENINGGAL</p>
          
                
              
            </div>
          </div>

        </div>

       </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Data Indonesia Berdasarkan provinsi</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
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
    <section id="" class="services">
        <div class="container">
  
          <div class="section-title">
            <h2>Kasus Coronavirus Global</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
  
          <div class="row">
              <div class="card-body" >
                    <div class="table-responsive">
                          <table id="example2" class="table table-bordered" >
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
                                foreach ($dunia as $key => $value){
        
                                
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
      <section id="counts" class="counts">
          <div class="container">
              <div class="section-title">
                  <h2>Coronavirus Hotline Indonesia</h2>
                  <p>Layanan darurat via telepon yang di sediakan oleh Kemkes dan juga Pemprov DKI Jakarta</p>
                </div>
                <br>
           <div class="row">
   
             <div class="col-lg-3 col-md-6">
               <div class="count-box">
                 <i><img src="{{asset('img/unnamed-9mT.png')}}" width="50" height="50" alt="Positif"></i>
                   <a href="tel:0215210441"><h2 class="mb-0 number-font">021-5210-441 </h2></a>
                   <br>
                   <p>Kementrian Kesehatan</p>
               </div>
             </div>
   
             <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
               <div class="count-box">
                  <i><img src="{{asset('img/unnamed-9mT.png')}}" width="50" height="50" alt="Positif"></i>
                  <a href="tel:0215210441"><h2 class="mb-0 number-font">021-5210-441 </h2></a>
                  <br>
                  <p>Kementrian Kesehatan</p>
               </div>
             </div>
   
             <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
               <div class="count-box">
                 <i><img src="{{asset('img/logo-dki.png')}}" width="50" height="50" alt="Positif"></i>
                 
                 <a href="tel:112"><h2 class="mb-0 number-font">112 </h2></a>
                 <br>
                 <p>Pemprov DKI Jakarta</p>
               </div>
             </div>
   
             <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
               <div class="count-box">
                 <i><img src="{{asset('img/logo-dki.png')}}" width="50" height="50" alt="Positif"></i>
                 
                 <a href="tel:0813-8837-6955"><h2 class="mb-0 number-font">0813-8837-6955 </h2></a>
                 <br>
                 <p>Pemprov DKI Jakarta</p>
                 
               </div>
             </div>
    
   
           </div>
           <br>
         <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="count-box">
                  <i><img src="{{asset('img/unnamed-9mT.png')}}" width="50" height="50" alt="Positif"></i>
                    <a href="tel:0215210441"><h2 class="mb-0 number-font">021-5210-441 </h2></a>
                    <br>
                    <p>Kementrian Kesehatan</p>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                <div class="count-box">
                   <i><img src="{{asset('img/unnamed-9mT.png')}}" width="50" height="50" alt="Positif"></i>
                   <a href="tel:0215210441"><h2 class="mb-0 number-font">021-5210-441 </h2></a>
                   <br>
                   <p>Kementrian Kesehatan</p>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                  <i><img src="{{asset('img/logo-dki.png')}}" width="50" height="50" alt="Positif"></i>
                  
                  <a href="tel:112"><h2 class="mb-0 number-font">112 </h2></a>
                  <br>
                  <p>Pemprov DKI Jakarta</p>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                  <i><img src="{{asset('img/logo-dki.png')}}" width="50" height="50" alt="Positif"></i>
                  
                  <a href="tel:0813-8837-6955"><h2 class="mb-0 number-font">0813-8837-6955 </h2></a>
                  <br>
                  <p>Pemprov DKI Jakarta</p>
                  
                </div>
              </div>
          </div>
          <br>
          <div class="row">
   
              <div class="col-lg-3 col-md-6">
                <div class="count-box">
                  <i><img src="{{asset('img/unnamed-9mT.png')}}" width="50" height="50" alt="Positif"></i>
                    <a href="tel:0215210441"><h2 class="mb-0 number-font">021-5210-441 </h2></a>
                    <br>
                    <p>Kementrian Kesehatan</p>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                <div class="count-box">
                   <i><img src="{{asset('img/unnamed-9mT.png')}}" width="50" height="50" alt="Positif"></i>
                   <a href="tel:0215210441"><h2 class="mb-0 number-font">021-5210-441 </h2></a>
                   <br>
                   <p>Kementrian Kesehatan</p>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                  <i><img src="{{asset('img/logo-dki.png')}}" width="50" height="50" alt="Positif"></i>
                  
                  <a href="tel:112"><h2 class="mb-0 number-font">112 </h2></a>
                  <br>
                  <p>Pemprov DKI Jakarta</p>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                  <i><img src="{{asset('img/logo-dki.png')}}" width="50" height="50" alt="Positif"></i>
                  
                  <a href="tel:0813-8837-6955"><h2 class="mb-0 number-font">0813-8837-6955 </h2></a>
                  <br>
                  <p>Pemprov DKI Jakarta</p>
                  
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
                <h2>Contact</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
              </div>
            </div>
      
            <div>
              <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
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
      
                <div class="col-lg-8 mt-5 mt-lg-0">
      
                  <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                      </div>
                      <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                      </div>
                    </div>
                    <div class="form-group mt-3">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                      <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                  </form>
      
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
  <script src="assets2/vendor/purecounter/purecounter.js"></script>
  <script src="assets2/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- DataTables -->
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/sw/sweetalert2.all.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="assets2/js/main.js"></script>
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