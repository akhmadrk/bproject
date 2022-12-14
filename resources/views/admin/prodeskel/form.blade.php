@extends("admin/master")

@section("title-page")
Prodeskel
@endsection

@section("content")

<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Prodeskel</li>
      </ol>
      <h6 class="font-weight-bolder mb-0">Prodeskel</h6>
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
                    <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
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
                    <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
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
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-lg-6">
      <div class="row">
        <div class="col-xl-12 mb-xl-0 mb-4">
          <div class="card bg-transparent shadow-xl">
            <div class="overflow-hidden position-relative border-radius-xl" style="background-image: url('{{asset('/admin/assets/img/curved-images/curved0.jpg')}}')">
              <span class="mask bg-gradient-primary"></span>
              <div class="card-body position-relative z-index-1 p-3">
                <h3 class="text-white">Form Prodeskel</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 mb-lg-0 mb-4">
          <div class="card mt-4">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">Form Data Prodeskel</h6>
                </div>
              </div>
            </div>
            <div class="card-body p-3">
              <div class="row">
                <form role="form">
                  <label>Nomor Kartu Keluarga</label>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="No. kartu Keluarga" aria-label="nokk" aria-describedby="nokk">
                  </div>
                  <label>Nama Kepala Keluarga</label>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Nama" aria-label="Nama" aria-describedby="Nama">
                  </div>
                  <label>Alamat</label>
                  <div class="mb-3">
                    <textarea name="alamat" id="alamat" class="form-control"></textarea>
                  </div>
                  <label>RT/RW</label>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="RT/RW" aria-label="rtrw" aria-describedby="rtrw">
                  </div>
                  <label>Dusun/Lingkungan</label>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Dusun/Lingkungan" aria-label="dusun" aria-describedby="dusun">
                  </div>
                  <label>Desa/Kelurahan</label>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Desa/Kelurahan" aria-label="desa" aria-describedby="desa">
                  </div>
                  <label>Kecamatan</label>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Kecamatan" aria-label="kecamatan" aria-describedby="kecamatan">
                  </div>
                  <label>Kabupaten/Kota</label>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="kabupaten" aria-label="kabupaten" aria-describedby="kabupaten">
                  </div>
                  <label>Provinsi</label>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Provinsi" aria-label="provinsi" aria-describedby="provinsi">
                  </div>
                  <label>Bulan</label>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Bulan" aria-label="bulan" aria-describedby="bulan">
                  </div>
                  <label>Tahun</label>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Tahun" aria-label="tahun" aria-describedby="tahun">
                  </div>
                  <label>Nama Pengisi</label>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Pengisi" aria-label="pengisi" aria-describedby="kabupaten">
                  </div>
                  <label>Pekerjaan</label>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Pekerjaan Pengisi" aria-label="pekerjaan" aria-describedby="pekerjaan">
                  </div>
                  <label>Jabatan</label>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Jabatan Pengisi" aria-label="jabatan" aria-describedby="jabatan">
                  </div>
                  <div class="text-center">
                    <button type="button" class="btn bg-gradient-info w-100 mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#modalSave">Simpan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card h-100">
        <!-- <div class="card-header pb-0 p-3">
          <div class="row">
            <div class="col-6 d-flex align-items-center">
              <h6 class="mb-0">Invoices</h6>
            </div>
            <div class="col-6 text-end">
              <button class="btn btn-outline-primary btn-sm mb-0">View All</button>
            </div>
          </div>
        </div> -->
        <div class="card-body p-3 pb-0">
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-keluarga" type="button" role="tab" aria-controls="nav-keluarga" aria-selected="true">Keluarga</button>
              <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-anggota" type="button" role="tab" aria-controls="nav-anggota" aria-selected="false">Anggota Keluarga</button>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-keluarga" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="row mt-3">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0"></h6>
                </div>
                <div class="col-6 text-end">
                  <a class="btn btn-outline-primary mb-0" href="/admin/prodeskel/keluarga"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New</a>
                </div>
              </div>
              <div class="border-0 d-flex p-4 mt-4 bg-gray-100 border-radius-lg">
                <div class="d-flex flex-column">
                  <h6 class="mb-3 text-sm">Keluarga</h6>
                  <span class="mb-2 text-xs">No. Kartu Keluarga: <span class="text-dark font-weight-bold ms-sm-2">Viking Burrito</span></span>
                  <span class="mb-2 text-xs">Nama Kepala Keluarga: <span class="text-dark ms-sm-2 font-weight-bold">oliver@burrito.com</span></span>
                </div>
                <div class="ms-auto text-end">
                  <button class="btn btn-link text-danger px-3 mb-0" data-bs-target="#kelDel" data-bs-toggle="modal"><i class="far fa-trash-alt me-2"></i>Delete</buttons>
                  <button class="btn btn-link text-dark px-3 mb-0" data-bs-target="#kelEdit" data-bs-toggle="modal"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</button>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-anggota" role="tabpanel" aria-labelledby="nav-profile-tab">
              <div class="row mt-3">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0"></h6>
                </div>
                <div class="col-6 text-end">
                  <a class="btn btn-outline-primary mb-0" href="/admin/prodeskel/anggota"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New</a>
                </div>
              </div>
              <div class="border-0 d-flex p-4 mt-4 bg-gray-100 border-radius-lg">
                <div class="d-flex flex-column">
                  <h6 class="mb-3 text-sm">1 Junaidi</h6>
                  <span class="mb-2 text-xs">NIK: <span class="text-dark font-weight-bold ms-sm-2">198097032</span></span>
                  <span class="mb-2 text-xs">Nama Lengkap: <span class="text-dark ms-sm-2 font-weight-bold">Junaidi</span></span>
                  <span class="text-xs">Nomor Akte: <span class="text-dark ms-sm-2 font-weight-bold">FRB1235476</span></span>
                </div>
                <div class="ms-auto text-end">
                  <a class="btn btn-link text-danger text-gradient px-3 mb-0" data-bs-target="#angDel" data-bs-toggle="modal" href="#angDel"><i class="far fa-trash-alt me-2"></i>Delete</a>
                  <a class="btn btn-link text-dark px-3 mb-0" data-bs-target="#angEdit" data-bs-toggle="modal" href="#angEdit"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
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
            ?? <script>
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
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="card z-index-0">
          <div class="card-body">
            Apakah Anda yakin menyimpan data ini?
          </div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Apply</button>
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