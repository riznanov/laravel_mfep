{{-- <div class="row"> --}}
    <br>
    <div class="table-responsive mailbox-messages">
        <table id="example1" class="display table table-bordered table-sm" cellspacing="0" width="100%">
          <thead>
            <tr class="bg-info">
              <th width="3%">
                <div class="mailbox-controls">
                  <!-- Check all button -->
                  <button type="button" class="btn btn-info btn-sm checkbox-toggle"><i class="far fa-square"></i>
                  </button>
                </div>
              </th>
              <th width="20%">Nama Siswa</th>
              <th width="20%">Alamat Siswa</th>
              <th width="20%">Tempat, Tgl Lahir</th>
              <th width="5%">Asal Sekolah</th>
              <th width="10%">Agama</th>
              <th width="20%">Email</th>
              <th width="5%">Kelas</th>
    
              {{-- <th width="20%">Action</th> --}}
            </tr>
          </thead>
          <tbody>
    
            <?php $i=1;
            foreach($kelas as $kelas) { ?>
    
              <tr class="odd gradeX">
                  <td></td>
                  <td><?php echo $kelas->nama ?></a></td>
                  <td><?php echo $kelas->alamat ?></a></td>
                  <td><?php echo $kelas->tmp_lahir.' '.$kelas->tgl_lahir ?></td>
                 <td><?php echo $kelas->asal_sekolah ?></td>
                 <td><?php echo $kelas->agama ?></td>
                 <td><?php echo $kelas->email ?></td>
                 <td align="center"><?php echo $kelas->nama_kelas  ?></td>
            {{-- <td><?php echo $kelas->kelas ?></td> --}}
            </tr>
    
                      <?php $i++; } ?>
    
                    </tbody>
                  </table>
                </div>
    

    <br>