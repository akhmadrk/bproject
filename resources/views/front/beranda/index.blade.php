@extends("front/master")

@section("title-page")
Beranda
@endsection

@section("content")

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
            <h3><a class="post-title" href="/berita/detail">Judul Berita</a></h3>
            <p>Heading example Here is example of hedings. You can use this heading by following markdownify rules. For example: use # for heading 1 and use ###### for heading 6. Heading 1 Heading 2 Heading 3 Heading 4 Heading 5 Heading 6 Emphasis Emphasis, aka italics, with asterisks or underscores.</p> <a href="/berita/detail" class="btn btn-outline-primary">Continue Reading</a>
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
                     <a href="/berita/detail">
                        <img loading="lazy" class="mr-3" src="{{asset('/images/post/post-6.jpg')}}">
                     </a>
                     <div class="media-body">
                     <h5 class="h6 mb-0"><a href="/berita/detail">Elements That You Can Use To Create A New Post On
                              This Template.</a></h5>
                     <small>March 15, 2020</small>
                     </div>
                  </li>
            </ul>
            <ul class="list-unstyled widget-list">
                  <li class="media widget-post align-items-center">
                     <a href="/berita/detail">
                     <img loading="lazy" class="mr-3" src="{{asset('/images/post/post-1.jpg')}}">
                     </a>
                     <div class="media-body">
                     <h5 class="h6 mb-0"><a href="/berita/detail">Cheerful Loving Couple Bakers Drinking Coffee</a>
                     </h5>
                     <small>March 14, 2020</small>
                     </div>
                  </li>
            </ul>
            <ul class="list-unstyled widget-list">
                  <li class="media widget-post align-items-center">
                     <a href="/berita/detail">
                     <img loading="lazy" class="mr-3" src="{{asset('/images/post/post-2.jpg')}}">
                     </a>
                     <div class="media-body">
                     <h5 class="h6 mb-0"><a href="/berita/detail">Cheerful Loving Couple Bakers Drinking Coffee</a>
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

@endsection