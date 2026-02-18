        <div class="container-fluid">     
        <div class="row p-2 m-2">
            <div class="col-sm-3">
              <figure>
              <?php foreach($outyudisium as $row){?>
              <blockquote class="blockquote">
                <p>Berikut data Mahasiswa yang mengajukan Yudisium</p>
              </blockquote>
              <figcaption class="blockquote-footer">
                Gelombang <cite title="Source Title">ke <?php echo $row['GELOMBANG']; ?> tanggal : <?php echo $row['TGL_PERIODE'];?> </cite>
              </figcaption>
            </figure>
                                                        
            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                
                    <figure>
                      <blockquote class="blockquote">
                        <p><?php echo $row['NAMA_PEGAWAI']; ?></p>
                      </blockquote>
                      <figcaption class="blockquote-footer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-standing" viewBox="0 0 16 16">
                          <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M6 6.75v8.5a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2.75a.75.75 0 0 0 1.5 0v-2.5a.25.25 0 0 1 .5 0"/>
                        </svg>
                        <cite title="Source Title">Nama Mahasiswa</cite>
                      </figcaption>
                    </figure>
                    <figure>
                      <blockquote class="blockquote">
                        <p><?php echo $row['NIP_PEGAWAI']?></p>
                      </blockquote>
                      <figcaption class="blockquote-footer"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bricks" viewBox="0 0 16 16">
                      <path d="M0 .5A.5.5 0 0 1 .5 0h15a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5H2v-2H.5a.5.5 0 0 1-.5-.5v-3A.5.5 0 0 1 .5 6H2V4H.5a.5.5 0 0 1-.5-.5zM3 4v2h4.5V4zm5.5 0v2H13V4zM3 10v2h4.5v-2zm5.5 0v2H13v-2zM1 1v2h3.5V1zm4.5 0v2h5V1zm6 0v2H15V1zM1 7v2h3.5V7zm4.5 0v2h5V7zm6 0v2H15V7zM1 13v2h3.5v-2zm4.5 0v2h5v-2zm6 0v2H15v-2z"/>
                    </svg>
                        Nim <cite title="Source Title">Mahasiswa</cite>
                      </figcaption>
                    </figure>
                    <figure>
                      <blockquote class="blockquote">
                        <p><?php echo $row['NO_HP']?></p>
                      </blockquote>
                      <figcaption class="blockquote-footer">
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                        </svg> 
                        Nomor  <cite title="Source Title">Telp / HP</cite>
                      </figcaption>
                    </figure>
                    <figure>
                      <blockquote class="blockquote">
                        <p><?php echo $row['TEMPAT_LAHIR']?></p>
                      </blockquote>
                      <figcaption class="blockquote-footer">
                        Tempat <cite title="Source Title">Lahir</cite>
                      </figcaption>
                    </figure>
                    <figure>
                      <blockquote class="blockquote">
                        <p><?php echo $row['NIK']?></p>
                      </blockquote>
                      <figcaption class="blockquote-footer">
                        Nomor <cite title="Source Title">Induk Kependudukan</cite>
                      </figcaption>
                    </figure>
                    <figure>
                      <blockquote class="blockquote">
                        <p><?php echo $row['TANGGAL_LAHIR']?></p>
                      </blockquote>
                      <figcaption class="blockquote-footer">
                        Tanggal <cite title="Source Title">Kelahiran</cite>
                      </figcaption>
                    </figure>
                    <figure>
                      <blockquote class="blockquote">
                        <p><?php echo $row['SKS']?></p>
                      </blockquote>
                      <figcaption class="blockquote-footer">
                        Total <cite title="Source Title">SKS TERAMBIL</cite>
                      </figcaption>
                    </figure>
                    <figure>
                      <blockquote class="blockquote">
                        <p><?php echo $row['IPK']?></p>
                      </blockquote>
                      <figcaption class="blockquote-footer">
                        IPK <cite title="Source Title">Yang Diperoleh</cite>
                      </figcaption>
                    </figure>
                    <figure>
                      <blockquote class="blockquote">
                        <p><?php echo $row['NILAI_D']?></p>
                      </blockquote>
                      <figcaption class="blockquote-footer">
                        Maksimal <cite title="Source Title">Nilai D%</cite>
                      </figcaption>
                    </figure>
                    <figure>
                      <blockquote class="blockquote">
                        <p><?php echo $row['TOEFL']?></p>
                      </blockquote>
                      <figcaption class="blockquote-footer">
                        Nilai <cite title="Source Title">Toefl</cite>
                      </figcaption>
                    </figure>
                    <figure>
                      <blockquote class="blockquote">
                        <p><?php echo $row['SKP']?></p>
                      </blockquote>
                      <figcaption class="blockquote-footer">
                        Nilai <cite title="Source Title">SKP</cite>
                      </figcaption>
                    </figure>      
                
                <li>
                    <div class="modal-footer">                                                	
                        <button type="button" class="btn btn-success" style="text-decoration:none; color:white;" ata-bs-dismiss="modal" onclick="window.open('<?php echo site_url('Backbone/yudisiumcheck')?>/check/<?php echo $row['ID_PEGAWAI']?>/1/<?php echo md5($row['ID_PEGAWAI']);?>')">SETUJUI</button>                                                 
                        <button type="button" class="btn btn-warning" style="text-decoration:none; color:white;" ata-bs-dismiss="modal"  data-bs-toggle="modal" data-bs-target="#modalcheck">KOREKSI</button>
                       <button type="button" class="btn btn-danger" style="text-decoration:none; color:white;" onclick="window.open('', '_self', ''); window.close();">Back</button>
                    </div>
                </li>
               
            </ul>
                    <div class="modal fade" id="modalcheck" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">KOREKSI DATA</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <?php echo form_open_multipart('Backbone/yudisiumrepair')?>  
                          <div class="modal-body">
                            <div class="row justify-content-center">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" for="ValidationCustom1">NAMA MAHASISWA</span>
                                    <input type="text" class="form-control" id="ValidationCustom1" value="<?php echo $row['NAMA_PEGAWAI']?>" name="nama">
                                    </input>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" for="ValidationCustom1">NIM MAHASISWA</span>
                                    <input type="text" class="form-control" id="ValidationCustom1" value="<?php echo $row['NIP_PEGAWAI']?>" name="nama">
                                    </input>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" for="ValidationCustom1">Pesan</span>
                                    <input type="text" class="form-control" id="ValidationCustom1"  name="pesan" required>
                                    </input>
                                </div>
                                <input type="hidden" class="form-control" id="ValidationCustom1"  name="idmhs" value="<?php echo $row['ID_PEGAWAI']?>">
                                    </input>
                                <input type="hidden" class="form-control" id="ValidationCustom1"  name="idbukti" value="<?php echo $row['ID_BUKTI_YUDISIUM']?>">
                                    </input>
                                <input type="hidden" class="form-control" id="ValidationCustom1"  name="respon" value="3">
                                    </input>
                            </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">KOREKSI</button>
                          </div>
                      <?php }?>
                        </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-sm-9">
                  <embed src="<?php echo $url;?>" type="application/<?php echo $file;?>" width="100%" height="100%" />
                </div>
             </div>
            </div>
