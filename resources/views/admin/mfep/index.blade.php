<p class="text-right">
    <a href="{{ asset('admin/mfep/seleksi') }}" class="btn btn-success btn-sm">
        <i class="fa fa-backward"></i> Kembali
    </a>
</p>

  <div class="clearfix"><hr></div>
  {{-- <form action="{{ asset('admin/produk/proses') }}" method="post" accept-charset="utf-8"> --}}
    {{ csrf_field() }}
  <div class="row">
    <div class="col-md-8">
      <div class="btn-group">


           <?php if(isset($pagin)) { echo $pagin; } ?>

          </div>
        </div>
      </div>
      <div class="clearfix"><hr></div>
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
              <th width="25%">Kriteria</th>
              <th width="5%">Nilai Siswa</th>
              <th width="10%">Bobot</th>
              <th width="20%">Nilai Sub Kriteria</th>
              <th width="5%">Total Nilai</th>
              <th width="7%">Kelas Berprestasi</th>
              {{-- <th width="20%">Action</th> --}}
            </tr>
          </thead>
          <tbody>

            <?php $i=1;
            foreach($datasiswa as $datasiswa) { ?>

              <tr class="odd gradeX">
                  <td></td>
                  <td><?php echo $datasiswa->nama ?></a></td>
                  <td><?php echo $datasiswa->alamat ?></a></td>
                  <td>Piagam Prestasi
                      <br>Ujian Sekolah
                    <br>Nilai Rapot</a></td>
                <td><?php echo $datasiswa->nilai_piagam ?>
                <br><?php echo $datasiswa->nilai_ujian  ?>
                <br><?php echo $datasiswa->nilai_rapot  ?>
            </td>
            <td>0.2
                <br>0.4
              <br>0.4</a></td>
            <td><?php echo $datasiswa->nilai_sub_piagam ?>
                <br><?php echo $datasiswa->nilai_sub_ujian ?>
                <br><?php echo $datasiswa->nilai_sub_rapot ?>
            </td>
            <td align="center"><?php echo $datasiswa->total_nilai  ?>
            </td>
            <td><?php echo $datasiswa->kelas ?></td>
            </tr>

                      <?php $i++; } ?>

                    </tbody>
                  </table>
                </div>

                {{-- </form> --}}

                <div class="clearfix"><hr></div>
                <div class="pull-right"><?php if(isset($pagin)) { echo $pagin; } ?></div>
