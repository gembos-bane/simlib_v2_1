<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        
        <div class="collapse navbar-collapse active" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
                <?php foreach($dep as $set){?>
              <h4>Report Pengajuan Yudisium <?php echo $set->NAMA_DEPARTEMEN;?> </h4>
          <?php } ?>
            </li>
          </ul>
        </div>
    </div>
</nav>

<div class="card">
    <div class="card-body">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead class="table alert-secondary" style="color:darkblue;">
                <tr class="text text-center">
                    <th scope="col-sm-1">N0</th>
                    <th scope="col-sm-3">Periode</th>
                    <th scope="col-sm-3">SEMESTER</th>
                    <th scope="col-sm-2">GELOMBANG</th>
                    <th scope="col-sm-1">Jumlah Pendaftar</th>
                    <th scope="col-sm-2">PROSES</th>
                </tr>
            </thead>
            <tbody>

                <?php 
                
                $no = 1;
                
                foreach ($periode as $key => $value) {
                    ?>
                <tr>
                    <td scope="col-sm-1"><?php echo $no++;?></td>
                    <td scope="col-sm-4"><?php echo $value['TGL_PERIODE'];?></td>
                    <td scope="col-sm-4"><?php echo $value['SEMESTER'];?></td>
                    <td scope="col-sm-4"><?php echo $value['GELOMBANG'].' -  '.'('.$value['TAHUN'].')';?></td>
                    <td scope="col-sm-4"><a style="text-decoration:none; color:black;" href="<?php echo site_url('Backbone/yudisiumreport');?>/proses/<?php echo $value['ID_PERIODE']?>"><?php echo $value['SUM_MEMBER'];?> - Mahasiswa</a></td>
                    <td scope="col-sm-3">
                                <a style="text-decoration:none" href="<?php echo site_url('Backbone/uiyudisium');?>/proses/<?php echo $value['ID_PERIODE']?>/2/"><button class="btn btn-success">Check Data</button>
                                </a>
                               
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