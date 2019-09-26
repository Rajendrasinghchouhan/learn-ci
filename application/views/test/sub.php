<form method="post">
<input type="text" name="stext1" value="" placeholder="enter a number">
<input type="text" name="stext2" value="" placeholder="enter a number">
<input type="submit" name="sresult" value="Sub"><br><br>
<?php 
	$sub='';
	if(isset($_POST['sresult'])){
		$number1 = $_POST['stext1'];
		$number2 = $_POST['stext2'];
		$sub = $number1 - $number2;
	}
?>
<input type="text" name="result" value="<?php echo $sub;?>">
</form>
