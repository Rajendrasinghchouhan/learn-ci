<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<div class="detailhead"><h2>Categories wise Products</h2></div>
		</div>
		<?php if(!empty($cat_product)) {
			//print_r($cat_product);
			foreach ($cat_product as $key => $category_p) {
				//print_r($category_p);die();
		?>
		<div class="col-sm-5 col-md-5 col-lg-5">
			<div class="productleft">
				<img src="<?php echo base_url('assets/images/'.$category_p->image) ?>" class="pimg" alt="Product Image"/>	
			</div>
		</div>
		<div class="col-sm-7 col-md-7 col-lg-7">
			<div class="pcontent">
				<h3><b>Title</b>:- <?php echo $category_p->title; ?></h3>
				<h4><b>Category Title</b>:- <?php echo $category_p->category_title;?></h4>
				<p><b>Description</b>:- <?php echo substr($category_p->description,0,100)."...";?></p>
			</div>
		</div>
		 <?php } }

		 else{
		 	echo '<div class="notfound"> Product not found! </div>';	
		 } 
		 	echo $pagination;
		 ?>
	</div>
</div>