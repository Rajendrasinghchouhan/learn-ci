<section class="content">
	<?php 
		if($this->session->flashdata('success')) {
			echo '<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" aria-label="close" data-dismiss="alert">&times;</button>
		  			<strong>Success!</strong> '.$this->session->flashdata("success").'
				</div>';
		}
		elseif($this->session->flashdata('error'))
		{
			echo '<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" aria-label="close" data-dismiss="alert">&times;</button>
		  			<strong>Error!</strong> '.$this->session->flashdata("error").'
				</div>';
		}
	?>
	<form action="<?php echo base_url('students/deleteall');?>" Method="POST" onSubmit="return confirm_delete()">
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-6">
			<h1>Student List</h1>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-6">
			<input type="submit" class="btn btn-danger productright" name="bulk_delete" value="Delete All">
			<div class="btn btn-success productright"><a href="<?php echo base_url('students/studentform');?>" class="readmore"><i class="fa fa-fw fa-plus"></i> Add</a></div>  
		</div>
	</div>
	
	<table class="table table-striped">
    <thead>
      <tr>
        <th>S No</th>
        <th>Student Name</th>
        <th><div class="form-check">
    		<input type="checkbox" class="form-check-input" id="select_all" value="">
    	</div></th>
        <th>Class</th>
        <th>Stream Name</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>

    <tbody>
    	<?php $i=1; foreach ($students as $key => $value) { ?>
	      <tr>
	        <td><?php echo $i++ ?></td>
	        <td><?php echo $value->student_name ?></td>
	        <td>
	        	<div class="form-check">
    				<input type="checkbox" name="checked_id[]" class="checkbox" id="multiplecheck" value="<?php echo $value->id;?>">
    			</div>
	        </td>
	        <td><?php echo $value->class_name ?></td>
	        <?php $stream = (empty($value->stream_class_name)) ? 'No Stream' : $value->stream_class_name;?>
	        <td><?php echo $stream;?></td>
	        <td><?php echo $value->email ?></td>
	        <td> 
	        	<a href="<?php echo base_url('students/studentform/'.$value->id); ?>"><i class="fas fa-pencil-alt editicon"></i></a> 
	        	<a href="<?php echo base_url('students/student_delete/'.$value->id); ?>"><i class="fas fa-trash-alt editicon"></i></a><br/>
	        	<?php if($value->status==0) { ?>
	        		<a href="<?php echo base_url('students/update_status/'.$value->id.'/'.$value->status); ?>"><div class="btn btn-success">
	        		Enable</div></a> 
	        	<?php } else { ?>
	        		<a href="<?php echo base_url('students/update_status/'.$value->id.'/'.$value->status); ?>"><div class="btn btn-danger">
	        		Disable</div></a>
	        	<?php } ?>
	    	</td>
	      </tr>

    	<?php } ?>

    </tbody>
  </table>
</form>
</section>
<script>
	// on form submit confirm delete work
	function confirm_delete()
	{
		if($('.checkbox:checked').length > 0 )
		{
			var Message = confirm("Are you sure to delete "+$('.checkbox:checked').length+" selected Students");
			if(Message)
			{

				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			alert('checkbox checked to delete the record');
			return false;
		}
	}

	// multiple checkbox checked/unchecked for delete work 
	$(document).ready(function(){
		$('#select_all').on('click',function(){ //this function work for check/unchecked all checkbox
			if(this.checked)
			{
				$('.checkbox').each(function(){
					this.checked = true;
				});
			}
			else
			{
				$('.checkbox').each(function(){
					this.checked = false;
				});
			}
		});

		$('.checkbox').on('click',function(){ 
			if($('.checkbox:checked').length == $('.checkbox').length)
			{
				$('#select_all').prop('checked',true);
			}
			else
			{
				$('#select_all').prop('checked',false);
			}
		});
	});
</script>