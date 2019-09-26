<section class="content">
	<?php $add_edit = (empty($editgetstream->stream_id)) ? 'Add' : 'Edit' ?>
	<h1><?php echo $add_edit; ?> Stream</h1>
	<div class="row">
		<div class="col-md-8">
			<?php $action = (empty($editgetstream->stream_id)) ? 'streaminsert' : 'updatestream/'.$editgetstream->stream_id;?>
			<form action="<?php echo base_url('stream/'.$action);?>" method="POST">
	  			<div class="form-group">
    				<label for="mainclass">Select Class</label>
    				<select class="form-control" id="mainclass" name="mainclass">
    					<option value="">Select Class </option>
    					<?php if(!empty($mainclass))
    					{
    						foreach ($mainclass as $key => $fetchclass) {
    							$sel = (isset($editgetstream) && $fetchclass->class_id==$editgetstream->stream_class_id) ? "selected" : "";
    					?>
    					<option <?php echo $sel; ?> value="<?php echo $fetchclass->class_id;?>"><?php echo $fetchclass->class_name?></option>
    				<?php } } ?>
    				</select>
            	</div>
            	<div class="form-group">
	    			<label for="streamname">Stream Name</label>
	    			<input type="text" class="form-control" id="streamname" value="<?php echo (empty($editgetstream->stream_class_name)) ? '' : $editgetstream->stream_class_name;?>" name="streamname" autocomplete="off" placeholder="Enter Stream">
	  			</div>
            	<div class="form-group">
            		<?php $save_update = (empty($editgetstream->stream_id)) ? 'save' :'update';?>
	    			<input type="submit" class="form-control btn btn-info savebutton" name="<?php echo $save_update;?>" value="<?php echo ucfirst($save_update);?>" >
	 			</div>
			</form>
		</div>
	</div>
</section>