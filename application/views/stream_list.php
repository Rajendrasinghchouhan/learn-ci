<section class="content">
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-6">
			<h1>Stream List</h1>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-6">
			<div class="btn btn-success productright"><a href="<?php echo base_url('stream/streamform');?>" class="readmore"><i class="fa fa-fw fa-plus"></i> Add</a></div>
		</div>
	</div>
	<table class="table table-striped">
	    <thead>
	      <tr>
	        <th>S No</th>
	        <th>Stream Name</th>
	        <th>Class Name</th>
	        <th>Action</th>
	      </tr>
	    </thead>

	    <tbody>
	    	<?php $i=1; foreach ($getstream as $key => $allStream) { ?>
		      <tr>
		        <td><?php echo $i++ ?></td>
		        <td><?php echo ucfirst($allStream->stream_class_name); ?></td>
		        <td><?php echo $allStream->class_name;?></td>
		        <td> <a href="<?php echo base_url('stream/streamform/'.$allStream->stream_id);?>"><i class="fas fa-pencil-alt editicon"></i></a> </td>
		      </tr>

	    	<?php } ?>

	    </tbody>
  	</table>
</section>