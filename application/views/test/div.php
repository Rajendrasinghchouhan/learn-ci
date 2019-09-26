<form method="post">
	<h3>Division of numbers</h3>
<input type="text" name="txt1" value="" placeholder="enter a number">
<input type="text" name="txt2" value="" placeholder="enter a number">
<input type="submit" name="rdivide" value="division"><br><br>
<?php 
	$divide='';
	if(isset($_POST['rdivide'])){
		$number1 = $_POST['txt1'];
		$number2 = $_POST['txt2'];
		$divide= $number1 / $number2;
	}
?>
<input type="text" name="result" placeholder="output" value="<?php echo $divide;?>">
</form>
