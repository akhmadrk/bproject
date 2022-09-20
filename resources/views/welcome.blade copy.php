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
<header class="sticky-top bg-white border-bottom border-default">
   <div class="container">

      <nav class="navbar navbar-expand-lg navbar-white">
         <a class="navbar-brand" href="index.html">
            <img class="img-fluid" width="150px" src="{{asset('/images/logo.png')}}" alt="LogBook">
         </a>
         <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation">
            <i class="ti-menu"></i>
         </button>

         <div class="collapse navbar-collapse text-center" id="navigation">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item dropdown">
                  <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                     aria-expanded="false">
                     homepage <i class="ti-angle-down ml-1"></i>
                  </a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="index-full.html">Homepage Full Width</a>
                     <a class="dropdown-item" href="index-full-left.html">Homepage Full With Left Sidebar</a>
                     <a class="dropdown-item" href="index-full-right.html">Homepage Full With Right Sidebar</a>
                     <a class="dropdown-item" href="index-list.html">Homepage List Style</a>
                     <a class="dropdown-item" href="index-list-left.html">Homepage List With Left Sidebar</a>
                     <a class="dropdown-item" href="index-list-right.html">Homepage List With Right Sidebar</a>
                  </div>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="about.html">About</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact</a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                     aria-expanded="false">Pages <i class="ti-angle-down ml-1"></i>
                  </a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="author.html">Author</a>
                     <a class="dropdown-item" href="post-details-1.html">Post Details 1</a>
                     <a class="dropdown-item" href="post-details-2.html">Post Details 2</a>
                     <a class="dropdown-item" href="post-elements.html">Post Elements</a>
                     <a class="dropdown-item" href="privacy-policy.html">Privacy Policy</a>
                     <a class="dropdown-item" href="terms-conditions.html">Terms Conditions</a>
                  </div>
               </li>
            </ul>
            
            <select class="m-2 border-0" id="select-language">
               <option id="en" value="about/" selected>En</option>
               <option id="fr" value="fr/about/">Fr</option>
            </select>

            <!-- search -->
            <div class="search px-4">
               <button id="searchOpen" class="search-btn"><i class="ti-search"></i></button>
               <div class="search-wrapper">
                  <form action="javascript:void(0)" class="h-100">
                     <input class="search-box pl-4" id="search-query" name="s" type="search" placeholder="Type &amp; Hit Enter...">
                  </form>
                  <button id="searchClose" class="search-close"><i class="ti-close text-dark"></i></button>
               </div>
            </div>

         </div>
      </nav>
   </div>
</header>
<!-- /navigation -->

<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8  mb-5 mb-lg-0">
				<article class="row mb-5">
					<div class="col-12">
						<div class="post-slider">
							<img loading="lazy" src="{{asset('/images/post/post-6.jpg')}}" class="img-fluid" alt="post-thumb">
							<img loading="lazy" src="{{asset('/images/post/post-1.jpg')}}" class="img-fluid" alt="post-thumb">
							<img loading="lazy" src="{{asset('/images/post/post-3.jpg')}}" class="img-fluid" alt="post-thumb">
						</div>
					</div>
					<div class="col-12 mx-auto">
						<h3><a class="post-title" href="post-elements.html">Elements That You Can Use To Create A New Post On This Template.</a></h3>
						<ul class="list-inline post-meta mb-4">
							<li class="list-inline-item"><i class="ti-user mr-2"></i>
								<a href="author.html">John Doe</a>
							</li>
							<li class="list-inline-item">Date : March 15, 2020</li>
							<li class="list-inline-item">Categories : <a href="#!" class="ml-1">Photography </a>
							</li>
							<li class="list-inline-item">Tags : <a href="#!" class="ml-1">Photo </a> ,<a href="#!" class="ml-1">Image </a>
							</li>
						</ul>
						<p>Heading example Here is example of hedings. You can use this heading by following markdownify rules. For example: use # for heading 1 and use ###### for heading 6. Heading 1 Heading 2 Heading 3 Heading 4 Heading 5 Heading 6 Emphasis Emphasis, aka italics, with asterisks or underscores.</p> <a href="post-elements.html" class="btn btn-outline-primary">Continue Reading</a>
					</div>
				</article>
				<article class="row mb-5">
					<div class="col-12">
						<div class="post-slider">
							<img loading="lazy" src="{{asset('/images/post/post-1.jpg')}}" class="img-fluid" alt="post-thumb">
						</div>
					</div>
					<div class="col-12 mx-auto">
						<h3><a class="post-title" href="post-details-1.html">Cheerful Loving Couple Bakers Drinking Coffee</a></h3>
						<ul class="list-inline post-meta mb-4">
							<li class="list-inline-item"><i class="ti-user mr-2"></i><a href="author.html">John Doe</a>
							</li>
							<li class="list-inline-item">Date : March 14, 2020</li>
							<li class="list-inline-item">Categories : <a href="#!" class="ml-1">Photography </a>
							</li>
							<li class="list-inline-item">Tags : <a href="#!" class="ml-1">Photo </a> ,<a href="#!" class="ml-1">Image </a>
							</li>
						</ul>
						<p>It’s no secret that the digital industry is booming. From exciting startups to global brands, companies are reaching out to digital agencies, responding to the new possibilities available. However, the industry is fast becoming overcrowded, heaving with agencies offering similar services — on the surface, at least. Producing creative, fresh projects is the key to standing out.</p> <a href="post-details-1.html" class="btn btn-outline-primary">Continue Reading</a>
					</div>
				</article>
				<article class="row mb-5">
					<div class="col-12">
						<div class="post-slider">
							<img loading="lazy" src="{{asset('/images/post/post-2.jpg')}}" class="img-fluid" alt="post-thumb">
							<img loading="lazy" src="{{asset('/images/post/post-4.jpg')}}" class="img-fluid" alt="post-thumb">
						</div>
					</div>
					<div class="col-12 mx-auto">
						<h3><a class="post-title" href="post-details-2.html">Cheerful Loving Couple Bakers Drinking Coffee</a></h3>
						<ul class="list-inline post-meta mb-4">
							<li class="list-inline-item"><i class="ti-user mr-2"></i><a href="author.html">John Doe</a>
							</li>
							<li class="list-inline-item">Date : March 14, 2020</li>
							<li class="list-inline-item">Categories : <a href="#!" class="ml-1">Photobooth </a>
							</li>
							<li class="list-inline-item">Tags : <a href="#!" class="ml-1">Booth </a> ,<a href="#!" class="ml-1">Image </a>
							</li>
						</ul>
						<p>It’s no secret that the digital industry is booming. From exciting startups to global brands, companies are reaching out to digital agencies, responding to the new possibilities available. However, the industry is fast becoming overcrowded, heaving with agencies offering similar services — on the surface, at least. Producing creative, fresh projects is the key to standing out.</p> <a href="post-details-2.html" class="btn btn-outline-primary">Continue Reading</a>
					</div>
				</article>
				<article class="row mb-5">
					<div class="col-12">
						<div class="post-slider">
							<img loading="lazy" src="{{asset('/images/post/post-3.jpg')}}" class="img-fluid" alt="post-thumb">
						</div>
					</div>
					<div class="col-12 mx-auto">
						<h3><a class="post-title" href="post-details-2.html">Cheerful Loving Couple Bakers Drinking Coffee</a></h3>
						<ul class="list-inline post-meta mb-4">
							<li class="list-inline-item"><i class="ti-user mr-2"></i><a href="author.html">John Doe</a>
							</li>
							<li class="list-inline-item">Date : March 14, 2020</li>
							<li class="list-inline-item">Categories : <a href="#!" class="ml-1">Videography </a>
							</li>
							<li class="list-inline-item">Tags : <a href="#!" class="ml-1">Video </a> ,<a href="#!" class="ml-1">Image </a>
							</li>
						</ul>
						<p>It’s no secret that the digital industry is booming. From exciting startups to global brands, companies are reaching out to digital agencies, responding to the new possibilities available. However, the industry is fast becoming overcrowded, heaving with agencies offering similar services — on the surface, at least. Producing creative, fresh projects is the key to standing out.</p> <a href="post-details-2.html" class="btn btn-outline-primary">Continue Reading</a>
					</div>
				</article>
				<article class="row mb-5">
					<div class="col-12">
						<div class="post-slider">
							<img loading="lazy" src="{{asset('/images/post/post-4.jpg')}}" class="img-fluid" alt="post-thumb">
							<img loading="lazy" src="{{asset('/images/post/post-1.jpg')}}" class="img-fluid" alt="post-thumb">
						</div>
					</div>
					<div class="col-12 mx-auto">
						<h3><a class="post-title" href="post-details-1.html">Cheerful Loving Couple Bakers Drinking Coffee</a></h3>
						<ul class="list-inline post-meta mb-4">
							<li class="list-inline-item"><i class="ti-user mr-2"></i><a href="author.html">John Doe</a>
							</li>
							<li class="list-inline-item">Date : March 14, 2020</li>
							<li class="list-inline-item">Categories : <a href="#!" class="ml-1">Four seasone </a>
							</li>
							<li class="list-inline-item">Tags : <a href="#!" class="ml-1">Seasone </a>
								,<a href="#!" class="ml-1">New </a>
							</li>
						</ul>
						<p>It’s no secret that the digital industry is booming. From exciting startups to global brands, companies are reaching out to digital agencies, responding to the new possibilities available. However, the industry is fast becoming overcrowded, heaving with agencies offering similar services — on the surface, at least. Producing creative, fresh projects is the key to standing out.</p> <a href="post-details-1.html" class="btn btn-outline-primary">Continue Reading</a>
					</div>
				</article>
				<article class="row mb-5">
					<div class="col-12">
						<div class="post-slider">
							<img loading="lazy" src="{{asset('/images/post/post-5.jpg')}}" class="img-fluid" alt="post-thumb">
						</div>
					</div>
					<div class="col-12 mx-auto">
						<h3><a class="post-title" href="post-details-1.html">Cheerful Loving Couple Bakers Drinking Coffee</a></h3>
						<ul class="list-inline post-meta mb-4">
							<li class="list-inline-item"><i class="ti-user mr-2"></i><a href="author.html">John Doe</a>
							</li>
							<li class="list-inline-item">Date : March 14, 2020</li>
							<li class="list-inline-item">Categories : <a href="#!" class="ml-1">Newyork city </a>
							</li>
							<li class="list-inline-item">Tags : <a href="#!" class="ml-1">City </a> ,<a href="#!" class="ml-1">Photo </a>
							</li>
						</ul>
						<p>It’s no secret that the digital industry is booming. From exciting startups to global brands, companies are reaching out to digital agencies, responding to the new possibilities available. However, the industry is fast becoming overcrowded, heaving with agencies offering similar services — on the surface, at least. Producing creative, fresh projects is the key to standing out.</p> <a href="post-details-1.html" class="btn btn-outline-primary">Continue Reading</a>
					</div>
				</article>
				<article class="row mb-5">
					<div class="col-12 mx-auto">
						<h3><a class="post-title" href="post-details-2.html">Cheerful Loving Couple Bakers Drinking Coffee</a></h3>
						<ul class="list-inline post-meta mb-4">
							<li class="list-inline-item"><i class="ti-user mr-2"></i><a href="author.html">John Doe</a>
							</li>
							<li class="list-inline-item">Date : March 14, 2020</li>
							<li class="list-inline-item">Categories : <a href="#!" class="ml-1">Newyork city </a>
							</li>
							<li class="list-inline-item">Tags : <a href="#!" class="ml-1">City </a> ,<a href="#!" class="ml-1">Photo </a>
							</li>
						</ul>
						<p>It’s no secret that the digital industry is booming. From exciting startups to global brands, companies are reaching out to digital agencies, responding to the new possibilities available. However, the industry is fast becoming overcrowded, heaving with agencies offering similar services — on the surface, at least. Producing creative, fresh projects is the key to standing out.</p> <a href="post-details-2.html" class="btn btn-outline-primary">Continue Reading</a>
					</div>
				</article>
			</div>
			<aside class="col-lg-4">
				   <!-- Search -->
   <div class="widget">
      <h5 class="widget-title"><span>Search</span></h5>
      <form action="/logbook-hugo/search" class="widget-search">
         <input id="search-query" name="s" type="search" placeholder="Type &amp; Hit Enter...">
         <button type="submit"><i class="ti-search"></i>
         </button>
      </form>
   </div>
   <!-- categories -->
   <div class="widget">
      <h5 class="widget-title"><span>Categories</span></h5>
      <ul class="list-unstyled widget-list">
         <li><a href="#!" class="d-flex">Four seasone
               <small class="ml-auto">(1)</small></a>
         </li>
         <li><a href="#!" class="d-flex">Newyork city
               <small class="ml-auto">(2)</small></a>
         </li>
         <li><a href="#!" class="d-flex">Photobooth
               <small class="ml-auto">(1)</small></a>
         </li>
         <li><a href="#!" class="d-flex">Photography
               <small class="ml-auto">(2)</small></a>
         </li>
         <li><a href="#!" class="d-flex">Videography
               <small class="ml-auto">(1)</small></a>
         </li>
      </ul>
   </div>
   <!-- tags -->
   <div class="widget">
      <h5 class="widget-title"><span>Tags</span></h5>
      <ul class="list-inline widget-list-inline">
         <li class="list-inline-item"><a href="#!">Booth</a>
         </li>
         <li class="list-inline-item"><a href="#!">City</a>
         </li>
         <li class="list-inline-item"><a href="#!">Image</a>
         </li>
         <li class="list-inline-item"><a href="#!">New</a>
         </li>
         <li class="list-inline-item"><a href="#!">Photo</a>
         </li>
         <li class="list-inline-item"><a href="#!">Seasone</a>
         </li>
         <li class="list-inline-item"><a href="#!">Video</a>
         </li>
      </ul>
   </div>
   <!-- latest post -->
   <div class="widget">
      <h5 class="widget-title"><span>Latest Article</span></h5>
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
		</div>
	</div>
</section>

   <footer class="section-sm pb-0 border-top border-default">
      <div class="container">
         <div class="row justify-content-between">
            <div class="col-md-3 mb-4">
               <a class="mb-4 d-block" href="index.html">
                  <img class="img-fluid" width="150px" src="{{asset('/images/logo.jpg')}}" alt="LogBook">
               </a>
               <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
            </div>

            <div class="col-lg-2 col-md-3 col-6 mb-4">
               <h6 class="mb-4">Quick Links</h6>
               <ul class="list-unstyled footer-list">
                  <li><a href="about.html">About</a></li>
                  <li><a href="contact.html">Contact</a></li>
                  <li><a href="privacy-policy.html">Privacy Policy</a></li>
                  <li><a href="terms-conditions.html">Terms Conditions</a></li>
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