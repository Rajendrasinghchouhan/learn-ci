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
			<h1>Student List</h1>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-6">
			<div class="btn btn-success productright"><a href="<?php echo base_url('students/studentform');?>" class="readmore"><i class="fa fa-fw fa-plus"></i> Add</a></div>
		</div>
	</div>
	<table class="table table-striped">
    <thead>
      <tr>
        <th>S No</th>
        <th>Student Name</th>
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
</section>