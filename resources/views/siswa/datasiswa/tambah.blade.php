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

<form action="{{ asset('siswa/datasiswa/tambah_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
{{ csrf_field() }}

{{-- <div class="form-group row">
	<label class="col-sm-3 control-label text-right">Kategori &amp; Status Produk</label>
	<div class="col-sm-3">
		<select name="id_kategori_produk" class="form-control">
			<?php foreach($kategori_produk as $kategori_produk) { ?>
				<option value="<?php echo $kategori_produk->id_kategori_produk ?>"><?php echo $kategori_produk->nama_kategori_produk ?></option>
			<?php } ?>
		</select>
	</div>
	<div class="col-sm-3">
		<select name="status_produk" class="form-control">
			<option value="Publish">Publikasikan</option>
			<option value="Draft">Simpan sebagai draft</option>
		</select>
	</div>
</div> --}}

<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Nama Lengkap Siswa <span class="text-danger">*</span></label>
	<div class="col-sm-6">
		<input type="text" name="nama" class="form-control" placeholder="Nama Siswa" required value="{{ old('nama') }}">
		<small class="text-gray">Setiap awal kata gunakan huruf capital. Misal: <strong>Coklat Nitrico</strong></small>
	</div>
</div>
<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Alamat<span class="text-danger">*</span></label>
	<div class="col-sm-6">
		<input type="text" name="alamat" class="form-control" placeholder="Alamat" required value="{{ old('alamat') }}">
	</div>
</div>
<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Tempat Lahir<span class="text-danger">*</span></label>
	<div class="col-sm-6">
		<input type="text" name="tmp_lahir" class="form-control" placeholder="Tempat Lahir" required value="{{ old('tmp_lahir') }}">
	</div>
</div>
<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Tanggal Lahir<span class="text-danger">*</span></label>
	<div class="col-sm-3">
		<input type="text" name="tgl_lahir" class="form-control tanggal" placeholder="dd-mm-yyyy" value="{{ old('tgl_lahir') }}">
		<small class="text-gray">Format: dd-mm-yyyy</small>
	</div>
</div>
<div class="form-group row">
    <label class="col-sm-3 control-label text-right">Asal Sekolah<span class="text-danger">*</span></label>
	<div class="col-sm-6">
		<input type="text" name="asal_sekolah" class="form-control" placeholder="Asal Sekolah" required value="{{ old('asal_sekolah') }}">
	</div>
</div>
<div class="form-group row">
    <label class="col-sm-3 control-label text-right">Agama</label>
	<div class="col-sm-2">
		<input type="text" name="agama" class="form-control" placeholder="Agama" value="{{ old('agama') }}">
	</div>
</div>
<div class="form-group row">
    <label class="col-sm-3 control-label text-right">Email</label>
	<div class="col-sm-5">
		<input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
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
