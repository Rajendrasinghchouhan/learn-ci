<section class="content">

	<?php 

		$add_edit =  (empty($editgetclass->class_id)) ? 'Add' : 'Edit' ?>
		<h1><?php echo $add_edit;?></h1>
	<div class="row">
		<div class="col-md-8">
			<?php $action = (empty($editgetclass->class_id)) ? 'classinsert' : 'classupdate/'.$editgetclass->class_id; ?>
			<form action="<?php echo base_url('mainclass/'.$action)?>" method="POST">
	  			<div class="form-group">
	    			<label for="classname">Class Name</label>
	    			<input type="text" class="form-control" id="classname" value="<?php echo (empty($editgetclass->class_name)) ? '' : $editgetclass->class_name ?>" name="classname" autocomplete="off" placeholder="Enter Class">
	  			</div>
	  			<div class="form-check">
	  				<?php $checked = (empty($editgetclass->class_stream_allow)) ? '' : "checked"; ?>
    				<input type="checkbox" class="form-check-input" id="classcheck" name="classcheck" value="1" <?php echo $checked; ?>>
    				<label class="form-check-label" for="classcheck">Check only for stream allow</label>
  				</div><br/>
	  			<div class="form-group">
	  				<?php $save_edit = (empty($editgetclass->class_id)) ? 'save' : 'update' ?>
	    			<input type="submit" class="form-control btn btn-info savebutton" name="<?php echo $save_edit?>" value="<?php echo ucfirst($save_edit);?>" >
	 			</div>
	  		</form>
	  	</div>
	</div>
</section>