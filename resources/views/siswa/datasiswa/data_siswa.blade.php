
    <div class="alert alert-info">
        Hai <strong>{{ Session()->get('nama') }}</strong>, Input Data siswa sudah lengkap
      </div>
      <hr>

      <h4>Berikut Data Siswa</h4>
      <div class="row">

        <div class="table-responsive mailbox-messages">
            <table id="example1" class="display table table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr class="bg-dark">

                    <th width="25%" align="left"> Data Siswa</th>
                    <th width="20%">Data Orang Tua Siswa</th>
                    <th width="20%">Data Nilai Siswa</th>
                    <th width="20%%">Dokumen Siswa</th>
                </tr>
            </thead>
            <tbody>

      <?php
      // Looping data user dg foreach
      $i=1;
      foreach($datasiswa as $datasiswa) {
        $id_siswa = $datasiswa->id_siswa;
        $site   = DB::table('konfigurasi')->first();

      ?>

      <tr>
        <td>
          <small>
            <i class="fas fa-id-card"></i> Nama Siswa : <strong><?php echo $datasiswa->nama ?></strong>
            <br><i class="fas fa-map-marker"></i> Alamat : <strong><?php echo $datasiswa->alamat ?></strong>
            <br><i class="fas fa-calendar"></i> Tempat, Tgl Lahir :<?php echo $datasiswa->tmp_lahir.date('d-m-Y',strtotime($datasiswa->tgl_lahir)) ?>
            <br><i class="fas fa-graduation-cap"></i> Asal Sekolah :<strong><?php echo $datasiswa->asal_sekolah ?></strong>
            <br><i class="fas fa-book"></i> Agama :<strong><?php echo $datasiswa->agama ?></strong>
            <br><i class="fas fa-envelope"></i> e-Mail:<strong><?php echo $datasiswa->email ?></strong>
          </small>
        </td>
        <td>
            <small>
              <i class="fas fa-id-card"></i> Nama Ayah : <strong><?php echo $datasiswa->ayah ?></strong>
              <br><i class="fas fa-map-marker"></i> Alamat Ayah: <strong><?php echo $datasiswa->alamat_ayah ?></strong>
              <br><i class="fas fa-calendar"></i> Tgl Lahir Ayah :<?php echo date('d-m-Y',strtotime($datasiswa->tgl_lahirayah)) ?>
              <br><i class="fas fa-book"></i> Agama Ayah:<strong><?php echo $datasiswa->agama_ayah ?></strong>
              <br><i class="fas fa-briefcase"></i> Pekerjaan Ayah:<strong><?php echo $datasiswa->krj_ayah ?></strong>
            </small>
            <br>
            <hr>
            <small>
                <i class="fas fa-id-card"></i> Nama Ibu : <strong><?php echo $datasiswa->ibu ?></strong>
                <br><i class="fas fa-map-marker"></i> Alamat Ibu: <strong><?php echo $datasiswa->alamat_ibu ?></strong>
                <br><i class="fas fa-calendar"></i> Tgl Lahir Ibu :<?php echo date('d-m-Y',strtotime($datasiswa->tgl_lahiribu)) ?>
                <br><i class="fas fa-book"></i> Agama Ibu:<strong><?php echo $datasiswa->agama_ibu ?></strong>
                <br><i class="fas fa-briefcase"></i> Pekerjaan Ibu:<strong><?php echo $datasiswa->krj_ibu ?></strong>
            </small>
        </td>
        <td>
            <small>
            <strong>Nilai Ujian</strong>
              <br>Bahasa Indonesia : <strong><?php echo $datasiswa->ujian_bind ?></strong>
              <br>IPA : <strong><?php echo $datasiswa->ujian_ipa ?></strong>
              <br>Bahasa Inggris : <strong><?php echo $datasiswa->ujian_bing?></strong>
              <br>Matematika : <strong><?php echo $datasiswa->ujian_mtk ?></strong>
            </small>
            <br> <hr>
            <?php
                if($datasiswa->pgm_kec == "10"){$pgm_kec = "1";}elseif($datasiswa->pgm_kec == "9"){ $pgm_kec = "2";}elseif($datasiswa->pgm_kec == "8"){ $pgm_kec = "3"; }else{$pgm_kec = "-";}

                if($datasiswa->pgm_kab == "10"){$pgm_kab = "1";}elseif($datasiswa->pgm_kab == "9"){ $pgm_kab = "2";}elseif($datasiswa->pgm_kab == "8"){ $pgm_kab = "3"; }else{$pgm_kab = "-";}

                if($datasiswa->pgm_prov == "10"){$pgm_prov = "1";}elseif($datasiswa->pgm_prov == "9"){ $pgm_prov = "2";}elseif($datasiswa->pgm_prov == "8"){ $pgm_prov = "3"; }else{$pgm_prov = "-";}

            ?>
            <small>
                <strong>Piagam Lomba</strong>
                  <br> Tingkat Kecamatan : <strong><?php echo $pgm_kec ?></strong>
                  <br> Tingkat Kabupaten / kota : <strong><?php echo $pgm_kab ?></strong>
                  <br> Tingkat Provinsi :<strong><?php echo $pgm_prov?></strong>
            </small>
            <br> <hr>
            <small>
                <strong>Nilai Rapot</strong>
                  <br>Kelas 4 Semester 1 : <strong><?php echo $datasiswa->rapot4a ?></strong>
                  <br>Kelas 4 Semester 2 : <strong><?php echo $datasiswa->rapot4b ?></strong>
                  <br>Kelas 5 Semester 1 : <strong><?php echo $datasiswa->rapot5a ?></strong>
                  <br>Kelas 5 Semester 2 : <strong><?php echo $datasiswa->rapot5b ?></strong>
                  <br>Kelas 6 Semester 1 : <strong><?php echo $datasiswa->rapot6a ?></strong>
                  <br>Kelas 6 Semester 2 : <strong><?php echo $datasiswa->rapot6b ?></strong>
                </small>
        </td>
        <td>

            <small>
              Ijazah : <?php if($datasiswa->ijazah!="") { ?>
                <img src="{{ asset('public/upload/dokumen siswa/ijazah/'.$datasiswa->ijazah) }}" class="img img-thumbnail img-responsive" >
                <?php }else{ ?>
                <img src="{{ asset('public/upload/dokumen siswa/rapot/'.$site->icon) }}" class="img img-thumbnail img-responsive" >
                <?php } ?>
            </small>
            <br>
            <small>
                Piagam : <?php if($datasiswa->dok_pgm_kec!="") { ?>
                  <img src="{{ asset('public/upload/dokumen siswa/piagam/'.$datasiswa->dok_pgm_kec) }}" class="img img-thumbnail img-responsive" >
                  <?php }else{ ?>
                  <img src="{{ asset('public/upload/dokumen siswa/rapot/'.$site->icon) }}" class="img img-thumbnail img-responsive" >
                  <?php } ?>
              </small>
              <br>
              <small>
                  Rapot : <?php if($datasiswa->rapot!="") { ?>
                    <img src="{{ asset('public/upload/dokumen siswa/rapot/'.$datasiswa->rapot) }}" class="img img-thumbnail img-responsive" >
                    <?php }else{ ?>
                    <img src="{{ asset('public/upload/dokumen siswa/rapot/'.$site->icon) }}" class="img img-thumbnail img-responsive" >
                    <?php } ?>
                </small>
        </td>
    </tr>

      <?php $i++; } //End looping ?>
    </tbody>
    </table>
    </div>

        <hr>
        <hr>
      </div>

