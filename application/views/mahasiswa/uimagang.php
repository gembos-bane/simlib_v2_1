                                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                  <div class="accordion" id="accordionExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Magang Mandiri
                          </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <strong>Magang Mandiri berdasarkan inisiatif sendiri.</strong> </p>
                            Persyaratan Pengajuan Magang Mandiri.
                            <form class="form-group" method="post" action="<?php echo site_url("MHS/bypasmagang")?>">
                            <ul class="list-group">
                              <li class="list-group-item" aria-current="true">1. Minimal SKS yang telah ditempuh 80 SKS dengan dibuktikan dengan KHS yang ada</li>
                              <li class="list-group-item">2. Pelaksanaan Magang berdasarkan inisiatif sendiri dengan bukti penerimaan dari tempat magang</li>
                              <li class="list-group-item">3. Pelaksanaan Magang tidak lebih dari 1 bulan pelaksanaan</li>
                              <li class="list-group-item">4. Magang tidak bisa dikonversikan ke mata kuliah</li>
                              <li class="list-group-item">5. Upload bukti penerimaan resmi dari perusahaan tujuan</li>
                              <li class="list-group-item">6. seluruh bukti dijadikan 1 dalam berkas PDF</li>
                              <li class="list-group-item">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="jenismagang" id="flexRadioDefault1" value="1" required>
                                  <label class="form-check-label" for="flexRadioDefault1">
                                    Magang Mandiri Personal
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="jenismagang" id="flexRadioDefault2" value="2" required>
                                  <label class="form-check-label" for="flexRadioDefault2">
                                    Magang Mandiri Berkelompok
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value=" " id="flexCheckChecked" required>
                                  <label class="form-check-label" for="flexCheckChecked">
                                    Saya menyetujui dan sudah mempersiapkan berkas kelengkapan untuk pengajuan surat pengantar magang mandiri 
                                  </label>
                                </div>
                                <input type="hidden" name="magang" value="1" />
                                <input type="hidden" name="jenis" value="1" />
                                <input type="hidden" name="modemagang" value="1" />
                              </li>
                              
                              <li class="list-group-item"><button type="submit" class="btn btn-info">Ajukan</button></li>
                              </form>
                            </ul>                      
                            </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Magang Wajib 
                          </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <strong>Magang Wajib Kurikulum</strong></p> Persyaratan Pengajuan Magang Majib
                            <form class="form-group" method="post" action="<?php echo site_url("MHS/bypasmagang")?>">
                            <ul class="list-group">
                              <li class="list-group-item" aria-current="true">1. Minimal SKS yang telah ditempuh 80 SKS dengan dibuktikan dengan KHS yang ada</li>
                              <li class="list-group-item">2. Pelaksanaan Magang dilaksanakan pada saat semester 6 dan 8</li>
                              <li class="list-group-item">3. Pelaksanaan Magang selama 3 bulan pelaksanaan</li>
                              <li class="list-group-item">4. Magang berdasarkan kurikulum yang ada</li>
                              <li class="list-group-item">5. Upload KHS terakhir dan KRS </li>
                              <li class="list-group-item">6. seluruh berkas dijadikan 1 dalam bentuk PDF</li>
                              <li class="list-group-item">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="jenismagang" id="flexRadioDefault1" value="1" required>
                                  <label class="form-check-label" for="flexRadioDefault1">
                                    Magang Wajib Personal
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="jenismagang" id="flexRadioDefault2" value="2" required>
                                  <label class="form-check-label" for="flexRadioDefault2">
                                    Magang Wajib Berkelompok
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value=" " id="flexCheckChecked" required>
                                  <label class="form-check-label" for="flexCheckChecked">
                                    Saya menyetujui dan sudah mempersiapkan berkas kelengkapan untuk pengajuan surat pengantar magang Wajib 
                                  </label>
                                </div>
                                <input type="hidden" name="magang" value="2" />
                                <input type="hidden" name="jenis" value="1" />
                                <input type="hidden" name="modemagang" value="2" />
                              </li>
                              <li class="list-group-item"><button type="submit" class="btn btn-info">Ajukan</button></li>
                              </form>
                            </ul>  
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Magang Berdampak
                          </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <strong>Magang Berdampak (rekomendasi Universitas Airlangga.</strong> </p>
                            Persyaratan Pengajuan Magang Berdampak.
                            <ul class="list-group">
                              <li class="list-group-item" aria-current="true">1. Surat Remondasi dari Pihak Universitas</li>
                              <li class="list-group-item">2. Bukti Lolos Kualifikasi magang bedampak</li>
                              <li class="list-group-item">3. Magang bisa dikonversikan ke mata kuliah</li>
                              <li class="list-group-item">6. seluruh bukti dijadikan 1 dalam berkas PDF</li>
                              <form>
                              <li class="list-group-item">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" required>
                                  <label class="form-check-label" for="flexCheckChecked">
                                    Saya menyetujui dan sudah mempersiapkan berkas kelengkapan untuk pengajuan surat pengantar magang mandiri 
                                  </label>
                                </div>
                              </li>
                              <li class="list-group-item"><a href="#"><button type="submit"class="btn btn-info">Ajukan</button></a></li>
                              </form>
                            </ul> 
                          </div>
                        </div>
                      </div>
                    </div>
                  

                    <!-- Content Row -->
                    