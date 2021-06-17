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

<form action="{{ asset('siswa/datasiswa/tambah_2_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
{{ csrf_field() }}


<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Nama Lengkap Ayah / Wali <span class="text-danger">*</span></label>
	<div class="col-sm-6">
		<input type="text" name="ayah" class="form-control" placeholder="Nama Ayah" required value="{{ old('ayah') }}">
		<small class="text-gray">Setiap awal kata gunakan huruf capital. Misal: <strong>Coklat Nitrico</strong></small>
	</div>
</div>
<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Alamat Ayah<span class="text-danger">*</span></label>
	<div class="col-sm-6">
		<input type="text" name="alamat_ayah" class="form-control" placeholder="Alamat Ayah" required value="{{ old('alamat_ayah') }}">
	</div>
</div>

<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Tanggal Lahir Ayah<span class="text-danger">*</span></label>
	<div class="col-sm-3">
		<input type="text" name="tgl_lahirayah" class="form-control tanggal" placeholder="dd-mm-yyyy" value="{{ old('tgl_lahirayah') }}">
		<small class="text-gray">Format: dd-mm-yyyy</small>
	</div>
</div>
<div class="form-group row">
    <label class="col-sm-3 control-label text-right">Agama Ayah</label>
	<div class="col-sm-2">
		<input type="text" name="agama_ayah" class="form-control" placeholder="Agama Ayah" value="{{ old('agama_ayah') }}">
	</div>
</div>
<div class="form-group row">
    <label class="col-sm-3 control-label text-right">Pekerjaan Ayah</label>
	<div class="col-sm-2">
		<input type="text" name="krj_ayah" class="form-control" placeholder="Pekerjaan Ayah" value="{{ old('krj_ayah') }}">
	</div>
</div>

<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Nama Lengkap Ibu <span class="text-danger">*</span></label>
	<div class="col-sm-6">
		<input type="text" name="ibu" class="form-control" placeholder="Nama Ibu" required value="{{ old('ibu') }}">
		<small class="text-gray">Setiap awal kata gunakan huruf capital. Misal: <strong>Coklat Nitrico</strong></small>
	</div>
</div>
<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Alamat Ibu<span class="text-danger">*</span></label>
	<div class="col-sm-6">
		<input type="text" name="alamat_ibu" class="form-control" placeholder="Alamat Ibu" required value="{{ old('alamat_ibu') }}">
	</div>
</div>

<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Tanggal Lahir Ibu<span class="text-danger">*</span></label>
	<div class="col-sm-3">
		<input type="text" name="tgl_lahiribu" class="form-control tanggal" placeholder="dd-mm-yyyy" value="{{ old('tgl_lahiribu') }}">
		<small class="text-gray">Format: dd-mm-yyyy</small>
	</div>
</div>
<div class="form-group row">
    <label class="col-sm-3 control-label text-right">Agama Ibu</label>
	<div class="col-sm-2">
		<input type="text" name="agama_ibu" class="form-control" placeholder="Agama" value="{{ old('agama_ibu') }}">
	</div>
</div>
<div class="form-group row">
    <label class="col-sm-3 control-label text-right">Pekerjaan Ibu</label>
	<div class="col-sm-2">
		<input type="text" name="krj_ibu" class="form-control" placeholder="Pekerjaan Ibu" value="{{ old('krj_ibu') }}">
	</div>
</div>

<div class="form-group row">
	<label class="col-sm-3 control-label text-right"></label>
	<div class="col-sm-9">
		<div class="form-group btn-group pull-right">
			<button type="submit" name="submit" class="btn btn-success "><i class="fa fa-save"></i> Simpan Data Orang Tua</button>
			<input type="reset" name="reset" class="btn btn-info " value="Reset">
		</div>
	</div>
</div>
</form>
