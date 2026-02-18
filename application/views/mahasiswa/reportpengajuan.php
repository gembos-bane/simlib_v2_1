
<!-- en pengambilan data -->
<div class="alert alert-danger"><h4 class="text-center">Pengajuan Surat Pengantar Magang Hanya Untuk yang sudah diterima melaksanakan Magang di Instansi atau Perusahaan</h4></div>
<script>
        window.addEventListener('load', function() {
            // Display an alert after 3 seconds (3000 milliseconds)
            setTimeout(function() {
                alert("Sebelum Melanjutkan Pengajuan Mohon Check dahulu Nim Anda, Untuk Check Silahkan cLick ProfilMhs di TopBar");
            }, 1000);
        });
    </script>
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed alert-warning" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Report Pengajuan Ijin Melaksanakan Magang/PKL
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <div class="alert alert-warning" role="alert">
          <?php echo $msg;?>
        </div>
        <div class="table">
            <table class="table table-bordered">
            <thead class="table alert-info" style="color:darkblue;">
                <tr class="text-center">
                    <th scope="col-sm-1">N0</th>
                    <th scope="col-sm-2">Tujuan</th>
                    <th scope="col-sm-4">Alamat</th>
                    <th scope="col-sm-2">Pembimbing Magang/PKL</th>
                    <th scope="col-sm-2">Pesan</th>
                    <th scope="col-sm-1">Status</th>
                    
                </tr>
            </thead>
            <tbody>

                <?php 
                $no = 1;
                foreach ($report as $key => $value) {
                    ?>
                <tr>
                    <td scope="col-sm-1"><?php echo $no++;?></td>
                    <td scope="col-sm-4"><p><?php echo $value['NAMA_TUJUAN']; ?></p><?php echo $value['NAMA_PERUSAHAAN'];?></td>
                    <td scope="col-sm-2"><?php echo $value['ALAMAT_PERUSAHAAN'].', '.$value['KOTA'];?></td>
                    <td scope="col-sm-2"><?php echo $value['EMAIL_TLP'];?></td>
                    <td scope="col-sm-2"><?php echo $value['MAILING'];?></td>
                    <td scope="col-sm-3">
                        <?php 
                        if($value['RESPONS'] == 0){?>
                            <p class="alert alert-info text-center">Proses Akademik</p>
                        <?php }
                        if($value['RESPONS'] == 1){?>
                            <p class="alert alert-success text-center">Pengajuan Berhasil</p>
                            <?php }
                        if($value['RESPONS'] == 3){?>
                            <p class="alert alert-danger text-center">Pengajuan Tertolak</p>
                            <?php }
                        if($value['RESPONS'] == 4){?>
                            <p class="alert alert-primary text-center">Pengajuan Dibatasi</p>
                            <?php }
                        if($value['RESPONS'] == 2){?><small>Berkas Disetujui</small><a style="text-decoration: none" href="<?php echo site_url('MHS/downloadberkas') ?>/berkasmagang/<?php echo $value['ID_DATA_PKL']?>/pdf" target='_blank'><p class="text text-info"><button class="btn btn-info">Download Berkas</button></p></a><?php }?>
                    </td>
                    
                </tr>
                <?php };?>
            </tbody>
            </table>

        </div>
    </div>
    <div class="container-fluid col-sm-8 col-xl-9">
             <!-- The Modal1 -->
        <!-- Modal2 -->
        <div class="modal" id="Modal2">
            <div class="modal-dialog">
                <div class="modal-content">

                      <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Update Berkas</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                      <!-- Modal body -->
                    <div class="modal-body">
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col-xl-9 mx-auto">
                                        <div class="cta-inner bg-faded rounded">
                                            <p class="text">silahkan menghubungi sdr. Nikita untuk mendapatkan berkas Pengajuan pelaksanaan magang/PKL yang telah disetujui dan dilegalitas oleh pihak Fakultas Vokasi</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                      <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">oke</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed alert-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Pengajuan Permohonan Pengambilan Data
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
          <div class="content">
    <div class="content container-fluid">
        <div class="table">
            <table class="table table-responsive" >
            <thead class="table alert-info" style="color:darkblue;">
                <tr class="text-center">
                    <th scope="col-sm-1">N0</th>
                    <th scope="col-sm-4">Nama Mhs</th>
                    <th scope="col-sm-4">NIM</th>
                    <th scope="col-sm-4">Nama Perusahaan</th>
                    <th scope="col-sm-2">Alamat</th>
                    <th scope="col-sm-3">Status Pengajuan</th>
                </tr>
            </thead>
            <tbody>

                <?php 
                $no = 1;
                foreach ($pengambilandata as $key => $value) {
                    ?>
                <tr>
                    <td scope="col-sm-1"><?php echo $no++;?></td>
                    <td scope="col-sm-4"><?php echo $value['NAMA_PEGAWAI'];?></td>
                    <td scope="col-sm-4"><?php echo $value['NIP_PEGAWAI']?></td>
                    <td scope="col-sm-4"><?php echo $value['NAMA_PERUSAHAAN'];?></td>
                    <td scope="col-sm-2"><?php echo $value['ALAMAT_PERUSAHAAN'];?></td>
                    <td scope="col-sm-3">
                        <?php if($value['STATUS_PROSES'] == 0){ ?>
                            <a href="#"><button class="btn btn-warning" >masih proses</button></a>
                            <?php }else{ ?>
                                <a href="#"><button type="button" class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#Modal2">Selesai</button> <?php }?></a>
                        </td>
                </tr>
                <?php };?>
            </tbody>
            </table>
        </div>
    </div>
</div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed alert-danger" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Report Pengajuan Ujian Skripsi
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><div class="content">
    <div class="content container-fluid">
        <div class="table">
            <table class="table table-bordered">
            <thead class="table alert-info" style="color:darkblue;">
                <tr class="text-center">
                    <th scope="col-sm-1">N0</th>
                    <th scope="col-sm-4">Nama Mhs</th>
                    <th scope="col-sm-4">NIM</th>
                    <th scope="col-sm-4">JUDUL TA/SKRIPSI</th>
                    <th scope="col-sm-2">Pembimbing 1</th>
                    <th scope="col-sm-2">Pembimbing 2</th>
                    <th scope="col-sm-2">Tgl Pengajuan</th>
                    <th scope="col-sm-3">Status Pengajuan</th>
                </tr>
            </thead>
            <tbody>

                <?php 
                $no = 1;
                foreach ($skripsi as $key => $value) {
                    ?>
                <tr>
                    <td scope="col-sm-1"><?php echo $no++;?></td>
                    <td scope="col-sm-4"><?php echo $value['NAMA_PEGAWAI'];?></td>
                    <td scope="col-sm-4"><?php echo $value['NIP_PEGAWAI']?></td>
                    <td scope="col-sm-4"><?php echo $value['JUDUL'];?></td>
                    <td scope="col-sm-2"><?php echo $value['PEMBIMBING1'];?></td>
                    <td scope="col-sm-2"><?php echo $value['PEMBIMBING2'];?></td>
                    <td scope="col-sm-2"><?php echo $value['DATE_SKRIPSI'];?></td>
                    <td scope="col-sm-3">
                        <?php if($value['RESPONS'] == 0){ ?>
                            <a href="#"><button class="btn btn-warning" >Proses AKD</button></a>
                            <?php }else{ ?>
                                <a href="#"><button type="button" class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#Modal2">Selesai</button> <?php }?></a>
                        </td>
                </tr>
                <?php };?>
            </tbody>
            </table>
        </div>
    </div>
</div></div>
    </div>
  </div>
<!-- report pengajuan skripsi -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingfour">
      <button class="accordion-button collapsed alert-success" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapseThree">
        Report Pengajuan Sidang Yudisium (kelulusan)
      </button>
    </h2>
    <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><div class="content">
    <div class="content container-fluid">
        <div class="card">
          <div class="card-header alert-info">
            Report Pengajuan
          </div>
          <div class="card-body">
            <h5 class="card-title">Status Pengajuan</h5>
            <!--<?php foreach($yudisium as $row){ $status = $row['PROSES']; $pesan = $row['PESAN'];}
                if($status == 3){?>
                        <div class="alert alert-danger" role="alert"><p class="card-text">Pengajuan anda tertolak, Mohon Data diperbaiki, Pesan dari Admin "<?php echo $pesan?>"</p></div>

                            <a href="#" class="btn btn-primary">Update</a>
                    <?php 

                }if($status == 0 ){?>
                            <div class="alert alert-info" role="alert">
                                <p class="card-text">Pengajuan Anda Akan segera Kami Proses untuk diajukan sidang Yudisium </p>
                            </div>
                    <?php

                }else{?>
                        <div class="alert alert-success" role="alert">
                            <p class="card-text">Selamat Pengajuan anda diterima, proses selanjutnya menunggu via whatsapp group angkatan</p>
                        </div>
                    <?php } ?> -->


            <div class="table">
                <table class="table table-bordered">
                    <tr class="text-center">
                        <th scope="col-sm-1">No</th>
                        <th scope="col-sm-4">Nama</th>
                        <th scope="col-sm-2">Nim</th>
                        <th scope="col-sm-1">Periode</th>
                        <th scope="col-sm-3">Pesan</th>
                        <th scope="col-sm-1">Status</th>
                    </tr>
                    <?php 
                    $a = 1;
                    foreach($yudisium as $value){ ?>
                     <tr>
                        
                        <td class="text-center"><?php echo $a++;?></td>
                        <td class="text-center"><?php echo $value['NAMA_PEGAWAI'];?></td>
                        <td class="text-center"><?php echo $value['NIP_PEGAWAI'];?></td>
                        <td class="text-center"><?php echo $value['TGL_PERIODE'];?></td>
                        <td class="table-info text-center"><?php echo $value['PESAN'];?></td>
                        <td class="text-center">
                        <?php if($value['PROSES'] == 3){?>
                            <a href="<?php echo site_url('MHS/uiupdateyudisium')?>/<?php echo $value['ID_DAFTAR_YUDISIUM']?>/<?php echo $value['ID_PEGAWAI'];?>/Pendaftaran_yudisium/<?php echo $value['NAMA_PRODI']."/".$value['ID_PRODI']; ?>" class="btn btn-danger">Update</a><?php
                            }elseif ($value['PROSES'] == 0) {?>
                                <button class="btn btn-primary" disabled>PROSES AKD</button><?php 
                                }else{?>
                                    <button class="btn btn-info" disabled>BERHASIL</button>
                                    <?php } ?>
                        </td>
                    </tr>
                        <?php }; ?>
                </table>
            </div>
          </div>
        </div>
    </div>
    </div>
    </div>
    </div>
  </div>
</div>