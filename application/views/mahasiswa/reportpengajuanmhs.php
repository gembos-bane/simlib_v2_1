
<script>
  window.onload = function() {
    alert("Mohon untuk lebih teliti dalam hal check bukti tiap tiap pengajuan magang atau pkl.");
  };
</script>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        
        <div class="collapse navbar-collapse active" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <h4>Report Pengajuan Berkas Magang/PKL</h4>
            </li>
            
          </ul>
          
        </div>
    </div>
        
</nav>
   <div class="col">
        <div class="content">
            <div class="table">
                <table class="table table-bordered">
                <thead class="table alert-info" style="color:darkblue;">
                    <tr class="text-center">
                        <th scope="col-sm-1">N0</th>
                        <th scope="col-sm-1">Nama MHS</th>
                        <th scope="col-sm-3">Tujuan</th>
                        <th scope="col-sm-3">Alamat</th>
                        <th scope="col-sm-1">TGL_Mulai</th>
                        <th scope="col-sm-1">TGL_Berakhir</th>
                        <th scope="col-sm-1">Prodi</th>
                        <th scope="col-sm-2">Status</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                    $no = 1;
                    foreach ($report as $key => $value) {
                        ?>
                    <tr>
                        <td scope="col-sm-1"><?php echo $no++;?></td>
                        <td scope="col-sm-3"><?php echo $value['NAMA_MHS'];?></td>
                        <td scope="col-sm-3"><?php echo $value['NAMA_TUJUAN'].', '.$value['NAMA_PERUSAHAAN'];?></td>
                        <td scope="col-sm-3"><?php echo $value['ALAMAT_PERUSAHAAN'].', '.$value['KOTA'];?></td>
                        <td scope="col-sm-1"><?php echo $value['TGL_MULAI'];?></td>
                        <td scope="col-sm-1"><?php echo $value['TGL_BERAKHIR'];?></td>
                        <td scope="col-sm-1"><?php echo $value['NAMA_PRODI'];?></td>
                        <td scope="col-sm-2">
                        <?php if($level==1){?>
                            <a href="<?php echo site_url('MHS/prosespengajuan')?>/<?php echo $value['ID_DATA_PKL']?>/<?php echo preg_replace('/[^A-Za-z0-9]/','',$value['NAMA_PEGAWAI']) ;?>/prosespengajuan/<?php echo $value['VALUE_DATA'];?>/<?php echo $value['JENIS_MAGANG'];?>" target="blank"><button class="btn btn-success" >Sucsess</button></a>
                        <?php }else{?>
                            <a style="text-decoration:none" href="<?php echo site_url('MHS/prosespengajuan')?>/<?php echo $value['ID_DATA_PKL']?>/<?php echo preg_replace('/[^A-Za-z0-9]/','',$value['NAMA_PEGAWAI']) ;?>/prosespengajuan/<?php echo $value['VALUE_DATA'];?>/<?php echo $value['JENIS_MAGANG'];?>"><p class="text text-info text-mute"><small><button class="btn btn-info">Proses</button></small></p>
                            </a>
                            <a style="text-decoration:none" href="<?php echo site_url('MHS/deletdatapkl')?>/<?php echo $value['ID_DATA_PKL']?>/<?php echo preg_replace('/[^A-Za-z0-9]/','',$value['NAMA_PEGAWAI']) ;?>/prosespengajuan/<?php echo $value['VALUE_DATA'];?>/<?php echo $value['JENIS_MAGANG'];?>"><p class="text text-danger text-mute"><button onclick="myFunction()" class="btn btn-danger">Delete</button></p>
                            </a> 
                        <?php } ?>
                            </td>
                    </tr>
                    <?php };?>

                </tbody>
                </table>
            </div>
        <?php echo $links;?>
        </div>
    </div>


<script type="text/javascript">
    function myFunction(){
        
            alert('Anda yakin akan menghapus data ini?');
        
    }
</script>
