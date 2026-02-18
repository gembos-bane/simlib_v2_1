<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        
        <div class="collapse navbar-collapse active" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
                <?php foreach($periode as $value1){?>
              <h4>Report Pengajuan Yudisium Periode <?php echo $value1->TGL_PERIODE;?></h4>
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
                    <th scope="col-sm-3">Nama Prodi</th>
                    <th scope="col-sm-3">JML PENGUSUL</th>
                    <th scope="col-sm-2">PROSES</th>
                </tr>
            </thead>
            <tbody>

                <?php 
                
                $no = 1;
                
                foreach ($yudidep as $value) {
                    ?>
                <tr>
                    <td scope="col-sm-1"><?php echo $no++;?></td>
                    <td scope="col-sm-4"><?php echo $value->NAMA_PRODI;?></td>
                    <td scope="col-sm-4"><?php echo $value->JUMLAH_DAFTAR; ?></td>
                    <td scope="col-sm-3">
                               <a style="text-decoration:none" href="<?php echo site_url('Backbone/depyudisium')?>/<?php echo $value1->ID_PERIODE?>/<?php echo $value->ID_PRODI;?>/<?php echo $value->NAMA_PRODI;?>/pendaftaran yudisium" ><button class="btn btn-success">Check Data</button>
                                </a>
                                 <a style="text-decoration:none" href="<?php echo site_url('Excel/yudisiumToexcel');?>/<?php echo $value1->ID_PERIODE;?>/<?php echo $value->ID_PRODI;?>/excel/<?php echo $value1->TGL_PERIODE;?>/<?php echo $value1->TAHUN;?>/<?php echo $value1->SEMESTER;?>/<?php echo $value->NAMA_PRODI;?>" target="blank"><button class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                                  <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
                                  <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1"/>
                                </svg> &nbsp;To Excel</button>
                                </a>
                                
                        </td>
                </tr>

                <?php } };?>
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