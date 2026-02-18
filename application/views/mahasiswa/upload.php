
                                 <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-1 text-gray-800">Form Upload Berkas Magang</h1>
                    

                    <!-- Content Row -->
                    <div class="row">

                        <div class="modal-body mb-3">
                        <?php echo form_open_multipart('Source_in_out/insertberkasmas')?>
                           
                
                            <div class="modal-body modal-content bg-clear">
                                <div class="row pt-3">
                                    <div class="col-xl-8 mx-auto">
                                        <div class="cta-inner bg-faded rounded">  
                                            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                                                <?php foreach ($datapkl as $key => $row) {?>
                                                    <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">Nama Mahasiswa</span>
                                                        <input type="text" class="form-control" id="ValidationCustom1" value="<?php echo $row['NAMA_MHS'];?>" name="nama">
                                                        </input>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">Nim Mahasiswa</span>
                                                        <input type="text" class="form-control" id="ValidationCustom1" value="<?php echo $row['NIP_PEGAWAI'];?>" name="nim">
                                                        </input>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                        <input type="hidden" class="form-control" id="ValidationCustom1" value="<?php echo $row['ID_DATA_PKL'];?>" name="idpkl">
                                                        </input>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                        <input type="hidden" class="form-control" id="ValidationCustom1" value="<?php echo $row['ID_PEGAWAI'];?>" name="idmhs">
                                                        </input>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                    <span class="input-group-text" for="ValidationCustom1">Tujuan Magang</span>
                                                        <input type="text" class="form-control" id="ValidationCustom1" value="<?php echo $row['NAMA_TUJUAN']." ".$row['NAMA_PERUSAHAAN'];?>" name="namaperusahaan">
                                                        </input>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" for="ValidationCustom1">Alamat Perusahaan</span>
                                                        <input type="text" class="form-control" id="ValidationCustom1" value="<?php echo $row['ALAMAT_PERUSAHAAN'];?>" name="almtprsh">
                                                        </input>
                                                    </div>
                                                </li>
                                               <?php }?>
                                               <small>mohon upload berkas dalam bentuk PDF</small>
                                               <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <input type="file" class="form-control" aria-label="berkassurat" aria-describedby="basic-addon1" name="berkasmagang">
                                                    </div>
                                                </li>
                                                <li><div class="modal-footer">
                                                    <button type="submit" class="btn btn-danger" style="text-decoration:none; color:white;"data-bs-dismiss="modal">Upload</a></button>
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

                            











<!--
                            <div class="row">
                                <div class="col-xl-12 mx-auto">
                                        
                                        <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                                            <li class="list-unstyled-item list-hours-item d-flex">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Nama Mhs</span>
                                                    <input type="text" class="form-control" value="<?php echo $value['ID_PEGAWAI'];?>" name="Namamhs">
                                                </div>
                                            </li>
                                            <li class="list-unstyled-item list-hours-item d-flex">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Tujuan Magang</span>
                                                    <input type="textarea" class="form-control" value="<?php echo $value['NAMA_TUJUAN'].', '.$value['NAMA_PERUSAHAAN'];?>" name="tujuan">
                                                    </input>
                                                </div>
                                            </li>
                                            <li class="list-unstyled-item list-hours-item d-flex">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Nomer Berkas</span>
                                                    <input type="text" class="form-control" value="<?php echo $value['ID_DATA_PKL'];?>"  name="nomor_berkas">
                                                    </input>
                                                </div>
                                            </li>
                                            <li class="list-unstyled-item list-hours-item d-flex">
                                                <div class="input-group mb-3">
                                                    <input type="hidden" class="form-control" value="<?php echo $value['ID_PEGAWAI'];?>" name="idmhs">
                                                    </input>
                                                </div>
                                            </li>
                                            
                                            <li class="list-unstyled-item list-hours-item d-flex">
                                                File Upload Maximal 10 Mb, Format PDF
                                            </li>
                                            <li class="list-unstyled-item list-hours-item d-flex">
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" placeholder="LAMPIRAN BERKAS" aria-label="berkassurat" aria-describedby="basic-addon1" name="berkasmagang">
                                                </div>
                                            </li>
                                           
                                        </ul>
                                            
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </form>
                  </div>
                </div>
              </div>
            
       -->    