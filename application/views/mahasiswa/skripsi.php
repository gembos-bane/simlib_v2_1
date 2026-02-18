                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-1 text-gray-800">Form Pendaftaran Skripsi</h1>
                    

                    <!-- Content Row -->
                    <div class="row">

                        <div class="modal-body mb-3">
                        <?php echo form_open_multipart('MHS/insertskripsi')?> 
                
                            <div class="modal-body modal-content bg-clear">
                                <div class="row pt-3">
                                    <div class="col-xl-8 mx-auto">
                                        <div class="cta-inner bg-faded rounded">
                                            
                                            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                                                <?php foreach($user as $row){?>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">Nama Mahasiswa</span>
                                                        <input type="text" class="form-control" id="ValidationCustom1" value="<?php echo $row['NAMA_PEGAWAI']; ?>" name="nama ">
                                                        </input>
                                                        <input type="hidden" class="form-control" id="ValidationCustom1" value="<?php echo $row['ID_PRODI']; ?>" name="idprodi">
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
                                                        <span class="input-group-text" for="ValidationCustom1">Judul TA/Skripsi</span>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="judul">
                                                        </textarea>
                                                    </div>
                                                </li>
                                                
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">Pembimbing 1</span>
                                                        <select class="form-control"  name="pembimbing1">
                                                          <?php foreach($dosen as $row){ ?>         
                                                            <option value="<?php echo $row['NAMA_DOSEN']; ?>"><?php echo $row['NAMA_DOSEN'];?></option>
                                                            <?php }; ?>
                                                        </select>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" >Pembimbing 2</span>
                                                        <select class="form-control"  name="pembimbing2">
                                                          <?php foreach($dosen as $row){ ?>         
                                                            <option value="<?php echo $row['NAMA_DOSEN']; ?>"><?php echo $row['NAMA_DOSEN'];?></option>
                                                            <?php }; ?>
                                                        </select>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" >Bidang MK</span>
                                                        <input type="text" class="form-control" id="ValidationCustom1" placeholder="Mata Kuliah Acuan" name="MK">
                                                        </input>
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

           