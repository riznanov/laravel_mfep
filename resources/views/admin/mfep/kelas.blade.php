@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<?php

foreach($kelas_berprestasi as $kelas){
  $tersedia = 20-$kelas->jumlah_kelas;

  ?>
  <div class="form-group row">
    <label class="col-sm-4 control-label text-right">Kelas Berprestasi Tersedia untuk : <b><?php echo $tersedia;?> Siswa</b></label>
    <div class="col-sm-4">
    </div>
  </div>
<?php } //End looping ?>


@include('admin/mfep/index')
