<?php foreach($data as $value){?>
<div class="card-header">
    <div class="d-sm-flex align-items-center justify-content-between mb-0">
        <center><h3 class="h3 mb-2 text-gray-800"><p class="text-center">PROSES SKRIPSI  
          <?php echo $value->NAMA_PEGAWAI; ?></p></h3></center>
    </div>                           
</div>
<div class="container-fluid g-3">
  <div class="row p-5">
    <?php $a= 0;for($a>0;count($sso)>$a;$a++){?>
    <div class="col-sm-4" >
      <div class="card text-center shadow-sm p-3 mb-5 bg-body rounded">
        <div class="card-body">
          <h5 class="card-title"><p><strong><?php echo $sso[$a].' '.$value->NAMA_PEGAWAI;?></strong></p></h5>
          <p class="card-text"><?php echo $ket[$a];?></p>
          <a href="#" class="btn btn-primary">Proses</a>
        </div>
      </div>
    </div>
    <?php }}?>
    
  </div>
</div>
