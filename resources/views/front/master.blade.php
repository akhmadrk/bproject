<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en-us">

<head>
   <meta charset="utf-8">
   <title>Babakan</title>

   <!-- mobile responsive meta -->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
   <meta name="description" content="This is meta description">
   <meta name="author" content="Themefisher">

   <!-- plugins -->
   <link rel="preload" href="https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFWJ0bbck.woff2" style="font-display: optional;">
   <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:600%7cOpen&#43;Sans&amp;display=swap" media="screen">
   
   <link rel="stylesheet" href="{{asset('/plugins/themify-icons/themify-icons.css')}}">
   <link rel="stylesheet" href="{{asset('/plugins/slick/slick.css')}}">
   
   <!-- Main Stylesheet -->
   <link rel="stylesheet" href="css/style.css">

   <!--Favicon-->
   <link rel="shortcut icon" href="{{asset('/images/favicon.png')}}" type="image/x-icon">
   <link rel="icon" href="{{asset('/images/favicon.png')}}" type="image/x-icon">
   @yield("style")
</head>

<body>
<!-- navigation -->
   <header class="sticky-top bg-primary border-bottom border-default">
      <div class="container">
         <nav class="navbar navbar-expand-lg navbar-white">
            <a class="navbar-brand" href="/beranda">
               <img class="img-fluid" width="150px" src="{{asset('/images/babakan.svg')}}" alt="LogBook">
            </a>
            <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation">
               <i class="ti-menu"></i>
            </button>

            <div class="collapse navbar-collapse text-center" id="navigation">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link" href="/beranda">Beranda</a>
                  </li>
                  <!-- <li class="nav-item">
                     <a class="nav-link" href="/berita">Berita</a>
                  </li> -->
                  <li class="nav-item">
                     <a class="nav-link" href="/profil">Profil</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/galeri">Galeri</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/pelayanan">Pelayanan</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/kontak">Kontak</a>
                  </li>
               </ul>
            </div>
         </nav>
      </div>
   </header>
<!-- /navigation -->

   <section class="section">
      <div class="container">
         @yield("content")
      </div>
   </section>

   <footer class="section-sm pb-0 border-top border-default">
      <div class="container">
         <div class="row justify-content-between">
            <div class="col-md-3 mb-4">
               <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
            </div>

            <div class="col-lg-2 col-md-3 col-6 mb-4">
               <h6 class="mb-4">Menu Pintas</h6>
               <ul class="list-unstyled footer-list">
                  <li><a href="about.html">Beranda</a></li>
                  <li><a href="contact.html">Profil</a></li>
                  <li><a href="contact.html">Profil</a></li>
                  <li><a href="privacy-policy.html">Galeri</a></li>
                  <li><a href="terms-conditions.html">Pelayanan</a></li>
                  <li><a href="terms-conditions.html">Kontak</a></li>
               </ul>
            </div>

            <div class="col-lg-2 col-md-3 col-6 mb-4">
               <h6 class="mb-4">Social Links</h6>
               <ul class="list-unstyled footer-list">
                  <li><a href="#">facebook</a></li>
                  <li><a href="#">twitter</a></li>
                  <li><a href="#">linkedin</a></li>
                  <li><a href="#">github</a></li>
               </ul>
            </div>

            <div class="col-md-3 mb-4">
               <h6 class="mb-4">Subscribe Newsletter</h6>
               <form class="subscription" action="javascript:void(0)" method="post">
                  <div class="position-relative">
                     <i class="ti-email email-icon"></i>
                     <input type="email" class="form-control" placeholder="Your Email Address">
                  </div>
                  <button class="btn btn-primary btn-block rounded" type="submit">Subscribe now</button>
               </form>
            </div>
         </div>
         <div class="scroll-top">
            <a href="javascript:void(0);" id="scrollTop"><i class="ti-angle-up"></i></a>
         </div>
         <div class="text-center">
            <p class="content">&copy; 2020 - Design &amp; Develop By <a href="https://themefisher.com/" target="_blank">Themefisher</a></p>
         </div>
      </div>
   </footer>


   <!-- JS Plugins -->
   <script src="{{asset('/plugins/jQuery/jquery.min.js')}}"></script>
   <script src="{{asset('/plugins/bootstrap/bootstrap.min.js')}}" async></script>
   <script src="{{asset('/plugins/slick/slick.min.js')}}"></script>

   <!-- Main Script -->
   <script src="{{asset('/js/script.js')}}"></script>
   @yield("script")
</body>
</html>