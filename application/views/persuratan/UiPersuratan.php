
<div class="row justify-content-center">
	
  	<div class="row row-cols-2 row-cols-md-4 g-4">
  		<?php foreach ($borang as $key) { ?>
  		<div class="col rounded mx-auto d-block">
    		<a href="<?php echo site_url('Akreditasi/borangakk');?>/<?php echo $key->ID_BORANG;?>/Bukti_borang/<?php echo $key->STANDART; ?>">
    			<div class="card h-100" style="width: 100%; background-color: rgba(0,0,255,.1); ">
      				<div class="card-body alert-info " >
        				<button class="btn" type="button"><?php echo $key->STANDART.' '.$key->NAMA_BORANG;?> (file .doc | pdf)</button>         
      				</div>
    			</div>
    		</a> 
  		</div>
  		<?php } ?>
	</div>

</div>