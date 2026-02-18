<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        
        <div class="collapse navbar-collapse active" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <h4>Report Pengajuan Pengambilan Data</h4>
            </li>
          </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="container container-fluid">
        <div class="table">
            <table class="table table-bordered table-responsive">
            <thead class="table alert-dark">
                <tr class="text-center">
                    <th scope="col-sm-1">N0</th>
                    <th scope="col-sm-3">Nama Mhs</th>
                    <th scope="col-sm-3">Tujuan</th>
                    <th scope="col-sm-3">Alamat</th>
                    <th scope="col-sm-2">Prodi</th>
                    <th scope="col-sm-1">Status</th>
                </tr>
            </thead>
            <tbody>

                <?php 
                $no = 1;
                foreach ($report as $key => $value) {
                    ?>
                <tr>
                    <td scope="col-sm-1"><?php echo $no++;?></td>
                    <td scope="col-sm-3"><?php echo $value['NAMA_PEGAWAI'];?></td>
                    <td scope="col-sm-3"><?php echo $value['NAMA_TUJUAN'].', '.$value['NAMA_PERUSAHAAN'];?></td>
                    <td scope="col-sm-3"><?php echo $value['ALAMAT_PERUSAHAAN'].', '.$value['KOTA'];?></td>
                    <td scope="col-sm-2"><?php echo $value['NAMA_PRODI'];?></td>
                    <td scope="col-sm-1">
                        <?php if($value['STATUS_PROSES'] == 1){?> 
                        <small><a href="<?php echo site_url('MHS/prosespengajuanambildata')?>/<?php echo $value['ID_AMBIL_DATA']?>/<?php echo $value['ID_PEGAWAI'];?>/<?php echo $value['STATUS_PROSES'];?>/<?php echo hash('sha256',$_SESSION['user'])?>" >
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disabled popover"><button class="btn btn-success" type="button" disabled>sucsess</button>
                            </span></a></small>
                    <?php }else{?>
                        <a style="text-decoration:none" href="<?php echo site_url('MHS/prosespengajuanambildata')?>/<?php echo $value['ID_AMBIL_DATA']?>/<?php echo $value['ID_PEGAWAI'];?>/<?php echo $value['STATUS_PROSES'];?>/<?php echo hash('sha256',$_SESSION['user'])?>" target="blank"><button class="btn btn-warning" >Proses</button></a>
                    <?php } ?>
                        </td>
                </tr>
                <?php };?>
            </tbody>
            </table>
        </div>
    </div>
</div>
