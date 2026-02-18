
<div class="container-fluid row">
  <?php foreach($periode as $data1){?>
  <div class="header"><p class="header"><h2>YUDISIUM PERIODE <?php echo $data1->TGL_PERIODE;?></h2> </p></div>
<?php 
 foreach($prod as $data){?>
  <div class="col">
      <div class="mb-3 text-center p-1">
          <div class="card p-1" style="width: 25rem; border-radius: 15px;">
            <div class="card-body">
              <h5 class="card-title">Prodi <?php echo $data->NAMA_PRODI;?></h5>
              <a href="<?php echo site_url('Backbone/depyudisium')?>/<?php echo $data1->ID_PERIODE?>/<?php echo $data->ID_PRODI;?>/pendaftaran yudisium" class="btn btn-primary">Check</a>
            </div>
          </div>
      </div>
  </div>
<?php }  }?>
    
</div>
