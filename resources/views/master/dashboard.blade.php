<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>SandBox</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="masterassets/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="masterassets/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="masterassets/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="masterassets/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="masterassets/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="masterassets/images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="masterassets/images/logo3.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="#">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#about"> About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#service"> Service</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#team">Team</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#contact">Contact</a>
                              </li>
                              @if (Route::has('login'))
                              
                    @auth
                       <li> <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline nav-link">Dashboard</a> </li>
                    @else
                      <li>  <a href="{{ route('login') }}" class="text-sm text-gray-700 underline nav-link">Log in</a> </li>

                        @if (Route::has('register'))
                     <li>    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline nav-link">Register</a> </li>
                        @endif
                    @endauth
                </div>
            @endif
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="text-bg">
                     <h1>WE ARE SANDBOX</h1>
                     <p>A full-service private tutor agency that loves what we do. </p>
                     <a href="register">Let's Registered</a>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="text-img">
                     <figure><img src="masterassets/images/img.png" /></figure>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- Hosting -->
      <div id="about" class="About">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <br>
                     <h2>About Us</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="web_hosting">
                     <p>Merupakan bimbingan belajar yang digunakan untuk membantu anak dalam menyeimbangi ilmu di sekolah. Terinspirasi dari banyaknya anak yang masih membutuhkan pengajaran lebih dari waktu terbatas sekolah, SandBox akan membantu memahami dan mendengarkan lebih dalam apa yang dibutuhkan anak.Didukung oleh para pengajar yang bertalenta dengan cara trik belajar yang mudah dipahami oleh anak. Maka, cukup tentang tim SandBox, mari kita bantu mewujudkan cita-cita kalian.</p>
                     <p>Mendapatkan pengajaran tambahan dari pengajar • Memberikan trik belajar yang mudah dipahami • Mendapatkan fasilitas pendukung untuk pengajaran • Fasilitas tes minat bakat • Membahas garis besar yang akan dibahas pada ujian • Jadwal bisa menyesuaikan jika terdapat kendala</p>
                     <a href="#">Read more</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Hosting -->
      <!-- Services  -->
      <div id="service" class="Services">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Services</h2>
                     <p>Program Les Privat SMP dengan Kurikulum Nasional, Kurikulum 2013, Bilingual, dan Cambridge.  <br>
                        teimpor sittem elit inuning ut sed.
                     </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Services-box">
                     <i><img src="masterassets/images/service1.png" alt="#" /></i>
                     <h3> Matematika</h3>
                     <p>Membantu dalam memecahkan suatu masalah pada aritmetika, aljabar, trigonometri, geometri dan cabang-cabangnya.</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Services-box">
                     <i><img src="masterassets/images/service2.png" alt="#" /></i>
                     <h3>Bahasa Inggris</h3>
                     <p>Meningkatkan grammar, speaking, dan listening.</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Services-box">
                     <i><img src="masterassets/images/service3.png" alt="#" /></i>
                     <h3>Ilmu Pengetahuan Alam</h3>
                     <p>Membahas tentang alam semesta yang berkaitan dengan cara mencari tahu secara sistematis.</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Services-box">
                     <i><img src="masterassets/images/service5.png" alt="#" /></i>
                     <h3>Seni Budaya</h3>
                     <p>Meningkatkan tentang cara hidup berkembang secara bersama pada suatu kelompok yang memiliki unsur keindahan (estetika) secara turun temurun dari generasi ke generasi.</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Services-box">
                     <i><img src="masterassets/images/service4.png" alt="#" /></i>
                     <h3>Pendidikan Kewarganegaraan</h3>
                     <p>Mengembangkan peserta didik menjadi warga negara yang memiliki semangat kebangsaan, cinta tanah air, demokratis.</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Services-box">
                     <i><img src="masterassets/images/service6.png" alt="#" /></i>
                     <h3>Teknologi Informasi dan Komunikasi</h3>
                     <p>Mempelajari dan mengembangkan segala kegiatan yang terkait dengan pemrosesan, pengelolaan dan penyampaian informasi antar sarana/media.</p>
                  </div>
               </div>
               <a class="read_more" href="#">Read More</a>
            </div>
         </div>
      </div>
      <!-- end Servicess -->
      <!-- why -->
      <div id="team" class="Team">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <br>
                     <h2>Meet The Team</h2>
                     <br>
                     <p>Find me.</p>
                     <p>Living to be someone else's pride is a difficult thing, you have to hide many things for fear of disappointing, be yourself. If every day is clear, then this world will become a desert. Follow your dream.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div id="box_ho" class="why-box">
                     <i><img src="masterassets/images/why1.png" alt="#" /></i>
                     <br>
                     <br>
                     <h3>Kiki Andarista</h3>
                     <p>Founder / CEO</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="why-box">
                     <i><img src="masterassets/images/why2.png" alt="#" /></i>
                     <br>
                     <br>
                     <h3>Tasya Desta Febrisa Nuke</h3>
                     <p>Web Designer</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="why-box">
                     <i><img src="masterassets/images/why3.png" alt="#" /></i>
                     <br>
                     <br>
                     <h3>Riris Fitri Ramadhani</h3>
                     <p>Creative Director</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end why -->
      <!-- contact -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-6 offset-md-3 ">
                  <form class="main_form">
                     <div class="row">
                        <div class="col-sm-12">
                           <input class="contactus" placeholder="Name" type="text" name="Name">
                        </div>
                        <div class="col-sm-12">
                           <input class="contactus" placeholder="Email" type="text" name=" Email">
                        </div>
                        <div class="col-sm-12">
                           <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                        </div>
                        <div class="col-sm-12">
                           <button class="send">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>

      <!-- end contact -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-10 offset-md-1">
                     <div class="cont">
                        <h3>Contact now</h3>
                        <span> Mari Mendaftar </span>
                        <p>Hubungi kami sekarang juga untuk berdiskusi terkait Les Privat yang akan diambil. Admin kami akan memberikan pelayanan terbaik untuk mewujudkan keinginan Anda  
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>Copyright &copy; All Rights Reseverd.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
    
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="masterassets/js/jquery.min.js"></script>
      <script src="masterassets/js/popper.min.js"></script>
      <script src="masterassets/js/bootstrap.bundle.min.js"></script>
      <script src="masterassets/js/jquery-3.0.0.min.js"></script>
      <script src="masterassets/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="masterassets/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="masterassets/js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>

