<section class="content">
	<div class="row">
		<?php $populate = (!empty($editcategory) && isset($editcategory)) ? "Edit" : "Add";?>
		<h1><?php echo $populate;?> Category</h1>
		<div class="col-md-8">
			<form action="" method="POST">
				<div class="form-group">
	    			<label for="classname">Category Name</label>
	    			<?php $populate = (!empty($editcategory->title) && isset($editcategory->title)) ? $editcategory->title : "";?>
	    			<input type="text" class="form-control" id="classname" value="<?php echo $populate;?>" name="categoryname" placeholder="Enter Category">
	    			<?php  $errorMessage = (!empty($allerrors['categoryname']) && isset($allerrors['categoryname'])) ? $allerrors['categoryname'] : "";?>
	    			<span class="alert-danger"><?php echo $errorMessage; ?></span>
	  			</div>
	  			<div class="form-group">
	  				<?php $populate = (!empty($editcategory) && isset($editcategory)) ? "update" : "save";?>
	    			<input type="submit" class="form-control btn btn-info savebutton" name="<?php echo $populate;?>" value="<?php echo ucfirst($populate);?>" >
	 			</div>
			</form>
		</div>
	</div>
</section>