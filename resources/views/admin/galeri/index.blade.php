@extends("admin/master")

@section("title-page")
Galeri
@endsection

@section("content")

<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Galeri</li>
      </ol>
      <h6 class="font-weight-bolder mb-0">Galeri</h6>
    </nav>
      <ul class="navbar-nav  justify-content-end">
        <li class="nav-item d-flex align-items-center">
          <a href="/admin/login" class="nav-link text-body font-weight-bold px-0">
            <i class="fa fa-user me-sm-1"></i>
            <span class="d-sm-inline d-none">Sign In</span>
          </a>
        </li>
        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
          <a href="javascript:;s" class="nav-link text-body p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </a>
        </li>
        <li class="nav-item px-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0">
            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
          </a>
        </li>
        <li class="nav-item dropdown pe-2 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-bell cursor-pointer"></i>
          </a>
          <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
            <li class="mb-2">
              <a class="dropdown-item border-radius-md" href="javascript:;">
                <div class="d-flex py-1">
                  <div class="my-auto">
                    <img src="{{asset('/admin/assets/img/team-2.jpg')}}" class="avatar avatar-sm  me-3 ">
                  </div>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="text-sm font-weight-normal mb-1">
                      <span class="font-weight-bold">New message</span> from Laur
                    </h6>
                    <p class="text-xs text-secondary mb-0 ">
                      <i class="fa fa-clock me-1"></i>
                      13 minutes ago
                    </p>
                  </div>
                </div>
              </a>
            </li>
            <li class="mb-2">
              <a class="dropdown-item border-radius-md" href="javascript:;">
                <div class="d-flex py-1">
                  <div class="my-auto">
                    <img src="{{asset('/admin/assets/img/small-logos/logo-spotify.svg')}}" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                  </div>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="text-sm font-weight-normal mb-1">
                      <span class="font-weight-bold">New album</span> by Travis Scott
                    </h6>
                    <p class="text-xs text-secondary mb-0 ">
                      <i class="fa fa-clock me-1"></i>
                      1 day
                    </p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a class="dropdown-item border-radius-md" href="javascript:;">
                <div class="d-flex py-1">
                  <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                    <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <title>credit-card</title>
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                          <g transform="translate(1716.000000, 291.000000)">
                            <g transform="translate(453.000000, 454.000000)">
                              <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                              <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="text-sm font-weight-normal mb-1">
                      Payment successfully completed
                    </h6>
                    <p class="text-xs text-secondary mb-0 ">
                      <i class="fa fa-clock me-1"></i>
                      2 days
                    </p>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->
<div class="container-fluid">
  <div class="page-header min-height-100 border-radius-xl mt-4" style="background-image: url('{{asset('/admin/assets/img/curved-images/curved0.jpg')}}'); background-position-y: 50%;">
    <span class="mask bg-gradient-primary opacity-6"></span>
  </div>
  <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
    <div class="row gx-4">
      <div class="col-auto">
        <div class="avatar avatar-xl position-relative">
        </div>
      </div>
      <div class="col-auto my-auto">
        <div class="h-100">
          <h5 class="mb-1">
            Galeri
          </h5>
          <p class="mb-0 font-weight-bold text-sm">
            Data Galeri
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid py-4">
  <div class="row">
  <div class="col-12 mt-4">
    <div class="card mb-4">
      <div class="card-header pb-0 p-3">
        <h6 class="mb-1">Galeri</h6>
        <p class="text-sm">Architects design houses</p>
      </div>
      <div class="card-body p-3">
        <div class="row">
          <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
            <div class="card card-blog card-plain">
              <div class="position-relative">
                <a class="d-block shadow-xl border-radius-xl">
                  <img src="{{asset('/admin/assets/img/home-decor-1.jpg')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                </a>
              </div>
              <div class="card-body px-1 pb-0">
                <p class="text-gradient text-dark mb-2 text-sm">Project #2</p>
                <a href="javascript:;">
                  <h5>
                    Modern
                  </h5>
                </a>
                <p class="mb-4 text-sm">
                  As Uber works through a huge amount of internal management turmoil.
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
            <div class="card card-blog card-plain">
              <div class="position-relative">
                <a class="d-block shadow-xl border-radius-xl">
                  <img src="{{asset('/admin/assets/img/home-decor-2.jpg')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                </a>
              </div>
              <div class="card-body px-1 pb-0">
                <p class="text-gradient text-dark mb-2 text-sm">Project #1</p>
                <a href="javascript:;">
                  <h5>
                    Scandinavian
                  </h5>
                </a>
                <p class="mb-4 text-sm">
                  Music is something that every person has his or her own specific opinion about.
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
            <div class="card card-blog card-plain">
              <div class="position-relative">
                <a class="d-block shadow-xl border-radius-xl">
                  <img src="{{asset('/admin/assets/img/home-decor-3.jpg')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                </a>
              </div>
              <div class="card-body px-1 pb-0">
                <p class="text-gradient text-dark mb-2 text-sm">Project #3</p>
                <a href="javascript:;">
                  <h5>
                    Minimalist
                  </h5>
                </a>
                <p class="mb-4 text-sm">
                  Different people have different taste, and various types of music.
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
            <div class="card h-100 card-plain border">
              <div class="card-body d-flex flex-column justify-content-center text-center">
                <a data-bs-toggle="modal" data-bs-target="#modalSave">
                  <i class="fa fa-plus text-secondary mb-3"></i>
                  <h5 class=" text-secondary"> New project </h5>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <footer class="footer pt-3  ">
    <div class="container-fluid">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6 mb-lg-0 mb-4">
          <div class="copyright text-center text-sm text-muted text-lg-start">
            © <script>
              document.write(new Date().getFullYear())
            </script>,
            made with <i class="fa fa-heart"></i> by
            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
            for a better web.
          </div>
        </div>
        <div class="col-lg-6">
          <ul class="nav nav-footer justify-content-center justify-content-lg-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</div>

    <!-- The Modal -->
<div class="modal fade" id="modalSave">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header bg-gradient-primary">
        <h4 class="modal-title text-white">Form Galeri</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="card z-index-0">
          <div class="card-body">
            <form role="form">
              <label>Gambar</label>
              <div class="mb-3">
                <input type="file" class="form-control" name="gambar" id="gambar">
              </div>
              <label>Judul Gambar</label>
              <div class="mb-3">
                <input type="text" class="form-control" placeholder="Judul Gambar" aria-label="judul_gambar" aria-describedby="judul_gambar">
              </div>
              <label>Deskripsi Gambar</label>
              <div class="mb-3">
                <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="kelDel">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="card z-index-0">
          <div class="card-body">
            Apakah Anda yakin menghapus data ini?
          </div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Hapus</button>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="kelEdit">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="card z-index-0">
          <div class="card-body">
            Apakah Anda yakin mengubah data ini?
          </div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tolak</button>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="angDel">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="card z-index-0">
          <div class="card-body">
            Apakah Anda yakin menghapus data ini?
          </div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Hapus</button>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="angEdit">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="card z-index-0">
          <div class="card-body">
            Apakah Anda yakin mengubah data ini?
          </div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tolak</button>
      </div>

    </div>
  </div>
</div>

@endsection
@section("script")
<script>
var win = navigator.platform.indexOf('Win') > -1;
if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
    damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
}
</script>
@endsection