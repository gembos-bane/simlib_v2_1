
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <h3 class="text-bold"><p class="text-decoration">Report Pengajuan Yudisium Prodi <?php echo $nama_prodi;?></p></h3>
        <p><a href="<?php echo site_url('Backbone/outcountdatayudisium')?>" class="text-decoration-none text-danger table-hover"><span><i class="bi bi-arrow-left"></i>&nbsp;<text >Back</text></span></a></p>
    </div>
</nav>


<div class="card">
    <div class="card-body">
        
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead class="table alert-secondary" style="color:darkblue;">
                <tr class="text-center">
                    <th scope="col-sm-1">N0</th>
                    <th scope="col-sm-6">NAMA_MAHASISWA</th>
                    <th scope="col-sm-2">NIM</th>
                    <th scope="col-sm-2">PERIODE</th>
                    <th scope="col-sm-1">STATUS</th>
                </tr>
            </thead>
            <tbody>

                <?php              
                    $no = 1;
                    foreach ($reportYudisium as $key => $value) {
                ?>
                <tr>
                    <td scope="col-sm-1"><?php echo $no++;?></td>
                    <td scope="col-sm-6"><?php echo $value['NAMA_PEGAWAI'];?></td>
                    <td scope="col-sm-2"><?php echo $value['NIP_PEGAWAI'];?></td>
                    <td scope="col-sm-2"><?php echo $value['TGL_PERIODE'];?></td>
                    <td scope="col-sm-1">
                            <?php 
                            if($value['PROSES']==0){?>
                                <a style="text-decoration:none" href="<?php echo site_url('Backbone/yudisium_cekdata')?>/check/<?php echo $value['ID_PEGAWAI']?>/<?php echo $value['PROSES'];?>/<?php echo $value['ID_PRODI'];?>/<?php echo md5($value['ID_PEGAWAI']);?>" target="blank"><button class="btn btn-success">Check Files</button></a>
                            <?php }elseif($value['PROSES'] == 1){?>
                            <button class="btn btn-info" disabled>Berhasil</button><small>
                                <a style="text-decoration:none" href="<?php echo site_url('Backbone/yudisium_cekdata')?>/check/<?php echo $value['ID_PEGAWAI']?>/<?php echo $value['PROSES'];?>/<?php echo $value['ID_PRODI'];?>/<?php echo md5($value['ID_PEGAWAI']);?>" target="blank"><button class="btn btn-success">Check</button></a>
                            <?php }else{?><button class="btn btn-warning" disabled>Update</button>
                            <a style="text-decoration:none" href="<?php echo site_url('Backbone/yudisium_cekdata')?>/check/<?php echo $value['ID_PEGAWAI']?>/<?php echo $value['PROSES'];?>/<?php echo $value['ID_PRODI'];?>/<?php echo md5($value['ID_PEGAWAI']);?>" target="blank"><button class="btn btn-success">Check Files</button></a>
                            <?php }; ?>
                            
                        </td>
                </tr>

                <?php };?>
            </tbody>
            
            </table>
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