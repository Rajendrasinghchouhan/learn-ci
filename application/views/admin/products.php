<section class="content">
	<?php 
		if($this->session->flashdata('success')) {
			echo '<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" aria-label="close" data-dismiss="alert">&times;</button>
		  			<strong>Success!</strong> '.$this->session->flashdata("success").'
				</div>';
		}
	?>
	<div class="row">
		<div class="col-sm-6 col-md-6 col-lg-6">
			<div class="heading"><h2>Product List<?php //echo $page_title ?></h2></div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-6">
			<div class="form-group productright">
				<form method="GET">
					<div class="searchmain">	
						<input type="text" name="search" class="form-control searchtext" placeholder="Enter title of category and products" value="<?php echo isset($_GET['search']) ? $_GET['search'] : '';?>" >
						<input type="submit" value="Search" class="btn btn-primary searchbtn">
						<div class="btn btn-success"><a href="<?php echo base_url('admin/products/form');?>" class="readmore"><i class="fas fa-car"></i> Add</a></div>
					</div>
				</form>
			</div>
		</div>
		<?php
		//echo $pagination;
			if(!empty($pro_data)) {
				//print_r($pro_data);
				foreach($pro_data as $key=>$p_Data) {
					//print_r($p_Data);die();
		?>
		<div class="col-sm-6 col-md-6 col-lg-6">
			<div class="productleft">
				<?php if(!empty($p_Data->image)) { ?>
					<img src="<?php echo base_url('assets/images/product_image/'.$p_Data->image) ?>" class="pimg" alt="Product Image"/>
				<?php } else{?>
					<img src="<?php echo base_url('assets/images/no-image.png')?>" class="pimg" alt="Product Image"/>
				<?php } ?>	
			</div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-6">
			<div class="pcontent">
				<h3><b>Title</b>:- <?php echo $p_Data->title; ?></h3> 

				<h4><b>Category Title</b>:- <a href="<?php echo base_url('admin/products/categoryproduct/'.$p_Data->category_id);?>" class="readmore"><?php echo $p_Data->category_title;?></a></h4>
				<p><b>Description</b>:- <?php echo substr($p_Data->description,0,100)."...";?></p>
				<a href="<?php echo base_url('admin/products/productdetail/'.$p_Data->id);?>" class="readmore">Read More <i class="fa fa-arrow-circle-right"></i></a><br/>
				<div class="btn btn-warning"><a href="<?php echo base_url('admin/products/form/'.$p_Data->id);?>"class="readmore">Edit</a></div>
				<a href="<?php echo base_url('admin/products/delete/'.$p_Data->id);?>" class="readmore"><span class="del">Delete</span></a>
			</div>
		</div>
		<div class="clearfix"></div>
		<?php } 
		} else {
			echo 'No records found!';
		} 
		 
		echo $pagination;

	 ?>
	</div>
</section>