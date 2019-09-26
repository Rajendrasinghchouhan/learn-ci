<form method="post">
<input type="text" name="mtext1" value="" placeholder="enter a number">
<input type="text" name="mtext2" value="" placeholder="enter a number">
<input type="submit" name="mresult" value="multiply"><br><br>
<?php 
	$multi='';
	if(isset($_POST['mresult'])){
		$number1 = $_POST['mtext1'];
		$number2 = $_POST['mtext1'];
		$multi= $number1 * $number2;
	}
?>
<input type="text" name="result" value="<?php echo $multi;?>">
</form>
