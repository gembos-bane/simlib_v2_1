 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
 <?php 
 session_start();
 $idle_time = 180000;

 if(time() - $_SESSION['time_map'] > $idle_time ){
    session_destroy();
    session_unset();
    redirect(site_url('Backbone/index'));
 }else{
    $_SESSION['time_map'] = time();
 }
 

 foreach ($data as $row ){ ?>
 
    <div class="container-fluid" id="autohide">
             <!-- The Modal1 -->
            <div class="alert alert-warning alert-dismissible fade show" role="alert" >
              <strong>Hallo PAA!</strong> Ada Beberapa Pengajuan Yang Belum Terproses untuk magang <?php echo $alertmagangprodi;?> Mahasiswa
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="alert alert-danger alert-dismissible fade show" role="alert" >
              <strong>Hallo PAA!</strong> Ada Beberapa Pengajuan Yang Belum Terproses untuk Pengambilan Data <?php echo $alertambildata;?> Mahasiswa
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="alert alert-info alert-dismissible fade show" role="alert" >
              <strong>Hallo PAA!</strong> Ada Beberapa Pengajuan Yang Belum Terproses untuk Yudisium <?php echo $alertyudisium;?> Mahasiswa
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
</div>

          


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
                            <form  action="<?php echo site_url('Source_in_out/updatedata') ?>" method="post" >
                
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col-xl-9 mx-auto">
                                        <div class="cta-inner bg-faded rounded">
                                            
                                            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">NAMA</span>
                                                        <input type="text" class="form-control"  aria-label="Nama" aria-describedby="basic-addon1" name="Nama" value="<?php echo $row ['NAMA_PEGAWAI'];?>">
                                                    </div>
                                                </li>
                                                
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">NIP</span>
                                                        <input type="text" class="form-control"  aria-label="Nip" aria-describedby="basic-addon1" name="Nip" value="<?php echo $row['NIP_PEGAWAI'];?>">
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Pangkat</span>
                                                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="Pangkat" value="<?php echo $row['GOLONGAN'];?>">
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Prodi</span>
                                                        <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" name="Prodi" value="<?php echo $row['NAMA_PRODI'];?>">
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">NO TLP</span>
                                                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="tlp" value="<?php echo $row['NO_TLP'];?>">
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Email</span>
                                                        <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" name="email" value="<?php echo $row['E_MAIL'];?>">
                                                    </div>
                                                </li>
                                                                                                
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Alamat</span>
                                                        <input type="text" class="form-control" placeholder="<?php echo $row['ALAMAT'];?>" aria-label="Password" aria-describedby="basic-addon1" name="alamat" value="<?php echo $row['ALAMAT'];?>">
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">TMT</span>
                                                        <input type="date" class="form-control" placeholder="<?php echo $row['TMT'];?>" aria-label="Password" aria-describedby="basic-addon1" name="tanggal" value="<?php echo $row['TMT'];?>">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-group mb-3">
                                                        <input type="hidden" class="form-control" aria-label="Password" aria-describedby="basic-addon1" name="rule" value="<?php echo $_SESSION['rule'];?>">
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
        <!-- end Modal2 --> 
        <!--table data user-->
        
            
        <div>&nbsp;</div>

                <!-- Page content-->
        <div class="container container-fluid">
    <div class="card-group">
            <div class="card col-sm-2">
                <div class="card img img-thumbnail" width='200px' high='200px'>
                    <img class="card-img" src="<?php echo base_url()?>assets/img/logo.jpg"  width='200' high='200'>
                </div>
                <nav class="navbar navbar-expand-lg navbar-light bg-liht">
                        <ul class="navbar-nav">
                          <li class="nav-item text-left">
                            <button type="button" class="btn btn-clear btn-hover"  data-bs-toggle="modal" data-bs-target="#Modal2">Edit Profile</button>
                            <a href="<?php echo base_url();?>Backbone/editprofile"><button type="button" class="btn btn-clear">Change Login</button></a>
                            <a href="http://cybercampus.unair.ac.id/" target="blank"><button type="button" class="btn btn-clear">Satu Data UNAIR</button></a>
                          </li>
                        </ul>
                      <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    
                </div>
                </nav>
                   
            </div> 
            <div class="card col-sm-10">
                <div class="card-body">
                    <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col-sm-1">Profile Data</th>
                        <th scope="col-sm-11">&nbsp;</th>
                    </tr>
                </thead>
                <tbody class="text-muted">
                    <tr>
                        <th scope="col-sm-1"><p class="text-capitalize">Nama</p></th>
                        <th scope="col-sm-11"><p class="text-capitalize"><?php echo $row ['NAMA_PEGAWAI'];?></p></th>
                        
                    </tr>
                    <tr>
                        <th scope="col-sm-1"><p class="text-capitalize">NIP/NIK</p></th>
                        <th scope="col-sm-11"><p class="text-capitalize"><?php echo $row['NIP_PEGAWAI'];?></p></th>
                        
                    </tr>
                    <tr>
                        <th scope="col-sm-1"><p class="text-capitalize">Pangkat/Golongan</p></th>
                        <th scope="col-sm-11"><p class="text-capitalize"><?php echo $row['GOLONGAN'];?></p></th>
                      
                    </tr>
                    <tr>
                        <th scope="col-sm-1"><p class="text-capitalize">PRODI</p></th>
                        <th scope="col-sm-11"><p class="text-capitalize"><?php echo $row['NAMA_PRODI'];?></p></th>
                    </tr>
                    <tr>
                        <th scope="col-sm-1"><p class="text-capitalize">No Telp</p></th>
                        <th scope="col-sm-11"><p class="text-capitalize"><?php echo $row['NO_TLP'];?></p></th>
                    <tr>
                        <th scope="col-sm-1"><p class="text-capitalize">e-mail</p></th>
                        <th scope="col-sm-11"><p class="text-capitalize"><?php echo $row['E_MAIL'];?></p></th>
                    </tr>
                    <tr>
                        <th scope="col-sm-1"><p class="text-capitalize">TMT</p></th>
                        <th scope="col-sm-11"><p class="text-capitalize"><?php echo $row['TMT'];?></p></th>
                    </tr>
                    <tr>
                        <th scope="col-sm-1"><p class="text-capitalize">alamat</p></th>
                        <th scope="col-sm-11"><p class="text-capitalize"><?php echo $row['ALAMAT'];?></p></th>
                    </tr>
                </tbody>
            </table>
                </div>
                
            </div>      
        </div>
    </div>
    <!-- end page -->
   
</div>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="<?php echo base_url()?>assets/js/script.js"></script>

</script>
</body><?php }?>
</html>
<script>
// Get the element you want to hide
const messageElement = document.getElementById('autohide');

// Set a timeout to hide the element after 5 seconds (5000 milliseconds)
setTimeout(function() {
    if (messageElement) {
        messageElement.style.display = 'none'; // Or add a CSS class to hide it
    }
}, 3000);
</script>
