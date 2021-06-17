{{-- <p class="text-right">
	<a href="{{ asset('siswa/produk') }}" class="btn btn-success btn-sm">
		<i class="fa fa-backward"></i> Kembali
	</a>
</p> --}}
{{-- <hr> --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ asset('siswa/datasiswa/upload_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
{{ csrf_field() }}

<p class="alert alert-info">
    <i class="fa fa-user"></i> Siapkan dokumen hasil scan IJAZAH, PIAGAM PENGHARGAAN, RAPOT KELAS 4,5,6 (Dalam satu file)
    <small class="text-gray">  Dokumen dalam format JPG atau JPEG atau PNG <strong> - </strong></small>

</p>

<div class="form-group row">
    <label class="col-sm-4 control-label text-right">Unggah Ijazah</label>
    <div class="col-sm-8">
      <input type="file" name="ijazah" class="form-control" placeholder="Upload dokumen ijazah">
    </div>
</div>
<p class="alert alert-info">
    <i class="fa fa-user"></i> PIAGAM PENGHARGAAN
</p>
<div class="form-group row">
    <label class="col-sm-4 control-label text-right">Unggah Piagam Penghargaan Tingkat Kecamatan</label>
    <div class="col-sm-8">
      <input type="file" name="pgm_kec" class="form-control" placeholder="Upload penghargaan tingkat kecamatan">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-4 control-label text-right">Unggah Piagam Penghargaan Tingkat Kabupaten</label>
    <div class="col-sm-8">
      <input type="file" name="pgm_kab" class="form-control" placeholder="Upload penghargaan tingkat kabupaten">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-4 control-label text-right">Unggah Piagam Penghargaan Tingkat Provinsi</label>
    <div class="col-sm-8">
      <input type="file" name="pgm_prov" class="form-control" placeholder="Upload penghargaan tingkat provinsi">
    </div>
</div>

<p class="alert alert-info">
    <i class="fa fa-user"></i> RAPOT
</p>
<div class="form-group row">
    <label class="col-sm-4 control-label text-right">Unggah Rapot</label>
    <div class="col-sm-8">
      <input type="file" name="rapot" class="form-control" placeholder="Upload Rapot">
    </div>
</div>

<div class="form-group row">
	<label class="col-sm-3 control-label text-right"></label>
	<div class="col-sm-9">
		<div class="form-group btn-group pull-right">
			<button type="submit" name="submit" class="btn btn-success "><i class="fa fa-save"></i> Simpan Data</button>
			<input type="reset" name="reset" class="btn btn-info " value="Reset">
		</div>
	</div>
</div>
</form>
