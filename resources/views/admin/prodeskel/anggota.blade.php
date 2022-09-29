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
      <h6 class="font-weight-bolder mb-0">Anggota Keluarga</h6>
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
    <div class="col-lg-12">
      <div class="row">
        <div class="col-xl-12 mb-xl-0 mb-4">
          <div class="card bg-transparent shadow-xl">
            <div class="overflow-hidden position-relative border-radius-xl" style="background-image: url('{{asset('/admin/assets/img/curved-images/curved0.jpg')}}')">
              <span class="mask bg-gradient-primary"></span>
              <div class="card-body position-relative z-index-1 p-3">
                <h3 class="text-white">Form Anggota Keluarga</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 mb-lg-0 mb-4">
          <div class="card mt-4">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">Form Data Keluarga</h6>
                </div>
              </div>
            </div>
            <div class="card-body p-3">
              <div class="row">
                <form role="form">
                  <input type="Hidden" class="form-control" placeholder="No. Urut" name="urut" id="urut">
                  <label>Nomor Induk Kependudukan</label>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="No. Induk Kependudukan" name="nik" id="nik">
                  </div>
                  <label>Nama Lengkap</label>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" id="nama">
                  </div>
                  <label>Nomor Akta Kelahiran</label>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="No. Akta Kelahiran" name="nak" id="nak">
                  </div>
                  <label>Jenis Kelamin</label>
                  <div class="mb-3">
                    <input type="radio" name="jns" id="pria" value="pria"><label for="pria">Pria</label> &nbsp;&nbsp;&nbsp; 
                    <input type="radio" name="jns" id="wanita" value="wanita"> <label for="wanita">Wanita</label>
                  </div>
                  <label>Hubungan dengan Kepala Keluarga</label>
                  <div class="mb-3">
                    <select name="hub" id="hub" class="form-control">
                      <option value="Istri"> Istri</option>
                      <option value="Suami"> Suami</option>
                      <option value="Anak"> Anak</option>
                      <option value="Cucu"> Cucu</option>
                      <option value="Mertua"> Mertua</option>
                      <option value="Menantu"> Menantu</option>
                      <option value="Keponakan"> Keponakan </option>
                    </select>
                  </div>
                  <label>Tempat Lahir</label>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Tempat Lahir" name="tl" id="tl">
                  </div>
                  <label>Tanggal Lahir</label>
                  <div class="mb-3">
                    <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tgl" id="tgl">
                  </div>
                  <label>Tanggal Pencatatan</label>
                  <div class="mb-3">
                    <input type="date" class="form-control" placeholder="Tanggal Pencatatan" name="tgl_pencatatan" id="tgl_pencatatan">
                  </div>
                  <label>Status Perkawinan</label>
                  <div class="mb-3">
                    <select name="status_perkawinan" id="status_perkawinan" class="form-control">
                      <option value="Kawin"> Kawin </option>
                      <option value="Belum Kawin"> Belum Kawin</option>
                      <option value="Duda"> Duda</option>
                      <option value="Janda"> Janda</option>
                    </select>
                  </div>
                  <label>Agama</label>
                  <div class="mb-3">
                    <select name="agama" id="agama" class="form-control">
                      <option value="Islam"> Islam</option>
                      <option value="Protestan"> Protestan</option>
                      <option value="Katolik">  Katolik</option>
                      <option value="Hindu"> Hindu </option>
                      <option value="Budha"> Budha</option>
                      <option value="Kong Hu Chu"> Kong Hu Chu</option>
                    </select>
                  </div>
                  <label>Golongan Darah</label>
                  <div class="mb-3">
                    <select name="darah" id="darah" class="form-control">
                      <option value="A">A</option>
                      <option value="B"> B</option>
                      <option value="AB"> AB</option>
                      <option value="O"> O</option>
                    </select>
                  </div>
                  <label>Kewarganegaraan/Etnis/Suku</label>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Kewarganegaraan/Etnis/Suku" name="suku" id="suku">
                  </div>
                  <label>Pendidikan Terakhir</label>
                  <div class="mb-3">
                    <select name="pendidikan" id="pendidikan" class="form-control">
                      <option value="SD">SD</option>
                      <option value="SMP"> SMP</option>
                      <option value="SMA"> SMA</option>
                      <option value="Diploma"> Diploma</option>
                      <option value="S1"> S1</option>
                      <option value="S2"> S2</option>
                      <option value="S3"> S3</option>
                    </select>
                  </div>
                  <label>Mata Pencaharian Pokok/Pekerjaan</label>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Mata Pencaharian Pokok/Pekerjaan" name="pekerjaan" id="pekerjaan">
                  </div>
                  <label>Nama Bapak/Ibu Kandung</label>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Nama Bapak/Ibu Kandung" name="ortu" id="ortu">
                  </div>
                  <label>Akseptor KB</label>
                  <div class="mb-3">
                    <select name="akseptor" id="akseptor" class="form-control">
                      <option value="Pil"> Pil</option>
                      <option value="Spiral"> Spiral</option>
                      <option value="Suntik"> Suntik</option>
                      <option value="Susuk"> Susuk</option>
                      <option value="Kondom"> Kondom</option>
                      <option value="Vasektomi"> Vasektomi</option>
                      <option value="Tubektomi"> Tubektomi /</option>
                    </select>
                  </div>
                  <label>Cacat Menurut Jenis</label>
                  <div class="mb-3">
                    <select name="cacat" id="cacat" class="form-control" multiple>
                      <option value=""><b>-- CACAT FISIK --</b> </option>
                      <option value="Tuna rungu"> Tuna rungu</option>
                      <option value="Tuna wicara"> Tuna wicara</option>
                      <option value="Tuna Netra"> Tuna Netra</option>
                      <option value="Lumpuh"> Lumpuh</option>
                      <option value="Sumbing"> Sumbing</option>
                      <option value=""><b>-- CACAT MENTAL --</b> </option>
                      <option value="Idiot"> Idiot</option>
                      <option value="Gila"> Gila</option>
                      <option value="Stress"> Stress</option>
                    </select>
                  </div>
                  <label>Kedudukan Anggota Keluarga sebagai Wajib Pajak dan Retribusi</label>
                  <div class="mb-3">
                    <select name="wajib" id="wajib" class="form-control">
                      <option value=""> pilih kedudukan wajib pajak </option>
                    </select>
                  </div>
                  <label>Lembaga Pemerintahan Yang Diikuti Anggota Keluarga </label>
                  <div class="mb-3">
                    <select name="lem_pemerintahan" id="lem_pemerintahan" class="form-control">
                      <option value=""> pilih lembaga pemerintahan yang diikuti </option>
                    </select>
                  </div>
                  <label>Lembaga Kemasyarakatan Yang Diikuti Anggota Keluarga </label>
                  <div class="mb-3">
                    <select name="lem_masyarakat" id="lem_masyarakat" class="form-control">
                      <option value=""> pilih lembaga masyarakat yang diikuti </option>
                    </select>
                  </div>
                  <label>Lembaga Ekonomi Yang Dimiliki Anggota Keluarga </label>
                  <div class="mb-3">
                    <select name="lem_ekenomi" id="lem_ekonomi" class="form-control">
                      <option value=""> pilih lembaga ekonomi yang diikuti </option>
                    </select>
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