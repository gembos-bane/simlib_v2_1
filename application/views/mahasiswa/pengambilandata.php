<div class="container">
    <div class="content" style="text-decoration: none;">
        <div class="row">
            <div class="col-sm-1">
                    <img class="rounded" src="<?php echo base_url()?>/assets/img/logo.jpg" width="150"/>
            </div>
            <div class="col-sm-10">
                
                    <p class="text-center">
                        <center><h4>KEMENTRIAN RISET, TEKNOLOGI DAN PENDIDIKAN TINGGI</h4></center>
                        <center><h2 class="fw-bolder">UNIVERSITAS AIRLANGGA</h2></center>
                        <center><h6>Kampus C Mulyorejo, Surabaya 60115 Telp. (031)5914042, 5912546, 5912564 Fax (031) 5981841</h6></center>
                        <center><h6>website: http://www.unair.ac.id; e-mail: rektor@unair.ac.id</h6></center>
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
            <p>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B/DST/UN.FV/I/PT.01.04/<?php echo date('Y');?></p>
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
            <p>: <?php echo $proses;?></p>
        </div>
        
    </div>
</div>
<div class="container">&nbsp;</div>
<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-sm-1">
                <p>&nbsp;</p>
            </div>
            <?php foreach($berkas as $row){?>
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
            <p>Sesuai dengan buku Pedoman Pelaksanaan Pendidikan Program Studi <?php echo $row['NAMA_PRODI']; ?>, Fakultas Vokasi, Universitas Airlangga, bahwa setiap mahasiswa diwajibkan untuk menyelesaikan tugas perkuliahan dari dosen .</p>
           
            <p>Sehubungan dengan hal tersebut diatas, kami mohon bantuan dan kebijakan Saudara untuk berkenan memberi ijin pengambilan data di <?php echo $row['NAMA_PERUSAHAAN'];?> kepada mahasiswa sebagai berikut:</p>
            </div>
        </div>
    </div>
</div><?php };?>
<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-sm-1">&nbsp;</div>
            <div class="col-sm-10"> 
                <table class="table table-bordered">
                    <thead class="table">
                        <tr class="text-center">
                            <th scope="col-sm-1">No</th>
                            <th scope="col-sm-4">NAMA MAHASISWA</th>
                            <th scope="col-sm-3">NIM</th>
                            <th scope="col-sm-3">No TLP</th>
                            <th scope="col-sm-4">PROGRAM STUDI</th>
                            </tr>
                    </thead>   
                        <tbody>
                        <?php $a=1;  foreach($isi as $key){ ?>
                        <tr>
                            <td scope="col-sm-1"><?php echo $a++;?></td>
                            <td scope="col-sm-4"><?php echo $key['NAMA_PEGAWAI'];?></td>
                            <td scope="col-sm-3"><?php echo $key['NIP_PEGAWAI'];?></td>
                            <td scope="col-sm-3"><?php echo $key['NO_TLP'];?></td>
                            <td scope="col-sm-4"><?php echo $key['NAMA_PRODI'];?></td>
                        </tr>
                    <?php };?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php foreach($isi as $data){?>

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
            <p>a.n. Dekan</br>Plt.Wakil Dekan I</p>
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
            <p>Dr. Andi Estetiono, S.E., M.M.</br>NIP 196807162016123101</p>
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
                          <a class="nav-link" aria-current="page" href="<?php echo site_url('MHS/prosespdfambildata');?>/<?php echo $data['ID_AMBIL_DATA']?>/2/<?php echo $data['STATUS_PROSES'];?>/" target="blank"><button class="btn btn-info">Create PDF</button></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" ><button type="button" class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#Modal2">Revisi</button></a>
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

        <!-- Modal2 -->
        <div class="modal" id="Modal2">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Update Account</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>

                      <!-- Modal body -->
                      <div class="modal-body">
                            <form  action="<?php echo site_url('Backbone/createUser') ?>" method="post" >
                
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col-xl-9 mx-auto">
                                        <div class="cta-inner bg-faded rounded">
                                            
                                            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Tujuan : </span>
                                                        <input type="text" class="form-control" 
                                                        value="<?php echo $row['NAMA_TUJUAN']?>" aria-describedby="basic-addon1" name="tujuan" />
                                                        <input type="hidden" class="form-control" 
                                                        value="<?php echo $row['ID_TUJUAN']?>" aria-describedby="basic-addon1" name="tujuan" />
                                                    </div>
                                                </li> 
                                                
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Perusahan</span>
                                                        <input type="text" class="form-control"aria-label="Nip" value="<?php echo $data['NAMA_PERUSAHAAN']; ?>"aria-describedby="basic-addon1" name="perusahaan">
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Alamat</span>
                                                        <input type="text" class="form-control"aria-label="Nip" value="<?php echo $data['ALAMAT_PERUSAHAAN']; ?>"aria-describedby="basic-addon1" name="alamat">
                                                    </div>
                                                </li> 
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Kota</span>
                                                        <input type="text" class="form-control"aria-label="Nip" value="<?php echo $data['KOTA']; ?>"aria-describedby="basic-addon1" name="kota">
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <input type="hidden" class="form-control" value="<?php echo $data['ID_AMBIL_DATA']; ?>"aria-describedby="basic-addon1" name="id">
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