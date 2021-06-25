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


{{-- @include('admin/mfep/index') --}}
<div class="table-responsive mailbox-messages">
    <table id="example1" class="display table table-bordered table-sm" cellspacing="0" width="100%">
      <thead>
        <tr class="bg-info">
          <th width="5%">
            <div class="mailbox-controls">
              <!-- Check all button -->
              <button type="button" class="btn btn-info btn-sm checkbox-toggle"><i class="far fa-square"></i>
              </button>
            </div>
          </th>
          <th width="20%">Nama Siswa</th>
          <th width="20%">Alamat Siswa</th>
          <th width="25%">Tempat, Tgl Lahir</th>
          <th width="5%">Asal Sekolah</th>
          <th width="10%">Agama</th>
          <th width="20%">Email</th>
          <th width="5%">Total Nilai</th>
          <th width="5%">Kelas</th>

          {{-- <th width="20%">Action</th> --}}
        </tr>
      </thead>
      <tbody>

        <?php $i=1;
        foreach($kelas_prestasi as $datasiswa2) { ?>

          <tr class="odd gradeX">
              <td></td>
              <td><?php echo $datasiswa2->nama ?></a></td>
              <td><?php echo $datasiswa2->alamat ?></a></td>
              <td><?php echo $datasiswa2->tmp_lahir.' '.$datasiswa2->tgl_lahir ?></td>
             <td><?php echo $datasiswa2->asal_sekolah ?></td>
             <td><?php echo $datasiswa2->agama ?></td>
             <td><?php echo $datasiswa2->email ?></td>
             <td align="center"><?php echo $datasiswa2->total_nilai  ?></td>
             <td align="center"><?php echo $datasiswa2->nama_kelas  ?></td>
        {{-- <td><?php echo $datasiswa2->kelas ?></td> --}}
        </tr>

                  <?php $i++; } ?>

                </tbody>
              </table>
            </div>



    {{-- <?php $i++; } //End looping ?>
    <?php $i++; } //End looping ?> --}}
<br>
{{-- <label class="col-sm-4 control-label text-left">Kelas  : <b>7B </b></label> --}}
<div class="table-responsive mailbox-messages">
    <table id="example1" class="display table table-bordered table-sm" cellspacing="0" width="100%">
      <thead>
        <tr class="bg-info">
          <th width="5%">
            <div class="mailbox-controls">
              <!-- Check all button -->
              <button type="button" class="btn btn-info btn-sm checkbox-toggle"><i class="far fa-square"></i>
              </button>
            </div>
          </th>
          <th width="20%">Nama Siswa</th>
          <th width="20%">Alamat Siswa</th>
          <th width="25%">Tempat, Tgl Lahir</th>
          <th width="5%">Asal Sekolah</th>
          <th width="10%">Agama</th>
          <th width="20%">Email</th>
          <th width="5%">Total Nilai</th>
          <th width="5%">Kelas</th>

          {{-- <th width="20%">Action</th> --}}
        </tr>
      </thead>
      <tbody>

        <?php $i=1;
        foreach($kelas_b as $datasiswa2) { ?>

          <tr class="odd gradeX">
              <td></td>
              <td><?php echo $datasiswa2->nama ?></a></td>
              <td><?php echo $datasiswa2->alamat ?></a></td>
              <td><?php echo $datasiswa2->tmp_lahir.' '.$datasiswa2->tgl_lahir ?></td>
             <td><?php echo $datasiswa2->asal_sekolah ?></td>
             <td><?php echo $datasiswa2->agama ?></td>
             <td><?php echo $datasiswa2->email ?></td>
             <td align="center"><?php echo $datasiswa2->total_nilai  ?></td>
             <td align="center"><?php echo $datasiswa2->nama_kelas  ?></td>
        {{-- <td><?php echo $datasiswa2->kelas ?></td> --}}
        </tr>

                  <?php $i++; } ?>

                </tbody>
              </table>
            </div>



    {{-- <?php $i++; } //End looping ?>
    <?php $i++; } //End looping ?> --}}


