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
		<div class="col-md-6 col-sm-6 col-xs-6">
			<h1>Category List</h1>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-6">
			<div class="btn btn-success productright"><a href="<?php echo base_url('admin/category/categoryform');?>" class="readmore"><i class="fa fa-fw fa-plus"></i> Add</a></div>
		</div>
	</div>
	<table class="table table-striped">
	    <thead>
	      <tr>
	        <th>S No</th>
	        <th>Category Title</th>
	        <th>Action</th>
	      </tr>
	    </thead>
	    <tbody>
	    	<?php if(!empty($allcategory) && isset($allcategory)) { 
	    		$i = 1; foreach($allcategory as $key => $category) {
	    	?>
	    	<tr>
	    		<td><?php echo $i++?></td>
	    		<td><?php echo ucfirst($category->title);?></td>
	    		<td><a href="<?php echo base_url('admin/category/categoryform/'.$category->id);?>"><i class="fas fa-pencil-alt editicon"></i></a></td>
	    	</tr>
	    <?php } } ?>
	    </tbody>
	</table>    
</section>