<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<div class="detailhead"><h2>Product Detail</h2></div>
		</div>
		<?php if(!empty($detail)) {
			//print_r($detail);
			foreach ($detail as $key => $detail_pro) {
				//print_r($c);die();
		?>
		<div class="col-sm-5 col-md-5 col-lg-5">
			<div class="productleft">
				<img src="<?php echo base_url('assets/images/'.$detail_pro->image) ?>" class="proimg" alt="Product Image"/>	
			</div>
		</div>
		<div class="col-sm-7 col-md-7 col-lg-7">
			<div class="pcontent">
				<h3><b>Title</b>:- <?php echo $detail_pro->title; ?></h3>
				<h4><b>Category Title</b>:- <?php echo $detail_pro->category_title;?></h4>
				<p><b>Description</b>:- <?php echo $detail_pro->description;?></p>
				<h4><b>Stock</b>:- <?php echo $detail_pro->stock;?></h4>
				<h5><b>Date</b>:-<?php echo date($detail_pro->added);?></h5>
			</div>
		</div>
		 <?php } }

		 else{
		 	echo '<div class="notfound"> Product not found! </div>';	
		 } ?>
	</div>
</div>