                                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-1 text-gray-800">Form Permohonan Pengambilan Data</h1>
                    

                    <!-- Content Row -->
                    <div class="row">

                        <div class="modal-body mb-3">
                        <?php echo form_open_multipart('MHS/insertpengambilandata')?>
                           
                
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
                                                    <div class="input-group mb-3">
                                                        <input type="hidden" class="form-control" id="ValidationCustom1" value="<?php echo $row['ID_PEGAWAI']; ?>" name="idmhs">
                                                        </input>
                                                    </div>
                                                </li>
                                                <?php }?>

                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">Tujuan</span>
                                                        <select class="form-control"  name="tujuan">
                                                          <?php foreach($tujuan as $row){ ?>         
                                                            <option value="<?php echo $row->ID_TUJUAN; ?>"><?php echo $row->NAMA_TUJUAN;?></option>
                                                            <?php }; ?>
                                                        </select>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">Nama Perusahaan</span>
                                                        <input type="text" class="form-control" id="ValidationCustom1" placeholder="Nama Perusahaan / Dinas / Intansi " name="perusahaan">
                                                        </input>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">Alamat Perusahaan</span>
                                                        <input type="text" class="form-control" id="ValidationCustom1" placeholder="Alamat Perusahaan / Dinas / Intansi" name="almtprsh">
                                                        </input>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">Provinsi</span>
                                                        <input type="text" class="form-control" id="ValidationCustom1" placeholder="Provinsi Tempat Perusahaan / Dinas / Intansi" name="kota">
                                                        </input>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">Departemen</span>
                                                        <select class="form-control"  name="departemen">
                                                          <?php foreach($departemen as $row){ ?>     
                                                            <option value="<?php echo $row->ID_DEPARTEMEN; ?>"><?php echo $row->NAMA_DEPARTEMEN;?></option>
                                                            <?php }; ?>
                                                        </select>
                                                    </div>
                                                </li>
                                                <li><div class="modal-footer">
                                                    <button type="submit" class="btn btn-success" style="text-decoration:none; color:white;"data-bs-dismiss="modal">PROSES</a></button>
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

           