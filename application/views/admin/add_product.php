<style>.hide{display:none;}
.show{display: block;max-width: 100px;
} 
</style>

<section class="content">
	<div class="row">

		<div class="col-sm-12 col-md-12 col-lg-12">
			<div class="heading">
       <?php $add_edit = (empty($product->id)) ? 'Add' : 'Edit';?>
        <h2><?php echo $add_edit;?> Product<?php //echo $page_title ?></h2></div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-6">
			<div class="formmain">
        <?php //echo validation_errors();?>
        <?php $action = (empty($product->id)) ? "insert" : "update/$product->id"; ?>
				<form action="<?php echo base_url("admin/products/$action") ?>" method="POST" enctype="multipart/form-data">
					<div class="form-group">
    					<label for="proname">Title</label>
    					<input type="text" class="form-control" name="title" id="proname" aria-describedby="emailHelp" placeholder="Title" value="<?php echo (empty($product->title)) ? "" : $product->title; ?>">
              <div><?php echo form_error('title');?></div>
    			</div>
          <?php //echo form_error('title');?>
    				<div class="form-group">
    					<label for="prodescription">Description</label>
    					<textarea class="form-control" name="description" id="prodescription" rows="3"><?php echo (empty($product->description)) ? "" : $product->description ?></textarea>
    				</div>
    				
    				<div class="form-group">
    					<label for="category">Select Category</label>
              
    					<select class="form-control" id="category" name="category_id">
    						<?php 
                  if(!empty($categories)){
                    foreach($categories as $key=>$category)
                    {
                      //print_r($cat_title);exit();
                      $sel = ($category->id==$product->category_id) ? "selected" : "";
                ?>
    						<option <?php echo $sel ?> value="<?php echo $category->id;?>"><?php echo $category->title;?></option>
    						<?php } }?>
    					</select>	
    				</div>
    				<div class="form-group">
              <?php if(!empty($product->image)){ ?>
                <div><img src="<?php echo base_url('assets/images/product_image/'.$product->image);?>" alt="Product Image" style="max-width: 100px;"></div>
              <?php } else { ?>

              <?php } ?>
    					<label for="proimg">Upload Image</label>
    					<input type="file" class="form-control-file" id="proimg" name="image">
  					</div>
  					<div class="form-group">
  						<label for="prostock">Stock</label>
  						<input type="text" class="form-control" name="stock" id="prostock" aria-describedby="emailHelp" placeholder="Stock" value="<?php echo (empty($product->stock)) ? "" : $product->stock ?>">
  					</div>
            <?php $save_update = (empty($product->id)) ? 'save' : 'update' ?>
            
  					<input type="submit" value="<?php echo ucfirst($save_update);?>" name="<?php echo $save_update;?>" class="btn btn-primary searchbtn">	
				</form>
			</div>
		</div>
	

  </div>	
</section>