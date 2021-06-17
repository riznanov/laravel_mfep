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

<form action="{{ asset('siswa/datasiswa/tambah_nilai_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
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
<p class="alert alert-info">
    <i class="fa fa-user"></i> Isi data Piagam Prestasi.
    <small class="text-gray">  Isi dengan tingkat JUARA misal 1 untuk Juara satu dst. Jika tidak ada, maka isi dengan <strong> - </strong></small>

</p>
<div class="form-group row">

	<label class="col-sm-3 control-label text-right">Tingkat Kecamatan </label>
	<div class="col-sm-6">
		<input type="text" name="pgm_kec" class="form-control" placeholder="Juara Tingkat Kecamatan" required value="{{ old('pgm_kec') }}">
	</div>
</div>
<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Tingkat Kabupaten / Kota</label>
	<div class="col-sm-6">
		<input type="text" name="pgm_kab" class="form-control" placeholder="Juara Tingkat Kab/Kota" required value="{{ old('pgm_kab') }}">
	</div>
</div>
<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Tingkat Provinsi</label>
	<div class="col-sm-6">
		<input type="text" name="pgm_prov" class="form-control" placeholder="Juara Tingkat Provinsi" required value="{{ old('pgm_prov') }}">
	</div>
</div>

<p class="alert alert-info">
    <i class="fa fa-user"></i> Isi data nilai ujian sekolah.
    <small class="text-gray">Format nilai 0.0 misal 8 ATAU 8.5</small>
</p>
<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Bahasa Indonesia</label>
	<div class="col-sm-6">
		<input type="number" min=0 step=0.01 name="ujian_bind" class="form-control" placeholder="Nilai Bahasa Indonesia" required value="{{ old('ujian_bind') }}">
	</div>
</div>
<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Matematika</label>
	<div class="col-sm-6">
		<input type="number" min=0 step=0.01 name="ujian_mtk" class="form-control" placeholder="Nilai Matematika" required value="{{ old('ujian_mtk') }}">
	</div>
</div>
<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Bahasa Inggris</label>
	<div class="col-sm-6">
		<input type="number" min=0 step=0.01 name="ujian_bing" class="form-control" placeholder="Nilai Bahasa Inggris" required value="{{ old('ujian_bing') }}">
	</div>
</div>
<div class="form-group row">
	<label class="col-sm-3 control-label text-right">IPA</label>
	<div class="col-sm-6">
		<input type="number" min=0 step=0.01 name="ujian_ipa" class="form-control" placeholder="Nilai IPA" required value="{{ old('ujian_ipa') }}">
	</div>
</div>
<p class="alert alert-info">
    <i class="fa fa-user"></i> Isi data Nilai rata-rata rapot pada kelas 4, 5, 6.
    <small class="text-gray">Format nilai 0.0 misal 8 ATAU 8.5</small>

</p>
<div class="form-group row">
	<label class="col-sm-2 control-label text-right">Rata-rata rapot kelas 4 Semester 1</label>
	<div class="col-sm-6">
		<input type="number" min=0 step=0.01 name="rapot4a" class="form-control"required value="{{ old('rapot4a') }}">
	</div>
</div>
<div class="form-group row">
	<label class="col-sm-2 control-label text-right">Rata-rata rapot kelas 4 Semester 2</label>
	<div class="col-sm-6">
		<input type="number" min=0 step=0.01 name="rapot4b" class="form-control" required value="{{ old('rapot4b') }}">
	</div>
</div>
<div class="form-group row">
	<label class="col-sm-2 control-label text-right">Rata-rata rapot kelas 5 Semester 1</label>
	<div class="col-sm-6">
		<input type="number" min=0 step=0.01 name="rapot5a" class="form-control" required value="{{ old('rapot5a') }}">
	</div>
</div>
<div class="form-group row">
	<label class="col-sm-2 control-label text-right">Rata-rata rapot kelas 5 Semester 2</label>
	<div class="col-sm-6">
		<input type="number" min=0 step=0.01 name="rapot5b" class="form-control"  required value="{{ old('rapot5b') }}">
	</div>
</div>
<div class="form-group row">
	<label class="col-sm-2 control-label text-right">Rata-rata rapot kelas 6 Semester 1</label>
	<div class="col-sm-6">
		<input type="number" min=0 step=0.01 name="rapot6a" class="form-control" required value="{{ old('rapot6a') }}">
	</div>
</div>
<div class="form-group row">
	<label class="col-sm-2 control-label text-right">Rata-rata rapot kelas 6 Semester 2</label>
	<div class="col-sm-6">
		<input type="number" min=0 step=0.01 name="rapot6b" class="form-control" required value="{{ old('rapot6b') }}">
	</div>
</div>
<div class="form-group row">
	<label class="col-sm-3 control-label text-right"></label>
	<div class="col-sm-9">
		<div class="form-group btn-group pull-right">
			<button type="submit" name="submit" class="btn btn-success "><i class="fa fa-save"></i> Simpan Data Nilai</button>
			<input type="reset" name="reset" class="btn btn-info " value="Reset">
		</div>
	</div>
</div>
</form>
