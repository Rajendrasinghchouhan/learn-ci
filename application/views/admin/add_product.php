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
          <?php 
            if($this->input->post('title'))
            {
              $nameField = $this->input->post('title');
            }
            elseif (!empty($product->title)) {
              $nameField = $product->title;
            }
            else
            {
              $nameField = '';
            }
          ?>
					<div class="form-group">
    					<label for="proname">Title</label>
    					<input type="text" class="form-control" name="title" id="proname" aria-describedby="emailHelp" placeholder="Title" value="<?php echo $nameField; ?>">
              <?php $emptyMessage = (!empty($allerrors['title']) && isset($allerrors['title'])) ? $allerrors['title'] : ''; ?>
              <span class="bg-danger"><?php echo $emptyMessage;?></span>
    			</div>
          <?php 
            if($this->input->post('description'))
            {
              $nameField = $this->input->post('description');
            }
            elseif (!empty($product->description)) {
              $nameField = $product->description;
            }
            else
            {
              $nameField = '';
            }
          ?>
    				<div class="form-group">
    					<label for="prodescription">Description</label>
    					<textarea class="form-control" name="description" id="prodescription" rows="3"><?php echo $nameField;?></textarea>
              <?php $emptyMessage = (!empty($allerrors['description']) && isset($allerrors['description'])) ? $allerrors['description'] : ''; ?>
              <span class="bg-danger"><?php echo $emptyMessage;?></span>
    				</div>
    				<?php 
              if($this->input->post('category_id'))
              {
                $nameField = $this->input->post('category_id');
              }
              elseif (!empty($product->category_id)) {
                $nameField = $product->category_id;
              }
              else
              {
                $nameField = '';
              }
            ?>
    				<div class="form-group">
    					<label for="category">Select Category</label>
    					<select class="form-control" id="category" name="category_id">
    						<?php 
                  if(!empty($categories)){
                    foreach($categories as $key=>$category)
                    {
                      //print_r($cat_title);exit();
                      $sel = ($category->id==$nameField) ? "selected" : "";
                ?>
    						<option <?php echo $sel ?> value="<?php echo $category->id;?>"><?php echo $category->title;?></option>
    						<?php } }?>
    					</select>
              <?php $emptyMessage = (!empty($allerrors['category_id']) && isset($allerrors['category_id'])) ? $allerrors['category_id'] : ''; ?>
              <span class="bg-danger"><?php echo $emptyMessage;?></span>
    				</div>
            
    				<div class="form-group">
              <?php if(!empty($product->image)){ ?>
                <div><img src="<?php echo base_url('assets/images/product_image/'.$product->image);?>" alt="Product Image" style="max-width: 100px;"></div>
              <?php } else { ?>

              <?php } ?>
    					<label for="proimg">Upload Image</label>
    					<input type="file" class="form-control-file" id="proimg" name="image" value="<?php echo $nameField;?>">
              <?php $emptyMessage = (!empty($allerrors['image']) && isset($allerrors['image'])) ? $allerrors['image'] : ''; ?>
              <span class="bg-danger"><?php echo $emptyMessage;?></span>
  					</div>
            <?php 
              if($this->input->post('stock'))
              {
                $nameField = $this->input->post('stock');
              }
              elseif (!empty($product->stock)) {
                $nameField = $product->stock;
              }
              else
              {
                $nameField = '';
              }
            ?>
  					<div class="form-group">
  						<label for="prostock">Stock</label>
  						<input type="text" class="form-control" name="stock" id="prostock" aria-describedby="emailHelp" placeholder="Stock" value="<?php echo $nameField; ?>">
              <?php $emptyMessage = (!empty($allerrors['stock']) && isset($allerrors['stock'])) ? $allerrors['stock'] : ''; ?>
              <span class="bg-danger"><?php echo $emptyMessage;?></span>
  					</div>
            <?php $save_update = (empty($product->id)) ? 'save' : 'update' ?>
            
  					<input type="submit" value="<?php echo ucfirst($save_update);?>" name="<?php echo $save_update;?>" class="btn btn-primary searchbtn">	
				</form>
			</div>
		</div>
	

  </div>	
</section>