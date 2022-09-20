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
</head>

<body>
<!-- navigation -->
   <header class="sticky-top bg-primary border-bottom border-default">
      <div class="container">
         <nav class="navbar navbar-expand-lg navbar-white">
            <!-- <a class="navbar-brand" href="index.html"> -->
            <img class="img-fluid" width="150px" src="{{asset('/images/babakan.svg')}}" alt="LogBook">
            <!-- </a> -->
            <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation">
               <i class="ti-menu"></i>
            </button>

            <div class="collapse navbar-collapse text-center" id="navigation">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link" href="#">Beranda</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="about.html">Profil</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="about.html">Galeri</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="about.html">Pelayanan</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="contact.html">Kontak</a>
                  </li>
               </ul>
            </div>
         </nav>
      </div>
   </header>
<!-- /navigation -->

   <section class="section">
      <div class="container">
         <div class="row">
            <!--   Carousel full --> 
            <div class="col-lg-12  mb-5 mb-lg-0">
               <article class="row mb-5">
                  <div class="col-12">
                     <div class="post-slider">
                        <img loading="lazy" src="{{asset('/images/post/post-6.jpg')}}" class="img-fluid" alt="post-thumb">
                        <img loading="lazy" src="{{asset('/images/post/post-1.jpg')}}" class="img-fluid" alt="post-thumb">
                        <img loading="lazy" src="{{asset('/images/post/post-3.jpg')}}" class="img-fluid" alt="post-thumb">
                     </div>
                  </div>
               </article>
            </div>
            
            <div class="col-lg-8  mb-5 mb-lg-0">
               <article class="row mb-5">
                  <div class="col-lg-12">
                     <div class="title text-center">
                        <h2 class="mb-5">Berita</h2>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="post-slider">
                        <img loading="lazy" src="{{asset('/images/post/post-6.jpg')}}" class="img-fluid" alt="post-thumb">
                        <img loading="lazy" src="{{asset('/images/post/post-1.jpg')}}" class="img-fluid" alt="post-thumb">
                        <img loading="lazy" src="{{asset('/images/post/post-3.jpg')}}" class="img-fluid" alt="post-thumb">
                     </div>
                  </div>
                  <div class="col-12 mx-auto">
                     <h3><a class="post-title" href="post-elements.html">Judul Berita</a></h3>
                     <p>Heading example Here is example of hedings. You can use this heading by following markdownify rules. For example: use # for heading 1 and use ###### for heading 6. Heading 1 Heading 2 Heading 3 Heading 4 Heading 5 Heading 6 Emphasis Emphasis, aka italics, with asterisks or underscores.</p> <a href="post-elements.html" class="btn btn-outline-primary">Continue Reading</a>
                  </div>
               </article>
            </div>

            <aside class="col-lg-4">
                  <!-- Search -->
                  <div class="widget">
                     <h5 class="widget-title"><span>Pencarian</span></h5>
                     <form action="/logbook-hugo/search" class="widget-search">
                           <input id="search-query" name="s" type="search" placeholder="Tuliskan pencarian...">
                           <button type="submit"><i class="ti-search"></i>
                           </button>
                     </form>
                  </div>
                  <!-- latest post -->
                  <div class="widget">
                     <h5 class="widget-title"><span>Berita Terbaru</span></h5>
                     <!-- post-item -->
                     <ul class="list-unstyled widget-list">
                           <li class="media widget-post align-items-center">
                              <a href="post-elements.html">
                              <img loading="lazy" class="mr-3" src="{{asset('/images/post/post-6.jpg')}}">
                              </a>
                              <div class="media-body">
                              <h5 class="h6 mb-0"><a href="post-elements.html">Elements That You Can Use To Create A New Post On
                                       This Template.</a></h5>
                              <small>March 15, 2020</small>
                              </div>
                           </li>
                     </ul>
                     <ul class="list-unstyled widget-list">
                           <li class="media widget-post align-items-center">
                              <a href="post-details-1.html">
                              <img loading="lazy" class="mr-3" src="{{asset('/images/post/post-1.jpg')}}">
                              </a>
                              <div class="media-body">
                              <h5 class="h6 mb-0"><a href="post-details-1.html">Cheerful Loving Couple Bakers Drinking Coffee</a>
                              </h5>
                              <small>March 14, 2020</small>
                              </div>
                           </li>
                     </ul>
                     <ul class="list-unstyled widget-list">
                           <li class="media widget-post align-items-center">
                              <a href="post-details-2.html">
                              <img loading="lazy" class="mr-3" src="{{asset('/images/post/post-2.jpg')}}">
                              </a>
                              <div class="media-body">
                              <h5 class="h6 mb-0"><a href="post-details-2.html">Cheerful Loving Couple Bakers Drinking Coffee</a>
                              </h5>
                              <small>March 14, 2020</small>
                              </div>
                           </li>
                     </ul>
                  </div>
            </aside>

            <div class="col-lg-12">
               <div class="title text-center">
                  <h2 class="mb-5">Galeri Terbaru</h2>
               </div>
            </div>
            <div class="col-lg-4 col-sm-12 mb-4">
               <article class="mb-5">
                     <div class="card shadow-sm">
                           <img loading="lazy" src="images/post/post-1.jpg" class="img-fluid" alt="post-thumb">
                           <div class="card-body">
                              <p class="card-text" _msthash="1938209" _msttexthash="11854115" style="direction: ltr; text-align: left;">Caption Here</p>
                              <div class="d-flex justify-content-between align-items-center">
                                 <div class="btn-group">
                                 <button type="button" class="btn btn-sm btn-outline-secondary" _msthash="3236571" _msttexthash="60710" style="direction: ltr;">lebar</button>
                                 <button type="button" class="btn btn-sm btn-outline-secondary" _msthash="3236753" _msttexthash="114582" style="direction: ltr;">Modulasi</button>
                                 </div>
                                 
                              </div>
                           </div>
                     </div>
               </article>
            </div>
               <div class="col-lg-4 col-sm-12 mb-4">
               <article class="mb-5">
                     <div class="card shadow-sm">
                           <img loading="lazy" src="images/post/post-2.jpg" class="img-fluid" alt="post-thumb">
                           <div class="card-body">
                              <p class="card-text" _msthash="1938209" _msttexthash="11854115" style="direction: ltr; text-align: left;">Caption Here</p>
                              <div class="d-flex justify-content-between align-items-center">
                                 <div class="btn-group">
                                 <button type="button" class="btn btn-sm btn-outline-secondary" _msthash="3236571" _msttexthash="60710" style="direction: ltr;">lebar</button>
                                 <button type="button" class="btn btn-sm btn-outline-secondary" _msthash="3236753" _msttexthash="114582" style="direction: ltr;">Modulasi</button>
                                 </div>
                                 
                              </div>
                           </div>
                     </div>
               </article>
            </div>
               <div class="col-lg-4 col-sm-12 mb-4">
               <article class="mb-5">
                     <div class="card shadow-sm">
                           <img loading="lazy" src="images/post/post-6.jpg" class="img-fluid" alt="post-thumb">
                           <div class="card-body">
                              <p class="card-text" _msthash="1938209" _msttexthash="11854115" style="direction: ltr; text-align: left;">Caption Here</p>
                              <div class="d-flex justify-content-between align-items-center">
                                 <div class="btn-group">
                                 <button type="button" class="btn btn-sm btn-outline-secondary" _msthash="3236571" _msttexthash="60710" style="direction: ltr;">lebar</button>
                                 <button type="button" class="btn btn-sm btn-outline-secondary" _msthash="3236753" _msttexthash="114582" style="direction: ltr;">Modulasi</button>
                                 </div>
                                 
                              </div>
                           </div>
                     </div>
               </article>
            </div>
         </div>
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
</body>
</html>