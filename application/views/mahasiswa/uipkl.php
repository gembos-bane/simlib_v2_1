                                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                  <div class="accordion" id="accordionExample">
                      
                      <div class="accordion-item">
                        <h2 class="accordion-header alert-info" id="headingTwo" >
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" >
                            PKL Wajib 
                          </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <strong>PKL Wajib Kurikulum</strong></p> Persyaratan Pengajuan PKL Majib
                            <form class="form-group" method="post" action="<?php echo site_url("MHS/bypasmagang")?>">
                            <ul class="list-group">
                              <li class="list-group-item" aria-current="true">1. Minimal SKS yang telah ditempuh 80 SKS dengan dibuktikan dengan KHS yang ada</li>
                              <li class="list-group-item">2. Pelaksanaan PKL dilaksanakan pada saat semester 5 atau 7</li>
                              <li class="list-group-item">3. Pelaksanaan PKL selama 1 bulan pelaksanaan</li>
                              <li class="list-group-item">4. PKL berdasarkan kurikulum yang ada</li>
                              <li class="list-group-item">5. Upload KHS terakhir dan KRS </li>
                              <li class="list-group-item">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="jenismagang" id="flexRadioDefault1" value="1" required>
                                  <label class="form-check-label" for="flexRadioDefault1">
                                    PKL Wajib Personal
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="jenismagang" id="flexRadioDefault2" value="2" required>
                                  <label class="form-check-label" for="flexRadioDefault2">
                                    PKL Wajib Berkelompok
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value=" " id="flexCheckChecked" required>
                                  <label class="form-check-label" for="flexCheckChecked">
                                    Saya menyetujui dan sudah mempersiapkan berkas kelengkapan untuk pengajuan surat pengantar PKL Wajib 
                                  </label>
                                </div>
                                <input type="hidden" name="PKL" value="2" />
                                <input type="hidden" name="jenis" value="1" />
                                <input type="hidden" name="modePKL" value="2" />
                              </li>
                              <li class="list-group-item"><button type="submit" class="btn btn-info">Ajukan</button></li>
                              </form>
                            </ul>  
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  

                    <!-- Content Row -->
                    