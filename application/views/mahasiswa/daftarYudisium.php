                                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <?php foreach($periode as $rows){?>
                    <h1 class="h3 mb-1 text-gray-800">Form Pengajuan Yudisium Periode <?php echo $rows->TGL_PERIODE;?></h1><small>Pendaftaran closed Tanggal <?php echo $rows->CLOSE_PERIODE;?></small>
                    <?php };?>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="modal-body mb-3">
                            
                       <?php echo form_open_multipart('MHS/yudisiumInsert')?>             
                
                            <div class="modal-body modal-content bg-clear">
                                <div class="row pt-3">
                                    <div class="col-xl-8 mx-auto">
                                        <div class="cta-inner bg-faded rounded">
                                            
                                            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                                                <?php foreach($user as $row){?>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">Nama Mahasiswa</span>
                                                        <input type="text" class="form-control" id="ValidationCustom1" value="<?php echo $row['NAMA_PEGAWAI']; ?>" name="nama">
                                                        </input>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">Nim Mahasiswa</span>
                                                        <input type="text" class="form-control" id="ValidationCustom1" value="<?php echo $row['NIP_PEGAWAI']; ?>" name="nim">
                                                        </input>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                        <input type="hidden" class="form-control" id="ValidationCustom1" value="<?php echo $row['ID_PEGAWAI']; ?>" name="idmhs">
                                                        </input>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <input type="hidden" class="form-control" id="ValidationCustom1" value="<?php echo $row['ID_PRODI']; ?>" name="idprodi">
                                                    <?php }?>
                                                        </input>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">PERIODE</span>
                                                        <select class="form-control"  name="periode">
                                                          <?php foreach($periode as $row){ ?>         
                                                            <option name="periode" value="<?php echo $row->ID_PERIODE; ?>"><?php echo $row->TGL_PERIODE;?></option>
                                                            <?php }; ?>
                                                        </select>
                                                    </div>
                                                   
                                                </li>
                                                

                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">NIK</span>
                                                        <input type="text" class="form-control" id="ValidationCustom1"  name="nik" required>
                                                        </input>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">Tempat Lahir</span>
                                                        <input type="text" class="form-control" id="ValidationCustom1"  name="tempat" required>
                                                        </input>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">Tanggal Lahir</span>
                                                        <input type="date" class="form-control" id="ValidationCustom1" name="tanggal" required>
                                                        </input>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">No HP</span>
                                                        <input type="text" class="form-control" id="ValidationCustom1" name="nohp" required>
                                                        </input>
                                                    </div>
                                                </li>

                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">Total SKS</span>
                                                        <input type="text" class="form-control" id="ValidationCustom1" name="sks" required>
                                                        </input>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">IPK</span>
                                                        <input type="text" class="form-control" id="ValidationCustom1" name="ipk" required>
                                                        </input>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">Max NIlai D%</span>
                                                        <input type="text" class="form-control" id="ValidationCustom1" name="nilai" required>
                                                        </input>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">TOEFL</span>
                                                        <input type="text" class="form-control" id="ValidationCustom1" name="toefl" required>
                                                        </input>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">SKP</span>
                                                        <input type="text" class="form-control" id="ValidationCustom1" name="SKP" required>
                                                        </input>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                        <text class="text text-danger"><p><small>Upload Semua Berkas dalam bentuk PDF maximal 10Mb</small></p></text>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">BUKTI</span>
                                                        <input type="file" class="form-control"  name="berkas" required><small>&nbsp;  * Upload Seluruh Berkas disini .pdf</small>
                                                        </input>
                                                    </div>
                                                </li>
                                                <li><div class="modal-footer">
                                                    <button type="submit" class="btn btn-success" style="text-decoration:none; color:white;" ata-bs-dismiss="modal">Proses</a></button>
                                                  </div>
                                                </li>
                                                
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                      </div>

                    </div>

                </div>
                <!-- /.container-fluid -->


            </div>
            
            
            <!-- End of Main Content -->
           
           <script>
               var loader = (function(window, $loadingScreen) {

                    var elapsed = false;
                    var loaded = false;

                    setTimeout(function() {
                        elapsed = true;
                        if (loaded)
                            hideLoadingScreen();
                    }, 5000);

                    var hideLoadingScreen = function() {
                        //do whatever
                    }

                    $(window).on('load', function() {
                        if (elapsed) {
                            hideLoadingScreen();
                        }
                    });
                }(window, $('#loader'))
           </script>