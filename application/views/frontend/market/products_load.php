<?php if (isset($products) && !empty($products)): ?>
	<?php foreach ($products as $one): ?>
		<div class=" col-xl-4 col-lg-4 col-md-6 col-xs-12 col-grid-box">
			<?php $this->load->view("frontend/market/product_companant",["one"=>$one]);?>
		</div>
	<?php endforeach ?>
<?php else: ?>
           <img src="<?=base_url().FAVICONPATH."nodata.png"?>" width="100%" >
<?php endif ?>
