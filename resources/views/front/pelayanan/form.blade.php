@extends("front/master")

@section("title-page")
Form Pelayanan
@endsection

@section("content")

<div class="row">
    <div class="col-12">
        <div class="title-bordered mb-5 d-flex align-items-center">
            <h1 class="h4">Permohonan Informasi Publik</h1>
        </div>
    </div>
    <div class="col-md-6">
        <div class="content mb-5">
            <div class="form-group">
                <label for="cat">Kategori Permohonan</label>
                <select name="cat" id="cat" class="form-control">
                    <option value=""> Pilih</option>
                    <option value="perorangan"> Perorangan</option>
                    <option value="lembaga"> Lembaga/Organisasi</option>
                </select>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">No. Telepon</label>
                <input type="numeric" name="phone" id="phone" class="form-control" required>
            </div>
            <button onclick="myFunction()" class="btn btn-primary">Send Now</button>
        </div>
    </div>
    <div class="col-md-6">
        <!-- <form method="POST" action="#"> -->
        <div class="form-group">
            <label for="pekerjaan">Pekerjaan</label>
            <input type="text" name="pekerjaan" id="pekerjaan" class="form-control">
        </div>
        <div class="form-group">
            <label for="info">Rincian Informasi</label>
            <textarea name="info" id="info" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="tujuan">Tujuan</label>
            <textarea name="tujuan" id="tujuan" class="form-control"></textarea>
        </div>
        <!-- </form> -->
    </div>
</div>

@endsection

@section("script")
<script>
    function myFunction() {
        alert("Permohonan anda telah terkirim");
    }
</script>
@endsection