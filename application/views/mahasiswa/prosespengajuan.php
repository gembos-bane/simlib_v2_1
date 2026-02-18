<script>
  window.onload = function() {
    alert("Mohon untuk lebih teliti dalam hal check bukti tiap tiap pengajuan Magang atau PKL - Petakan berdasarkan Jenis dan katagori magang atau PKL");
  };
</script>
<div class="container">
    <div class="alert alert-warning" role="alert">
          <?php 
            if($check == 0){
                echo 'mahasiswa masih dalam batas  pengajuan permohonan magang atu PKL';
            }else{ echo 'mahasiswa sudah lebih 2x mengajukan permohonan';}
          ?>
        </div>
        

        
        <div class="alert alert-danger" role='alert'>
            <?php foreach($bukti as $row){?>
            <a class="link-opacity-10-hover link-danger" style="text-decoration:none" href="<?php echo base_url()?>MHS/bukti/buktiDiterima/<?php echo $row->NAMA_BUKTI;?>/pdf" target="blank">Bukti dari syarat pengajuan mahasiswa</a>
            <?php }?>
        </div>
    <div class="content" style="text-decoration: none;">
        <div class="row">
            <div class="col-sm-1">
                    <img class="rounded" src="<?php echo base_url()?>/assets/img/logo.jpg" width="150"/>
            </div>
            <div class="col-sm-10">
                
                    <p class="text-center">
                        <center><h4>KEMENTRIAN RISET, TEKNOLOGI DAN PENDIDIKAN TINGGI</h4></center>
                        <center><h2 class="fw-bolder">UNIVERSITAS AIRLANGGA</h2></center>
                        <center><h6>JL. Dharmawangsa Dalam No. 28-30 (Kampus B) Surabaya 60286 Telp. (031)5033869, 5053156. Fax (031) 99005114</h6></center>
                        <center><h6>website: http://vokasi.unair.ac.id, email: info@vokasi.unair.ac.id</h6></center>
                    </p>
            </div>
        </div>
    </div>
    <div><hr class="fw-bolder mt-2 mb-2 "/></div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-1">
            <p>&nbsp;</p>
        </div>
        <div class="col-sm-1">
            <p>Nomor</p>
        </div>
        <div class="col-sm-5">
            <p>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B/DST/UN3.FV/I/PK.01.06/<?php echo date('Y');?></p>
        </div>
        <div class="col-sm-2">
            &nbsp;
        </div>
        <div class="col-sm-2">
            <p>Surabaya, <?php echo date('d-m-Y'); ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-1">
            <p>&nbsp;</p>
        </div>
        <div class="col-sm-1">
            <p>Hal</p>
        </div>
        <div class="col-sm-8">
            <p>: Permohonan Ijin <?php echo $proses;?></p>
        </div>
        
    </div>
</div>
<div class="container">&nbsp;</div>
<?php foreach($berkas as $row){?>
<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-sm-1">
                <p>&nbsp;</p>
            </div>
            
            <div class="col-sm-4">
                <p class="mb-1">Yth. <?php echo $row['NAMA_TUJUAN']; ?></p>
                <p class="mb-1"><?php echo $row['NAMA_PERUSAHAAN']; ?></p>
                <p class="mb-1"><?php echo $row['ALAMAT_PERUSAHAAN']; ?></p>
                <p class="mb-1"><?php echo $row['KOTA']; ?></p>
            </div>

        </div>
    </div>
</div>
<div class="container">&nbsp;</div>
<div class="container">&nbsp;</div>
<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-sm-1">
                <p>&nbsp;</p>
            </div>
            <div class="col-sm-10">
            <p>Sehubungan dengan kegiatan kurikulum berupa <?php echo $proses;?> yang dilaksanakan oleh mahasiswa, maka kami mohon kesediaan Bapak/Ibu untuk mengijinkan mahaiswa Fakultas Vokasi, Universitas Airlangga, Semester <?php echo $sems; ?> Tahun Akademik <?php echo $row['TAHUN_AKADEMIK']; ?> Program Studi <?php echo $row['NAMA_PRODI']; ?>, untuk melaksanakan <?php echo $proses;?> di <?php $row['NAMA_PERUSAHAAN'] ;?> Adapun Mahasiswa yang akan melaksanakan <?php echo $proses;?> sebagai berikut :</p>
            </div>
        </div>
    </div>
</div>
<?php };?>
<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-sm-1">&nbsp;</div>
            <div class="col-sm-10">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th scope="col-sm-1">N0</th>
                            <th scope="col-sm-4">NAMA</th>
                            <th scope="col-sm-2">NIM</th>
                            <th scope="col-sm-2">Telp</th>
                            <th scope="col-sm-3">Prodi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $a=1; foreach($mhs as $key){ ?>
                        <tr>
                            <td class="text-center"><?php echo $a++;?></td>
                            <td><?php echo $key['NAMA_MHS'];?></td>
                            <td class="text-center"><?php echo $key['NIM_MHS']?></td>
                            <td><?php echo $key['NO_TLP_MHS'];?></td>
                            <td class="text-center"><?php echo $key['NAMA_PRODI'];?></td>
                        </tr>
                    <?php };?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php foreach($berkas as $data){?>
<div class="container">
    <div class="content">
        <div class="row">
           <div class="col-sm-1">&nbsp;</div> 
           <div class="col-sm-10">
               <p>Waktu Pelaksanaan <?php echo $proses;?> Tersebut direncanakan Mulai Tanggal <?php echo $data['TGL_MULAI'] ;?> Sampai dengan <?php echo $data['TGL_BERAKHIR']; ?>.</br>Mohon konfirmasi surat balasan PKL dari Perusahaan yang Bapak / Ibu Pimpin ke Pembimbing <?php echo $proses;?> Prodi <?php echo $data['NAMA_PRODI'];?>: <?php echo $data['NAMA_DOSEN'];?>, (<?php echo $data['EMAIL_TLP'];?>.)</p>

           </div> 
        </div>
    </div>
</div>
<div class="container">
    <div class="content">
        <div class="row">
           <div class="col-sm-1">&nbsp;</div> 
           <div class="col-sm-10">
               <p>Demikian atas perhatian dan kerjasama yang baik, kami sampaikan terima kasih.</p>
               
           </div> 
        </div>
    </div>
</div>
<div class="container">
    <div class="row p-2">
        <div class="col-sm-7">
            <p>&nbsp;</p>
        </div>
        <div class="col-sm-5">
            <p>a.n. Dekan</br>Plt. Wakil Dekan I</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-1">
            <p>&nbsp;</p>
        </div>
        <div class="col-sm-1">
            <p>&nbsp;</p>
        </div>
        <div class="col-sm-1">
            <p>&nbsp;</p>
        </div>
        <div class="col-sm-2">
            <p>&nbsp;</p>
        </div>
        <div class="col-sm-4">
            &nbsp;
        </div>
        <div class="col-sm-2">
            <p>&nbsp;</p>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-7">
            <p>&nbsp;</p>
        </div>
        
        <div class="col-sm-5">
            <p>Dr. Andi Estetiono, S.E., M.M.</br>NIP. 196807162016123101</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="content">
        <div class="row">
           <div class="col-sm-1">&nbsp;</div> 
           <div class="col-sm-10">
               <p>Tembusan :</p>
               <p>1. Ketua <?php echo $data['NAMA_DEPARTEMEN'];?></br>2. Ketua Kordinator Program Studi <?php echo $data['NAMA_PRODI']?></br>Fakultas Vokasi</p>
           </div> 
        </div>
    </div>
</div>

<div class="container">
    <div class="content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    
                    <div class="collapse navbar-collapse active" id="navbarNav">
                      <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link" aria-current="page" href="<?php echo site_url('MHS/prosespdf');?>/<?php echo $data['ID_DATA_PKL']?>/PKL_MHS/prosespdf/<?php echo $data['JENIS_MAGANG'];?>/<?php echo $data['TYPE'];?>"><button class="btn btn-info">Create PDF</button></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" ><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#Modal1">Revisi</button></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" aria-current="page"><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal2">Tolak</button></a>
                        </li>
                        <li class="nav-item">
                          <a href="<?php echo site_url('API/pembatasan');?>/<?php echo $data['ID_PEGAWAI'];?>/<?php echo  $_SESSION['idpegawai']; ?>/<?php echo $data['NAMA_PERUSAHAAN']; ?>/<?php echo $data['ID_DATA_PKL']?>" class="nav-link" aria-current="page"><button type="button" class="btn btn-success">Batasi</button></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" aria-current="page" href="<?php echo site_url('MHS/delmagpkl');?>/deletedata/<?php echo $data['ID_DATA_PKL'];?>/Tolak" ><button type="button" class="btn btn-danger" onclick="myFunction()">Delete</button></a>
                          <script type="text/javascript">function myFunction(){alert("anda yakin mengahapus data pengajuan ini")}</script>
                        </li>
                      </ul>
                    </div>
                </div>
            </nav>
    </div>
</div>
<!-- Start Modal revisi -->

    <div class="container-fluid col-sm-8 col-xl-9">
             <!-- The Modal1 -->
        <!-- Modal1 -->
        <div class="modal" id="Modal1">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">REVISI PENGAJUAN</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>

                      <!-- Modal body -->
                      <div class="modal-body">
                            <form  action="#" method="post" >
                
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col-xl-9 mx-auto">
                                        <div class="cta-inner bg-faded rounded">
                                            
                                            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Nama Mahasiswa : <?php foreach($mhs as $case){echo $case['NAMA_MHS'];}?></span>
                                                        <input type="hidden" class="form-control" 
                                                        value="<?php echo $row['ID_PEGAWAI']?>" aria-describedby="basic-addon1" name="idmhs_tolak">
                                                    </div>
                                                </li> 
                                                
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Perusahan</span>
                                                        <textarea type="text" class="form-control"aria-label="Nip" value=""aria-describedby="basic-addon1" name="perusahaan"><?php echo $data['NAMA_PERUSAHAAN']; ?></textarea>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Alasan Revisi</span>
                                                        <textarea type="textarea" class="form-control" value=""aria-describedby="basic-addon1" name="alasan"></textarea>
                                                    </div>
                                                </li> 
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <input type="hidden" class="form-control"aria-label="Nip" value="<?php echo  $_SESSION['idpegawai']; ?>"aria-describedby="basic-addon1" name="idtendik">
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <input type="hidden" class="form-control"aria-label="Nip" value="<?php echo  $data['ID_DATA_PKL']; ?>"aria-describedby="basic-addon1" name="idpkl">
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" value="<?php echo $data['ID_DATA_PKL']; ?>"aria-describedby="basic-addon1" name="id">
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        

                      <!-- Modal footer -->
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Submit</button>
                          </div>
                        </form><!-- exit form -->
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        <!-- end Modal2 --> 
        <!-- Modal2 -->
        <div class="modal" id="Modal2">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Pengajuan Tertolak</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>

                      <!-- Modal body -->
                      <div class="modal-body">
                            <form  action="<?php echo site_url('API/mailingMhs') ?>" method="post" >
                
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col-xl-9 mx-auto">
                                        <div class="cta-inner bg-faded rounded">
                                            
                                            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Nama Mahasiswa : <?php foreach($mhs as $case){echo $case['NAMA_MHS'];}?></span>
                                                        <input type="hidden" class="form-control" 
                                                        value="<?php echo $row['ID_PEGAWAI']?>" aria-describedby="basic-addon1" name="idmhs_tolak">
                                                    </div>
                                                </li> 
                                                
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Perusahan</span>
                                                        <textarea type="text" class="form-control"aria-label="Nip" value=""aria-describedby="basic-addon1" name="perusahaan"><?php echo $data['NAMA_PERUSAHAAN']; ?></textarea>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Alasan Tolak</span>
                                                        <textarea type="textarea" class="form-control" value=""aria-describedby="basic-addon1" name="alasan"></textarea>
                                                    </div>
                                                </li> 
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <input type="hidden" class="form-control"aria-label="Nip" value="<?php echo  $_SESSION['idpegawai']; ?>"aria-describedby="basic-addon1" name="idtendik">
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <input type="hidden" class="form-control"aria-label="Nip" value="<?php echo  $data['ID_DATA_PKL']; ?>"aria-describedby="basic-addon1" name="idpkl">
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" value="<?php echo $data['ID_DATA_PKL']; ?>"aria-describedby="basic-addon1" name="id">
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        

                      <!-- Modal footer -->
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Submit</button>
                          </div>
                        </form><!-- exit form -->
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        <!-- end Modal2 --> 
        <!--table data user-->
        
<?php }?>