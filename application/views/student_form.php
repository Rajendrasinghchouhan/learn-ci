<section class="content">
<?php 


if($this->session->flashdata('error')) {
	echo '<div class="alert alert-danger alert-dismissible">
		  	<button type="button" class="close" aria-label="close" data-dismiss="alert">&times;</button>	
		  <strong>Error!</strong> '.$this->session->flashdata("error").'
		</div>';
}
//print_r($geteditstudents);die();
?>

<div class="row">
	<?php $add_edit = (empty($geteditstudents->id)) ? 'Add' : 'Edit';?>
	<h1><?php echo $add_edit;?> Student</h1>
<div class="col-md-8">
	<?php $action = (empty($geteditstudents->id)) ? 'insert_student' : 'update_student/'.$geteditstudents->id; ?>
	<form action="<?php echo base_url('students/'.$action);?>" method="POST">
	  <div class="form-group">
	    <label for="name">Student Name</label>
	    <?php
	    	if(!empty($allerrors))
	    	{
	    		$nameField =  $this->input->post('name');
	    		//print_r($nameField);die();
	    	}
	    	elseif (!empty($geteditstudents)) {
	    		$nameField = $geteditstudents->student_name;
	    		//print_r($nameField);die();
	    	}
	    	else 
	    	{
	    		$nameField = "";
	    	}
	    ?>
	    <input type="text" class="form-control" id="name" value="<?php echo $nameField;?>" name="name" autocomplete="off" placeholder="Enter Name">
		
	    <?php  $errorMessage = (empty($allerrors['name'])) ? "" : $allerrors['name'];?>
	    <span class="alert-danger"><?php echo $errorMessage; ?></span>
	  </div>

	  <div class="form-group">
	    <label for="class">Class</label>
	    <?php
	    	if(!empty($allerrors))
	    	{
	    		$nameField =  $this->input->post('class');
	    		//print_r($nameField);die();
	    	}
	    	elseif (!empty($geteditstudents)) {
	    		$nameField = $geteditstudents->class;
	    		//print_r($nameField);die();
	    	}
	    	else 
	    	{
	    		$nameField = "";
	    	}
	    ?>
	    <select class="form-control" id="class" name="class">
	    	<option value="">Select Class</option>
	    	<?php 
	    		if(!empty($allclass))
	    		{
	    			foreach($allclass as $key=>$mainClass){
	    		$sel = ($mainClass->class_id==$nameField) ? "selected" : "";
	    	?>
	    		<option <?php echo $sel;?> value="<?php echo $mainClass->class_id;?>"><?php echo $mainClass->class_name;?></option>
	    	<?php } } ?>
	    </select>
	    <?php  $errorMessage = (empty($allerrors['class'])) ? "" : $allerrors['class'];?>
	    <span class="alert-danger"><?php echo $errorMessage; ?></span>
	  </div>

	  <div  id="streams" class="form-group">

	    	
	  </div>

	  <div class="form-group">
	    <label for="email">Email</label>
	    <?php
	    	if(!empty($allerrors))
	    	{
	    		$nameField =  $this->input->post('email');
	    		//print_r($nameField);die();
	    	}
	    	elseif (!empty($geteditstudents)) {
	    		$nameField = $geteditstudents->email;
	    		//print_r($nameField);die();
	    	}
	    	else 
	    	{
	    		$nameField = "";
	    	}
	    ?>
	    <input type="text" name="email" value="<?php echo $nameField; ?>" class="form-control" id="email" placeholder="name@example.com">
	    <?php $errorMessage = (empty($allerrors['email'])) ? '' : $allerrors['email']; ?>
	    <span class="alert-danger"><?php echo $errorMessage; ?></span>
	  </div>

	  <div class="form-group">
	    <label for="address">Address</label>
	    <?php
	    	if(!empty($allerrors))
	    	{
	    		$nameField =  $this->input->post('address');
	    		//print_r($nameField);die();
	    	}
	    	elseif (!empty($geteditstudents)) {
	    		$nameField = $geteditstudents->address;
	    		//print_r($nameField);die();
	    	}
	    	else 
	    	{
	    		$nameField = "";
	    	}
	    ?>
	    <textarea class="form-control" id="address" name="address" rows="3"><?php echo $nameField;?></textarea>
	    <?php $errorMessage = (empty($allerrors['address'])) ? '' : $allerrors['address']; ?>
	    <span class="alert-danger"><?php echo $errorMessage; ?></span>
	  </div>

	  <div class="form-group">
	  	<?php $save_update = empty($geteditstudents->id) ? 'save' : 'update' ?>
	    <input type="submit" class="form-control btn btn-info" name="<?php echo $save_update;?>" value="<?php echo ucfirst($save_update);?>" >
	  </div>

	</form> 
</div>
</div>
</section>
<script>
	// practice on all jQuery fucntoins (20-30) and events (5-10)
	// make example of each 

	$(document).ready(function() {
		$("#class").on("change", function() {

			//alert($("#name").val());
			//$("#name").val("This is name");

			var class_id = $(this).val();
			var request = $.ajax({
			  url: "<?php echo base_url('students/get_streams') ?>",
			  type: "POST",
			  data: {classid : class_id},
			  dataType: "json"
			});

			request.done(function(data) {
			  //console.log(data);
			  $("#streams").html('');

			  if( data.strams.length ) {
			  	var listItems = '';
			  	var streamvalid = '';//(empty($allerrors['streams'])) ? "" : $allerrors['streams'];
			  	$(data.strams).each(function(key, value) {
			  		console.log(value); 
			  		var selected = (value.stream_id == <?php echo $geteditstudents->student_stream_id ?>) ? "selected" : "";
	  		      	listItems += "<option "+selected+" value='"+value.stream_id+"'>"+value.stream_class_name+"</option>";
			  	});

			  	$("#streams").html('<label for="stram">Stream</label><select class="form-control" id="stram" name="streams"><option value="">Select stream</option>'+listItems+'</select><span class="alert-danger"></span>');	
			  } 
			});

			request.fail(function(jqXHR, error) {
			  alert( "Request failed: " + error );
			});
        }).trigger("change");
	});
</script>