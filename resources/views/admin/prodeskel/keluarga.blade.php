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
    <div class="col-lg-12">
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
            <div class="card-body p-3">
              <div class="row">
                <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-keluarga" type="button" role="tab" aria-controls="nav-keluarga" aria-selected="true">Keuangan</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-anggota" type="button" role="tab" aria-controls="nav-anggota" aria-selected="false">Aset</button>
                    <button class="nav-link" id="nav-next-tab" data-bs-toggle="tab" data-bs-target="#nav-next" type="button" role="tab" aria-controls="nav-next" aria-selected="false">Ibu dan Anak</button>
                    <button class="nav-link" id="nav-kesehatan-tab" data-bs-toggle="tab" data-bs-target="#nav-kesehatan" type="button" role="tab" aria-controls="nav-kesehatan" aria-selected="false">Kesehatan dan Kebersihan</button>
                    <button class="nav-link" id="nav-kejahatan-tab" data-bs-toggle="tab" data-bs-target="#nav-kejahatan" type="button" role="tab" aria-controls="nav-kejahatan" aria-selected="false">Kejahatan</button>
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-keluarga" role="tabpanel" aria-labelledby="nav-home-tab">
                  <!-- <form role="form" action="/admin/prodeskel"> -->
                    <label>Jumlah Penghasilan Perbulan</label>
                    <div class="mb-3">
                      <input type="text" name="penghasilan" id="penghasilan" class="form-control" placeholder="Jumlah Penghasilan Perbulan" aria-label="nokk" aria-describedby="nokk">
                    </div>
                    <label>Jumlah Pengeluaran Perbulan</label>
                    <div class="mb-3">
                      <input type="text" name="pengeluaran" id="pengeluaran" class="form-control" placeholder="Jumlah Penghasilan Perbulan" aria-label="nokk" aria-describedby="nokk">
                    </div>
                    <label>Kategori KK</label>
                    <div class="mb-3">
                      <input type="radio" name="cat" id="pra" value="Pra Sejahtera"><label for="pra sejahtera">Pra Sejahtera</label> &nbsp;&nbsp;&nbsp; 
                      <input type="radio" name="cat" id="se1" value="Sejahtera 1"><label for="sejahtera 1">Sejahtera 1</label> &nbsp;&nbsp;&nbsp; 
                      <input type="radio" name="cat" id="se2" value="Sejahtera 2"><label for="sejahtera 2">Sejahtera 2</label> &nbsp;&nbsp;&nbsp; 
                      <input type="radio" name="cat" id="se3" value="Sejahtera 3"> <label for="sejahtera 3">Sejahtera 3+</label>
                    </div>
                    <label>Penerima Beras Miskin</label>
                    <div class="mb-3">
                      <input type="radio" name="beras" id="beras" value="Ya"><label for="ya">Ya</label> &nbsp;&nbsp;&nbsp; 
                      <input type="radio" name="beras" id="beras" value="Tidak"><label for="tidak">Tidak</label>
                    </div>
                    <label>Penerima BLT/BLSM</label>
                    <div class="mb-3">
                      <input type="radio" name="blt" id="blt" value="Ya"><label for="ya">Ya</label> &nbsp;&nbsp;&nbsp; 
                      <input type="radio" name="blt" id="blt" value="Tidak"><label for="tidak">Tidak</label>
                    </div>
                    <label>Peserta BPJS/Jamkesnas</label>
                    <div class="mb-3">
                      <input type="radio" name="bpjs" id="bpjs" value="Ya"><label for="ya">Ya</label> &nbsp;&nbsp;&nbsp; 
                      <input type="radio" name="bpjs" id="bpjs" value="Tidak"><label for="tidak">Tidak</label>
                    </div>
                    <label>Status Kepemilikan Rumah</label>
                    <div class="mb-3">
                      <select name="rumah" id="rumah" class="form-control">
                        <option value="Milik Sendiri"> Milik Sendiri</option>
                        <option value="Milik Orang Tua"> Milik Orang Tua</option>
                        <option value="Milik Keluarga"> Milik Keluarga</option>
                        <option value="Sewa/Kontrak"> Sewa/Kontrak</option>
                        <option value="Pinjam Pakai"> Pinjam Pakai</option>
                      </select>
                    </div>
                    <label>Sumber Air Minum yang digunakan anggota keluarga </label>
                    <div class="mb-3">
                      <table class="table align-items-center mb-0">
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sumber Air Minum</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Baik</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Berasa</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Bewarna</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Berbau</th>
                        </tr>
                        <tr>
                          <td>
                            <select name="air" id="air" class="form-control">
                              <option value="Mata Air"> Mata Air</option>
                              <option value="Sumur Gali"> Sumur Gali</option>
                              <option value="Sumur Pompa"> Sumur Pompa</option>
                              <option value="Hidran Umum"> Hidran Umum</option>
                              <option value="PAM"> PAM</option>
                              <option value="Pipa"> Pipa</option>
                              <option value="Sungai"> Sungai</option>
                              <option value="Embung"> Embung</option>
                              <option value="Bak Penampungan Air Hujan"> Bak Penampungan Air Hujan</option>
                              <option value="Beli dari Tangki Swasta"> Beli dari Tangki Swasta</option>
                              <option value="Depot Isi Ulang"> Depot Isi Ulang</option>
                            </select>
                          </td>
                          <td class="text-center">
                            <input type="radio" name="baik" id="baik" value="1">
                          </td>
                          <td class="text-center">
                            <input type="radio" name="berasa" id="berasa" value="2">
                          </td>
                          <td class="text-center">
                            <input type="radio" name="berwarna" id="berwarna" value="3">
                          </td>
                          <td class="text-center">
                            <input type="radio" name="berbau" id="berbau" value="4">
                          </td>
                        </tr>
                      </table>
                    </div>
                    <label>Kepemilikan Lahan </label>
                    <div class="mb-3">
                      <table class="table align-items-center mb-0">
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Lahan</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Memiliki kurang 0,5 ha</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Memiliki 0,5 - 1,0 ha</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Memiliki lebih dari 1,0 ha</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tidak Memiliki</th>
                        </tr>
                        <tr>
                          <td>
                            <select name="lahan" id="lahan" class="form-control">
                              <option value="Lahan Tanaman Pangan"> Lahan Tanaman Pangan</option>
                              <option value="Lahan Tanaman Perkebunan"> Lahan Tanaman Perkebunan</option>
                              <option value="Lahan Hutan"> Lahan Hutan</option>
                            </select>
                          </td>
                          <td class="text-center">
                            <input type="radio" name="kurang" id="kurang" value="1">
                          </td>
                          <td class="text-center">
                            <input type="radio" name="setengah" id="setengah" value="2">
                          </td>
                          <td class="text-center">
                            <input type="radio" name="lebih" id="lebih" value="3">
                          </td>
                          <td class="text-center">
                            <input type="radio" name="tidak" id="tidak" value="4">
                          </td>
                        </tr>
                      </table>
                    </div>
                    <div class="text-center">
                      <button type="button" class="btn bg-gradient-info w-100 mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#modalSave">Simpan</button>
                    </div>
                  <!-- </form> -->
                </div>
                <div class="tab-pane fade show" id="nav-anggota" role="tabpanel" aria-labelledby="nav-profile-tab">
                  <label> Kepemilikan Jenis Ternak Keluarga Tahun Ini</label>
                    <div class="mb-3">
                      <table class="table align-items-center mb-0">
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Binatang Ternak</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> Jumlah (Ekor)</th>
                        </tr>
                        <tr>
                          <td>
                            <select name="binatang" id="binatang" class="form-control">
                              <option value="Sapi"> Sapi</option>
                              <option value="Kerbau"> Kerbau</option>
                              <option value="Babi"> Babi</option>
                              <option value="Ayam Kampung"> Ayam Kampung</option>
                              <option value="Ayam Broiler"> Ayam Broiler</option>
                              <option value="Bebek"> Bebek</option>
                              <option value="Kuda"> Kuda</option>
                              <option value="Kambing"> Kambing</option>
                              <option value="Domba"> Domba</option>
                              <option value="Angsa"> Angsa</option>
                              <option value="Burung Puyuh"> Burung Puyuh</option>
                              <option value="Kelinci"> Kelinci</option>
                              <option value="Burung Walet"> Burung Walet</option>
                              <option value="Anjing"> Anjing</option>
                              <option value="Kucing"> Kucing</option>
                              <option value="Ular Cobra"> Ular Cobra</option>
                              <option value="Burung Onta"> Burung Onta</option>
                              <option value="Ular Pithon"> Ular Pithon</option>
                              <option value="Burung Cendrawasih"> Burung Cendrawasih</option>
                              <option value="Burung Kakatua"> Burung Kakatua</option>
                              <option value="Burung Beo"> Burung Beo</option>
                              <option value="Burung Merak"> Burung Merak</option>
                              <option value="Burung Langka"> Burung Langka</option>
                              <option value="Buaya"> Buaya</option>
                            </select>
                          </td>
                          <td class="text-center">
                            <input type="text" name="jml" id="jml" class="form-control">
                          </td>
                        </tr>
                      </table>
                    </div>
                    <label>Alat Produksi Budidaya Ikan</label>
                    <div class="mb-3">
                      <table class="table align-items-center mb-0">
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Alat</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> Jumlah (Ekor)</th>
                        </tr>
                        <tr>
                          <td>
                            <select name="alat" id="alat" class="form-control">
                              <option value="Karamba"> Karamba</option>
                              <option value="Tambak"> Tambak</option>
                              <option value="Jermal"> Jermal</option>
                              <option value="Pancing"> Pancing</option>
                              <option value="Pukat"> Pukat</option>
                              <option value="Jala"> Jala</option>
                            </select>
                          </td>
                          <td class="text-center">
                            <input type="text" name="jml_alat" id="jml_alat" class="form-control">
                          </td>
                        </tr>
                      </table>
                    </div>
                    <label>Pemanfaatan Danau/Sungai/Waduk/situ/Mata Air oleh Keluarga</label>
                    <div class="mb-3">
                      <select name="pemanfaatan" id="pemanfaatan" class="form-control">
                        <option value="Usaha Perikanan"> Usaha Perikanan</option>
                        <option value="Air Minum/Air Baku"> Air Minum/Air Baku</option>
                        <option value="Cuci dan Mandi"> Cuci dan Mandi</option>
                        <option value="Irigasi"> Irigasi</option>
                        <option value="Buang Air Besar"> Buang Air Besar</option>
                        <option value="Pembangkit Listrik"> Pembangkit Listrik</option>
                        <option value="Prasarana Transportasi"> Prasarana Transportasi</option>
                        <option value="Sumber Air Panas"> Sumber Air Panas</option>
                      </select>
                    </div>
                    <label>Lembaga Pendidikan Yang Dimiliki Keluarga/Komunitas</label>
                    <div class="mb-3">
                      <select name="lembaga pendidikan" id="lembaga pendidikan" class="form-control">
                        <option value="TK/Preschool/Play Group"> TK/Preschool/Play Group</option>
                        <option value="SD/Sederajat"> SD/Sederajat</option>
                        <option value="SMP/Sederajat"> SMP/Sederajat</option>
                        <option value="SMA/Sederajat"> SMA/Sederajat</option>
                        <option value="Perguruan Tinggi"> Perguruan Tinggi</option>
                        <option value="Pondok Pesantren"> Pondok Pesantren</option>
                        <option value="Taman Pendidikan Alqur???an"> Taman Pendidikan Alqur???an</option>
                        <option value="Rhaudatul Athfal (Tk)"> Rhaudatul Athfal (Tk)</option>
                        <option value="Seminari Tinggi"> Seminari Tinggi</option>
                        <option value="Biara"> Biara</option>
                        <option value="Perguruan Tinggi Swasta Katolik"> Perguruan Tinggi Swasta Katolik</option>
                        <option value="SLTP Swasta Katolik"> SLTP Swasta Katolik</option>
                        <option value="SLTA Swasta Katolik"> SLTA Swasta Katolik</option>
                        <option value="Lembaga Kursus Keterampilan Swasta Katolik"> Lembaga Kursus Keterampilan Swasta Katolik</option>
                        <option value="Lembaga Pendidikan Swasta Kristen Protestan"> Lembaga Pendidikan Swasta Kristen Protestan</option>
                        <option value="Lembaga Pendidikan Swasta Hindu"> Lembaga Pendidikan Swasta Hindu</option>
                        <option value="Lembaga Pendidikan Swasta Budha"> Lembaga Pendidikan Swasta Budha</option>
                        <option value="Lembaga Pendidikan Swasta Konghucu"> Lembaga Pendidikan Swasta Konghucu</option>
                        <option value="Kursus Bahasa"> Kursus Bahasa</option>
                        <option value="Kursus Menjahit"> Kursus Menjahit</option>
                        <option value="Kursus Montir"> Kursus Montir</option>
                        <option value="Kursus Komputer"> Kursus Komputer</option>
                        <option value="Kursus Mengemudi"> Kursus Mengemudi</option>
                        <option value="Kursus Satpam"> Kursus Satpam</option>
                        <option value="Kursus Bela Diri"> Kursus Bela Diri</option>
                      </select>
                    </div>
                    <label>Penguasaan Aset Tanah oleh Keluarga</label>
                    <div class="mb-3">
                      <select name="aset_tanah" id="aset_tanah" class="form-control">
                        <option value="Tidak memiliki tanah"> Tidak memiliki tanah</option>
                        <option value="Memiliki tanah antara 0,1-0,2 ha"> Memiliki tanah antara 0,1-0,2 ha</option>
                        <option value="Memiliki tanah antara 0,21-0,3 ha"> Memiliki tanah antara 0,21-0,3 ha</option>
                        <option value="Memiliki tanah antara 0,31-0,4 ha"> Memiliki tanah antara 0,31-0,4 ha</option>
                        <option value="Memiliki tanah antara 0,41-0,5 ha"> Memiliki tanah antara 0,41-0,5 ha</option>
                        <option value="Memiliki tanah antara 0,51-0,6 ha"> Memiliki tanah antara 0,51-0,6 ha</option>
                        <option value="Memiliki tanah antara 0,61-0,7 ha"> Memiliki tanah antara 0,61-0,7 ha</option>
                        <option value="Memiliki tanah antara 0,71-0,8 ha"> Memiliki tanah antara 0,71-0,8 ha</option>
                        <option value="Memiliki tanah antara 0,81-0,9 ha"> Memiliki tanah antara 0,81-0,9 ha</option>
                        <option value="Memiliki tanah antara 0,91-1,0 ha"> Memiliki tanah antara 0,91-1,0 ha</option>
                        <option value="Memiliki tanah antara 1,0-5,0 ha"> Memiliki tanah antara 1,0-5,0 ha</option>
                        <option value="Memilliki tanah lebih dari 5,0 ha"> Memilliki tanah lebih dari 5,0 ha</option>
                      </select>
                    </div>
                    <label>Aset Sarana Transportasi Umum </label>
                    <div class="mb-3">
                      <select name="aset_transportasi_umum" id="aset_transportasi_umum" class="form-control">
                        <option value="Memiliki ojek motor/sepeda motor/bentor"> Memiliki ojek motor/sepeda motor/bentor</option>
                        <option value="Memiliki becak"> Memiliki becak</option>
                        <option value="Memiliki cidemo/andong/dokar"> Memiiki cidemo/andong/dokar</option>
                        <option value="Memiliki perahu tidak bermotor"> Memiliki perahu tidak bermotor</option>
                        <option value="Memiliki tongkang"> Memiliki Tongkang</option>
                        <option value="Memiliki bus penumpang/angkutan orang/barang"> Memiliki bus penumpang/angkutan orang/barang</option>
                        <option value="Memiliki sepeda dayung"> Memiliki sepeda dayung</option>
                        <option value="Memiliki bajaj/kancil"> Memiliki bajaj/kancil</option>
                      </select>
                    </div>
                    <label>Aset Sarana Produksi</label>
                    <div class="mb-3">
                      <select name="aset_saran_produksi" id="aset_transportasi_umum" class="form-control">
                        <option value="Memiliki penggilingan padi"> Memiliki penggilingan padi</option>
                        <option value="Memiliki tractor"> Memiliki tractor</option>
                        <option value="Memiliki pabrik pengolahan hasil pertanian"> Memiliki pabrik pengolahan hasil pertanian</option>
                        <option value="Memiliki kapal penangkap ikan"> Memiliki kapal penangkap ikan</option>
                        <option value="Memiliki alat pengolahan hasil perikanan"> Memiliki alat pengolahan hasil perikanan</option>
                        <option value="Memiliki alat pengolahan hasil peternakan"> Memiliki alat pengolahan hasil peternakan</option>
                        <option value="Memiliki alat pengolahan hasil perkebunan"> Memiliki alat pengolahan hasil perkebunan</option>
                        <option value="Memiliki alat pengolahan hasil hutan"> Memiliki alat pengolahan hasil hutan</option>
                        <option value="Memiliki alat produksi dan pengolah hasil pertambangan"> Memiliki alat produksi dan pengolah hasil pertambangan</option>
                        <option value="Memiliki alat produksi dan pengolah hasil Industri kerajinan keluarga skala kecil dan menengah"> Memiliki alat produksi dan pengolah hasil Industri kerajinan keluarga skala kecil dan menengah</option>
                        <option value="Memiliki alat produksi dan pengolahan hasil industri bahan bakar dan gas skala rumah tangga"> Memiliki alat produksi dan pengolahan hasil industri bahan bakar dan gas skala rumah tangga</option>
                      </select>
                    </div>
                    <div class="text-center">
                      <button type="button" class="btn bg-gradient-info w-100 mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#modalSave">Simpan</button>
                    </div>
                </div>
                <div class="tab-pane fade show" id="nav-next" role="tabpanel" aria-labelledby="nav-next-tab">
                  <label> Aset Perumahan </label>
                    <div class="mb-3">
                      <table class="table align-items-center mb-0">
                        <tr>		
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dinding</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> Lantai</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> Atap</th>
                        </tr>
                        <tr>
                          <td>
                            <select name="dinding" id="dinding" class="form-control">
                              <option>Tembok</option> 
                              <option>Kayu</option> 
                              <option>Bambu</option> 
                              <option>Tanah liat</option> 
                              <option>Pelepah kelapa/lontar/gebang</option> 
                              <option>Dedaunan</option> 
                            </select>
                          </td>
                          <td class="text-center">
                            <select name="lantai" id="lantai" class="form-control">
                              <option>Keramik</option> 
                              <option>Semen</option> 
                              <option>Kayu</option> 
                              <option>Tanah</option> 
                            </select>
                          </td>
                          <td class="text-center">
                            <select name="atap" id="atap" class="form-control">
                              <option>Genteng</option>
                              <option>Seng</option>
                              <option>Asbes</option>
                              <option>Beton</option>
                              <option>Bambu</option>
                              <option>Kayu</option>
                              <option>Daun lontar/gebang/enau</option>
                              <option>Daun ilalang</option>
                            </select>
                          </td>
                        </tr>
                      </table>
                    </div>
                    <label>Aset Lainnya dalam Keluarga </label>
                    <div class="mb-3">
                      <select name="aset_lainnya" id="aset_lainnya" class="form-control">
                        <option>Memiliki TV dan elektronik sejenis lainnya</option> 
                        <option> Memiliki sepeda motor pribadi</option> 
                        <option> Memiliki mobil pribadi dan sejenisnya</option> 
                        <option>  Memiliki perahu bermotor</option> 
                        <option> Memiliki kapal barang</option>
                        <option> Memiliki kapal penumpang</option> 
                        <option> Memiliki kapal pesiar</option> 
                        <option> Memiliki/menyewa helikopter pribadi</option> 
                        <option>Memiliki/menyewa pesawat terbang pribadi</option>
                        <option> Memiliki ternak besar </option> 
                        <option> Memiliki ternak kecil </option> 
                        <option>Memiliki hiasan emas/berlian </option> 
                        <option> Memiliki buku tabungan bank </option> 
                        <option> Memiliki buku surat berharga </option>  
                        <option> Memiliki sertifikat deposito</option> 
                        <option>Memiliki sertifikat tanah</option> 
                        <option>Memiliki sertifikat bangunan</option> 
                        <option>Memiliki perusahaan industri besar</option> 
                        <option>Memiliki perusahaan industri menengah</option> 
                        <option>Memiliki perusahaan industri kecil</option> 
                        <option>Memiliki usaha perikanan</option> 
                        <option>Memiliki usaha peternakan</option> 
                        <option>Memiliki usaha perkebunan</option> 
                        <option>Memiliki usaha pasar swalayan</option> 
                        <option>Memiliki usaha di pasar swalayan</option> 
                        <option>Memiliki usaha di pasar tradisional</option> 
                        <option>Memiliki usaha di pasar desa</option> 
                        <option>Memiliki usaha transportasi</option> 
                        <option>Memiliki saham di perusahaan</option> 
                        <option>Pelanggan Telkom</option> 
                        <option>Memiliki HP GSM</option> 
                        <option>Memiliki HP CDMA</option> 
                        <option>Memiliki Usaha Wartel</option> 
                        <option>Memiliki parabola</option> 
                        <option>Berlangganan koran/majalah</option> 
                      </select>
                    </div>
                    <label>	Kualitas Ibu Hamil dalam Keluarga (jika ada/pernah ada ibu hamil/nifas) </label>
                    <div class="mb-3">
                      <select name="kualitas_bumil" id="kualitas_bumil" class="form-control">
                        <option> Ibu hamil periksa di Posyandu</option>
                        <option>Ibu hamil periksa di Puskesmas</option>
                        <option>Ibu hamil periksa di Rumah Sakit</option>
                        <option>Ibu hamil periksa di Dokter Praktek</option>
                        <option>Ibu hamil periksa di Bidan Praktek</option>
                        <option>Ibu hamil periksa di Dukun Terlatih</option>
                        <option>Ibu hamil tidak periksa kesehatan</option>
                        <option>Ibu hamil yang meninggal</option>
                        <option>Ibu hamil melahirkan</option>
                        <option>Ibu nifas sakit</option>
                        <option>Kematian ibu nifas</option>
                        <option>Ibu nifas sehat</option>
                        <option>Kematian ibu saat melahirkan</option>
                      </select>
                    </div>
                    <label>Kualitas Bayi dalam Keluarga (jika ada/pernah ada bayi) </label>
                    <div class="mb-3">
                      <select name="kualitas_bayi" id="kualitas_bayi" class="form-control">
                        <option> Keguguran kandungan</option>
                        <option>Bayi lahir hidup normal</option>
                        <option>Bayi lahir hidup cacat</option>
                        <option>Bayi lahir mati</option>
                        <option>Bayi lahir berat kurang dari 2,5 kg</option>
                        <option>Bayi lahir berat lebih dari 4 kg</option>
                        <option>Bayi 0-5 tahun hidup yang menderita kelainan organ tubuh, fisik dan mental</option>
                      </select>
                    </div>
                    <label>Kualitas Persalinan dalam Keluarga (jika ada/pernah ada) </label>
                    <div class="mb-3">
                    <table class="table align-items-center mb-0">
                        <tr>		
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> Tempat Persalinan</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> Pertolongan Persalinan</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> Jumlah</th>
                        </tr>
                        <tr>
                          <td>
                            <select name="tempat_persalinan" id="tempat_persalinan" class="form-control">
                              <option>Tempat persalinan Rumah Sakit Umum</option>
                              <option>Tempat persalinan Rumah Bersalin</option>
                              <option>Tempat persalinan Puskesmas</option>
                              <option>Tempat persalinan Polindes</option>
                              <option>Tempat persalinan Balai Kesehatan Ibu Anak</option>
                              <option>Tempat persalinan rumah praktek bidan</option>
                              <option>Tempat praktek dokter</option>
                              <option>Rumah dukun</option>
                              <option>Rumah sendiri</option>
                            </select>
                          </td>
                          <td class="text-center">
                            <select name="pertolongan_persalinan" id="pertolongan_persalinan" class="form-control">
                              <option>Jumlah Persalinan ditolong Dokter</option>
                              <option>Jumlah persalinan ditolong bidan</option>
                              <option>Jumlah persalinan ditolong perawat</option>
                              <option>Jumlah persalinan ditolong dukun bersalin</option>
                              <option>Jumlah persalinan ditolong keluarga</option>
                            </select>
                          </td>
                          <td class="text-center">
                            <input type="text" name="jml_pertolongan" id="jml_pertolongan" class="form-control" placeholder="Jumlah Pertolongan Persalinan">
                          </td>
                        </tr>
                      </table>
                    </div>
                    <label>Cakupan Imunisasi </label>
                    <div class="mb-3">
                      <select name="imunisasi" id="imunisasi" class="form-control" multiple>
                        <option>DPT-1</option>
                        <option>BCG</option>
                        <option>Polio -1</option>
                        <option>DPT-2</option>
                        <option>Polio-2</option>
                        <option>Polio-3</option>
                        <option>DPT-3</option>
                        <option>Campak</option>
                        <option>Cacar</option>
                        <option>Sudah Semua</option>
                      </select>
                    </div>
                    <label>Penderita Sakit dan Kelainan dalam Keluarga (jika ada/pernah)</label>
                    <div class="mb-3">
                      <select name="penderita_sakit" id="penderita_sakit" class="form-control">
                        <option> Muntaber</option>
                        <option> Demam Berdarah</option>
                        <option> Kolera</option>
                        <option> Polio</option>
                        <option> Cikungunya</option>
                        <option> Flu Burung</option>
                        <option> Busung Lapar</option>
                        <option> Kelaparan</option>
                        <option> Kulit Bersisik</option>
                        <option> Kelainan fisik</option>
                        <option> Kelainan mental</option>
                      </select>
                    </div>
                    <div class="text-center">
                      <button type="button" class="btn bg-gradient-info w-100 mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#modalSave">Simpan</button>
                    </div>
                </div>
                <div class="tab-pane fade show" id="nav-kesehatan" role="tabpanel" aria-labelledby="nav-kesehatan-tab">
                  <label> Perilaku hidup bersih dan sehat dalam Keluarga </label>
                    <div class="mb-3">
                    <select name="perilaku" id="perilaku" class="form-control">
                      <option>Kebiasaan makan dalam sehari 1 kali</option> 
                      <option>Kebiasaan makan sehari 2 kali</option> 
                      <option>Kebiasaan makan sehari 3 kali</option> 
                      <option>Kebiasaan makan sehari lebih dari 3 kali</option> 
                      <option>Belum tentu sehari makan 1 kali</option> 
                    </select>
                    </div>
                    <label>Kebiasaan berobat bila sakit dalam keluarga</label>
                    <div class="mb-3">
                      <select name="berobat" id="berobat" class="form-control">
                        <option>Dukun Terlatih</option> 
                        <option>Dokter/puskesmas/mantri kesehatan/perawat/ bidan/posyandu</option> 
                        <option>Obat tradisional dari dukun pengobatan alternatif</option> 
                        <option>Paranormal</option> 
                        <option>Obat tradisional dari keluarga sendiri</option> 
                        <option>Tidak diobati</option> 
                      </select>
                    </div>
                    <label>Status Gizi Balita dalam Keluarga</label>
                    <div class="mb-3">
                      <select name="status_gizi" id="status_gizi" class="form-control">
                        <option> Balita bergizi buruk</option>
                        <option>  Balita bergizi baik</option>
                        <option>  Balita bergizi kurang</option>
                        <option>  Balita bergizi lebih</option>
                      </select>
                    </div>
                    <label>Jenis Penyakit yang diderita Anggota Keluarga</label>
                    <div class="mb-3">
                      <select name="jns_penyakit" id="jns_penyakit" class="form-control">
                        <option> Jantung</option>
                        <option>  Lever</option>
                        <option>  Paru-paru</option>
                        <option>  Kanker</option>
                        <option>  Stroke</option>
                        <option>  Diabetes Melitus</option>
                        <option>  Ginjal</option>
                        <option>  Malaria</option>
                        <option>  Lepra/Kusta</option>
                        <option>  HIV/AIDS</option>
                        <option>  Gila/stress</option>
                        <option>  TBC</option>
                        <option>  Asma</option>
                      </select>
                    </div>
                    <label>Kerukunan</label>
                    <div class="mb-3">
                    <select name="kerukunan" id="kerukunan" class="form-control">
                        <option>Korban luka dalam keluarga akibat konflik Sara</option>
                        <option>Korban meninggal dalam keluarga akibat konflik Sara</option>
                        <option>Janda/duda dalam keluarga akibat konflik Sara</option>
                        <option>Anak yatim/piatu dalam keluarga akibat konflik Sara</option>
                      </select>
                    </div>
                    <label>Perkelahian</label>
                    <div class="mb-3">
                      <select name="perkelahian" id="perkelahian" class="form-control" multiple>
                        <option>Korban jiwa akibat perkelahian dalam keluarga</option>
                        <option>Korban luka parah akibat perkelahian dalam keluarga</option>
                      </select>
                    </div>
                    <label>Pencurian</label>
                    <div class="mb-3">
                      <select name="pencurian" id="pencurian" class="form-control">
                        <option> Korban pencurian, perampokan dalam keluarga</option>
                      </select>
                    </div>
                    <div class="text-center">
                      <button type="button" class="btn bg-gradient-info w-100 mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#modalSave">Simpan</button>
                    </div>
                </div>
                <div class="tab-pane fade show" id="nav-kejahatan" role="tabpanel" aria-labelledby="nav-kejahatan-tab">
                  <label> Perjudian </label>
                  <div class="mb-3">
                    <table class="table align-items-center mb-0">
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kegiatan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Y/N</th>
                      </tr>
                      <tr>
                        <td>
                          <label for="perjudian">Perjudian</label>
                        </td>
                        <td class="text-center">
                          <input type="checkbox" name="perjudian" id="perjudian" value="ya">Ya &nbsp; &nbsp;
                          <input type="checkbox" name="perjudian" id="perjudian" value="tidak">Tidak
                        </td>
                      </tr>
                    </table>
                  </div>
                  <label>Pemakaian Miras dan Narkoba</label>
                  <div class="mb-3">
                    <table class="table align-items-center mb-0">
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kegiatan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Y/N</th>
                      </tr>
                      <tr>
                        <td>
                        <select name="miras" id="miras" class="form-control">
                          <option> Anggota keluarga mengkonsumsi Miras yang dilarang</option>
                          <option>Anggota keluarga yang mengkonsumsi Narkoba</option>
                        </select>
                        </td>
                        <td class="text-center">
                          <input type="checkbox" name="perjudian" id="perjudian" value="ya">Ya &nbsp; &nbsp;
                          <input type="checkbox" name="perjudian" id="perjudian" value="tidak">Tidak
                        </td>
                      </tr>
                    </table>
                  </div>
                  <label>Pembunuhan</label>
                  <div class="mb-3">
                    <table class="table align-items-center mb-0">
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kegiatan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Y/N</th>
                      </tr>
                      <tr>
                        <td>
                        <select name="pembunuhan" id="pembunuhan" class="form-control">
                          <option> Korban pembunuhan dalam keluarga yang pelakunya anggota keluarga</option>
                          <option>Korban pembunuhan dalam keluarga yang pelakunya bukan anggota keluarga</option>
                        </select>
                        </td>
                        <td class="text-center">
                          <input type="checkbox" name="perjudian" id="perjudian" value="ya">Ya &nbsp; &nbsp;
                          <input type="checkbox" name="perjudian" id="perjudian" value="tidak">Tidak
                        </td>
                      </tr>
                    </table>
                  </div>
                  <label>Penculikan</label>
                  <div class="mb-3">
                    <table class="table align-items-center mb-0">
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kegiatan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Y/N</th>
                      </tr>
                      <tr>
                        <td>
                        <select name="kegiatan_penculikan" id="kegiatan_penculikan" class="form-control">
                          <option> Korban penculikan yang pelakunya anggota keluarga</option>
                          <option>Korban penculikan yang pelakunya bukan anggota keluarga</option>
                        </select>
                        </td>
                        <td class="text-center">
                          <input type="checkbox" name="penculikan" id="penculikan" value="ya">Ya &nbsp; &nbsp;
                          <input type="checkbox" name="penculikan" id="penculikan" value="tidak">Tidak
                        </td>
                      </tr>
                    </table>
                  </div>
                  <label>Kejahatan seksual</label>
                  <div class="mb-3">
                    <table class="table align-items-center mb-0">
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kegiatan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Y/N</th>
                      </tr>
                      <tr>
                        <td>
                        <select name="jns_kejahatan_seksual" id="jns_kejahatan_seksual" class="form-control">
                          <option> Korban perkosaan/pelecehan seksual yang pelakunya anggota keluarga</option>
                          <option>Korban perkosaan/pelecehan seksual yang pelakunya bukan anggota keluarga</option>
                          <option>Korban kehamilan di luar nikah yang sah menurut hukum adat</option>
                          <option>Korban kehamilan yang tidak dinikahi pelakunya</option>
                          <option>Korban kehamilan yang tidak/belum disahkan secara hukum agama dan hukum negara</option>
                        </select>
                        </td>
                        <td class="text-center">
                          <input type="checkbox" name="kejahatan_seksual" id="kejahatan_seksual" value="ya">Ya &nbsp; &nbsp;
                          <input type="checkbox" name="kejahatan_seksual" id="kejahatan_seksual" value="tidak">Tidak
                        </td>
                      </tr>
                    </table>
                  </div>
                  <label>Kekerasan Dalam Keluarga/Rumah Tangga</label>
                  <div class="mb-3">
                    <select name="jns_kdrt" id="jns_kdrt" class="form-control" multiple>
                      <option>Adanya pertengkaran dalam keluarga antara anak dan orang tua</option>
                      <option>Adanya pertengkaran dalam keluarga antara anak dan anak</option>
                      <option>Adanya pertengkaran dalam keluarga antara ayah dan ibu/orang tua</option>
                      <option>Adanya pertengkaran dalam keluarga antara anak dan pembantu</option>
                      <option>Adanya pertengkaran dalam keluarga antara anak dan anggota keluarga lain</option>
                      <option>Adanya pemukulan/tindakan fisik antara anak dengan orang tua</option>
                      <option>Adanya pemukulan/tindakan fisik antara orang tua dengan anak</option>
                      <option>Adanya pemukulan/tindakan fisik antara anak dengan anggota keluarga lain</option>
                      <option>Adanya pemukulan/tindakan fisik antara orang tua dengan orang tua</option>
                      <option>Adanya pemukulan/tindakan fisik antara anak dengan pembantu</option>
                      <option>Adanya pemukulan/tindakan fisik antara orang tua dengan pembantu</option>
                    </select>
                  </div>
                  <label>Masalah Kesejahteraan Keluarga</label>
                  <div class="mb-3">
                    <select name="kesejahteraan_keluarga" id="kesejahteraan_keluarga" class="form-control">
                      <option> Ada anggota keluarga yang mengemis</option>
                      <option>Ada anggota keluarga yang bermalam/tidur di jalanan/emperan toko/ kolong jembatan</option>
                      <option>Ada anggota keluarga yang termasuk manusia lanjut usia (di atas 60 thn)</option>
                      <option>Ada anak anggota keluarga yang mengemis</option>
                      <option>Ada anak dan anggota keluarga yang menjadi pengamen</option>
                      <option>Ada anggota keluarga yang gila/stres</option>
                      <option>Ada anggota keluarga yang cacat fisik</option>
                      <option>Ada anggota keluarga yang cacat mental</option>
                      <option>Ada anggota keluarga yang kelainan kulit</option>
                      <option>Ada anggota keluarga yang menjadi pengamen</option>
                      <option>Anggota keluarga yatim/piatu</option>
                      <option>Keluarga janda</option>
                      <option>Keluarga duda</option>
                      <option>Tinggal di bantaran sungai</option>
                      <option>Tinggal di jalur hijau</option>
                      <option>Tinggal di kawasan jalur rel kereta api</option>
                      <option>Tinggal di kawasan jalur sutet</option>
                      <option>Tinggal di kawasan kumuh dan padat pemukiman</option>
                      <option>Ada anggota keluarga yang menganggur</option>
                      <option>Ada anak yang membantu orang tua mendapatkan penghasilan</option>
                      <option>Kepala keluarga perempuan</option>
                      <option>Ada anggota keluarga eks narapidana</option>
                      <option>Tinggal di desa/kelurahan rawan banjir</option>
                      <option>Tinggal di daerah rawan bencana tsunami</option>
                      <option>Tinggal di desa/kelurahan rawan gunung meletus</option>
                      <option>Tinggal di jalur rawan gempa bumi</option>
                      <option>Tinggal di kawasan rawan tanah longsor</option>
                      <option>Tinggal di kawasan rawan kebakaran</option>
                      <option>Tinggal di desa/kelurahan rawan kelaparan</option>
                      <option>Tinggal di desa/kelurahan rawan air bersih</option>
                      <option>Tinggal di desa/kelurahan rawan kekeringan</option>
                      <option>Tinggal di desa/kelurahan rawan gagal tanam/panen</option>
                      <option>Tinggal di daerah kawasan kering, tandus & kritis</option>
                    </select>
                  </div>
                  <label>Produksi bahan galian yang dimiliki anggota keluarga</label>
                  <div class="mb-3">
                    <table class="table align-items-center mb-0">
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Bahan Galian</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Produksi Bahan Galian (Ton/Tahun)</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pemilik Bahan Galian</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pemasaran Hasil</th>
                      </tr>
                      <tr>
                        <td>
                          <select name="jns_bahan_galian" id="jns_bahan_galian" class="form-control">
                            <option>Batu kali</option>
                            <option>Batu kapur</option>
                            <option>Pasir</option>
                          </select>
                        </td>
                        <td class="text-center">
                          <input type="text" id="produksi" name="produksi" class="form-control" placeholder=" Produksi Bahan Galian (Ton/Tahun)">
                        </td>
                        <td class="text-center">
                          <select name="pemilik_bahan_galian" id="pemilik_bahan_galian" class="form-control">
                            <option>Milik Adat</option>
                            <option>Perorangan</option>
                          </select>
                        </td>
                        <td class="text-center">
                          <input type="text" id="pemasaran" name="pemasaran" class="form-control" placeholder=" Pemasaran Hasil">
                        </td>
                      </tr>
                    </table>
                  </div>
                  <div class="text-center">
                    <button type="button" class="btn bg-gradient-info w-100 mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#modalSave">Simpan</button>
                  </div>
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
        <!-- <button type="button" class="btn btn-success" data-bs-dismiss="modal">Simpan</button> -->
        <a href="/admin/prodeskel" class="btn btn-success"> Simpan </a>
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