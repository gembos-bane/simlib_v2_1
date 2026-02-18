
            <!-- data skripsi MHS -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        
        <div class="collapse navbar-collapse active" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <h4>Report Pengajuan Ujian Skripsi</h4>
            </li>
          </ul>
    </div>
</nav>
<div class="card">
    <div class="card-body">
            <table class="table table-bordered table-responsive" id="dataTable" width="100%" cellspacing="0">
            <thead class="alert-warning" style="color:darkblue;">
                <tr class="text-center">
                    <th scope="col-sm-1">N0</th>
                    <th scope="col-sm-3">Nama Mhs</th>
                    <th scope="col-sm-2">NIM</th>
                    <th scope="col-sm-3">JUDUL TA/SKRIPSI</th>
                    <th scope="col-sm-1">Pembimbing 1</th>
                    <th scope="col-sm-1">Pembimbing 2</th>
                    <th scope="col-sm-1">Tgl Pengajuan</th>
                    <th scope="col-sm-1">Report</th>
                </tr>
            </thead>
            <tbody>

                <?php 
                $no = 1;
                foreach ($skripsi as $key => $value) {
                    ?>
                <tr>
                    <td scope="col-sm-1"><?php echo $no++;?></td>
                    <td scope="col-sm-3"><?php echo $value['NAMA_PEGAWAI'];?></td>
                    <td scope="col-sm-2"><?php echo $value['NIP_PEGAWAI']?></td>
                    <td scope="col-sm-3"><?php echo $value['JUDUL'];?></td>
                    <td scope="col-sm-1"><?php echo $value['PEMBIMBING1'];?></td>
                    <td scope="col-sm-1"><?php echo $value['PEMBIMBING2'];?></td>
                    <td scope="col-sm-1"><?php echo $value['DATE_SKRIPSI'];?></td>
                    <td scope="col-sm-1">
                        <?php if($value['RESPONS'] == 0){ ?>
                            <a href="<?php echo site_url('Edit/ssoedit');?>/Proses_edit/<?php echo $value['ID_PEGAWAI'];?>/<?php echo $value['NAMA_PEGAWAI']?>"><button class="btn btn-warning" >proses</button></a>
                            <?php }else{ ?>
                                <a href=""><button type="button" class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#Modal2">Selesai</button> <?php }?>
                        </td>
                </tr>
                <?php };?>
            </tbody>
            </table>
        
    </div>
</div>
<!-- end data skripsi -->