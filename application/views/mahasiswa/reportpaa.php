<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        
        <div class="collapse navbar-collapse active" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <h4>Report Pengajuan Berkas Magang/PKL Mahasiswa</h4>
            </li>
          </ul>
        
          <ul class="navbar-nav">
            <li class="nav-item">
              <a style='text-decoration: none;' href="<?php echo site_url('API/magangtoexcel').'/'.$idprod;?>" target="blank"><button class="btn btn-light"><i class="fa fa-file-excel-o" aria-hidden="true"> </i>&nbsp;<text class='text text-info'>in Excel</text></button></a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <div class="col-sm-10">
                  <input type="text" name="namamsh" placeholder="Search Nama" id="nama" class="form-control" />
                  <div id="nama_mhs"></div>
              </div>
            </li>
          </ul>
        </div>
    </div>
</nav>

<div class="card">
    <div class="card-body">
        <div class="table table-responsive">
            <table class="table table-responsive" id="dataTable" width="100%" cellspacing="0">
            <thead class="table alert-secondary" style="color:darkblue;">
                <tr class="text-center">
                    <th scope="col-sm-1">N0</th>
                    <th scope="col-sm-3">Nama Mahasiswa</th>
                    <th scope="col-sm-3">Tujuan</th>
                    <th scope="col-sm-3">Alamat</th>
                    <th scope="col-sm-1">TGL_Mulai</th>
                    <th scope="col-sm-1">TGL_Berakhir</th>
                    <th scope="col-sm-1">TGL_Pengajuan</th>
                    <th scope="col-sm-2">Prodi</th>
                    <th scope="col-sm-2">Status</th>
            </thead>
            <tbody>

                <?php 
                
                $no = 1;
                
                foreach ($data as $key => $value) {
                    ?>
                <tr>
                    <td scope="col-sm-1"><?php echo $no++;?></td>
                    <td scope="col-sm-4"><?php echo $value['NAMA_MHS'];?></td>
                    <td scope="col-sm-4"><?php echo $value['NAMA_TUJUAN'].', '.$value['NAMA_PERUSAHAAN'];?></td>
                    <td scope="col-sm-4"><?php echo $value['ALAMAT_PERUSAHAAN'].', '.$value['KOTA'];?></td>
                    <td scope="col-sm-4"><?php echo $value['TGL_MULAI'];?></td>
                    <td scope="col-sm-2"><?php echo $value['TGL_BERAKHIR'];?></td>
                    <td scope="col-sm-2"><?php echo $value['TANGGAL_MHS_INPUT'];?></td>
                    <td scope="col-sm-2"><?php echo $value['NAMA_PRODI'];?></td>
                    <td scope="col-sm-2">
                            <?php 
                            if($value['RESPONS']==0){?>
                                <a style="text-decoration:none" href="<?php echo site_url('MHS/prosespengajuan')?>/<?php echo $value['ID_DATA_PKL']?>/<?php echo preg_replace("/[' , ; ()]/"," ", $value['NAMA_PEGAWAI']);?>/prosespengajuan/<?php echo $value['VALUE_DATA'];?>/<?php echo $value['JENIS_MAGANG'];?>" target="blank"><p class="text text-info text-mute"><button class="btn btn-success btn-sm">Proses</button></p>
                                </a>
                            <?php }
                            if($value['RESPONS'] == 1){?>
                                <a style="text-decoration:none" href="<?php echo site_url('MHS/uploadberkas')?>/<?php echo $value['ID_MHS_PKL']?>/<?php echo $value['NAMA_PEGAWAI'];?>/prosespengajuan/<?php echo $value['VALUE_DATA'];?>/<?php echo $value['JENIS_MAGANG'];?>">
                                <p class="text text-info text-mute"><button class="btn btn-danger btn-sm">Upload</button></p></a>
                                <a style="text-decoration:none" href="<?php echo site_url('MHS/prosespengajuan')?>/<?php echo $value['ID_DATA_PKL']?>/<?php echo $value['NAMA_PEGAWAI'];?>/prosespengajuan/<?php echo $value['VALUE_DATA'];?>/<?php echo $value['JENIS_MAGANG'];?>" target="blank"><p class="text text-info text-mute"><button class="btn btn-success btn-sm">Print</button></p>
                                </a>
                                <?php }
                            if($value['RESPONS'] == 2){?><p class="alert alert-info alert-sm">Selesai</p><?php }
                                if($value['RESPONS'] == 3){?><p class="alert alert-warning alert-sm">Ditolak</p> <?php }
                                    if($value['RESPONS'] == 4){?><a style="text-decoration:none" href="<?php echo site_url('MHS/prosespengajuan')?>/<?php echo $value['ID_DATA_PKL']?>/<?php echo $value['NAMA_PEGAWAI'];?>/prosespengajuan/<?php echo $value['VALUE_DATA'];?>/<?php echo $value['JENIS_MAGANG'];?>" target="blank"><p class="alert alert-info alert-sm">Dibatasi</p> </a><?php }
                                    ?>
                            
                        </td>
                </tr>

                <?php };?>
            </tbody>
            
            </table>

        </div>
    </div>
    <p><?php echo $link; ?></p>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function(){
        $('#namamhs').keyup(function(){
            var query = $(this).val();
            if(query!=' '){
                $.ajax({
                    url:"<?php echo site_url('MHS/search'); ?>",
                    method:"POST",
                    data:{query:query},
                    success:function(data){
                        $('#nama_mhs').fadein();
                        $('#nama_mhs').html(data);
                    }
                });
            }
            $(document).on('click','li',function(){
                $('#namamhs').val($(this).text());
                $('nama_mhs').fadeout();
            })
        });
    })
</script>