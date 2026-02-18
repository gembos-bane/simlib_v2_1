<script>
        window.addEventListener('load', function() {
            // Display an alert after 3 seconds (3000 milliseconds)
            setTimeout(function() {
                alert("Sebelum Melanjutkan Pengajuan Mohon Check dahulu Nim Anda, Untuk Check Silahkan cLick ProfilMhs di TopBar");
            }, 1000);
        });
    </script>
                                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
                    <h1 class="h3 mb-1 text-gray-800 text-bold">UPDATE DATA PENGAJUAN YUDISIUM</h1>
                    

                    <!-- Content Row -->
                    <div class="row">

                        <div class="modal-body mb-3">
                            
                       <?php echo form_open_multipart('MHS/yudisiumupdate')?>             
                
                            <div class="modal-body modal-content bg-clear">
                                <div class="row pt-3">
                                    <div class="col-xl-8 mx-auto">
                                        <div class="cta-inner bg-faded rounded">
                                            
                                            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                                                <?php foreach($upyudipjk as $row){?>
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
                                                        <input type="hidden" class="form-control" id="ValidationCustom1" value="<?php echo $row['ID_DAFTAR_YUDISIUM']; ?>" name="idyudi">
                                                        </input>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">No HP</span>
                                                        <input type="text" class="form-control" id="ValidationCustom1" name="nohp" value="<?php echo $row['NO_TLP']; ?>">
                                                        </input>
                                                    </div>
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
                                                                 
                                                            <option name="periode" value="<?php echo $row['ID_PERIODE']; ?>"><?php echo $row['TGL_PERIODE'];?></option>
                                                           
                                                        </select>
                                                    </div>
                                                   
                                                </li>
                                                

                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">NIK</span>
                                                        <input type="text" class="form-control" id="ValidationCustom1"  name="nik" value="<?php echo $row['NIK']; ?>">
                                                        </input>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">Tempat Lahir</span>
                                                        <input type="text" class="form-control" id="ValidationCustom1"  name="tempat" value="<?php echo $row['TEMPAT_LAHIR']; ?>">
                                                        </input>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">Tanggal Lahir</span>
                                                        <input type="date" class="form-control" id="ValidationCustom1" name="tanggal" value="<?php echo $row['TANGGAL_LAHIR']; ?>">
                                                        </input>
                                                    </div>
                                                </li>
                                                

                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">Total SKS</span>
                                                        <input type="text" class="form-control" id="ValidationCustom1" name="sks" value="<?php echo $row['SKS']; ?>">
                                                        </input>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">IPK</span>
                                                        <input type="text" class="form-control" id="ValidationCustom1" name="ipk" value="<?php echo $row['IPK']; ?>">
                                                        </input>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">Max NIlai D%</span>
                                                        <input type="text" class="form-control" id="ValidationCustom1" name="nilai" value="<?php echo $row['NILAI_D']; ?>">
                                                        </input>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">TOEFL</span>
                                                        <input type="text" class="form-control" id="ValidationCustom1" name="toefl" value="<?php echo $row['TOEFL']; ?>">
                                                        </input>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">SKP</span>
                                                        <input type="text" class="form-control" id="ValidationCustom1" name="skp" value="<?php echo $row['SKP']; ?>">
                                                        </input>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                        <text class="text text-danger"><p><small>Mata Kuliah Prasyarat Minimal Nilai C</small></p></text>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">KUP</span>
                                                        <input type="text" class="form-control" id="ValidationCustom1" name="KUP" value="<?php echo $row['SYARAT_KUP']; ?>">
                                                        </input>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">POTPUT PPh</span>
                                                        <input type="text" class="form-control" id="ValidationCustom1" name="poptut" value="<?php echo $row['SYARAT_POTPUTPPH']; ?>">
                                                        </input>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">PAJAK PENGHASILAN</span>
                                                        <input type="text" class="form-control" id="ValidationCustom1" name="PPh" value="<?php echo $row['SYARAT_PPH']; ?>">
                                                        </input>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">PPn dan PPNBM Bea Materai</span>
                                                        <input type="text" class="form-control" id="ValidationCustom1" name="PPNBM" value="<?php echo $row['SYARAT_PPNBM']; ?>">
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

           