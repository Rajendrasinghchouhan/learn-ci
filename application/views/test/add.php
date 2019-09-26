<form method="post">
<input type="text" name="text1" value="" placeholder="enter a number">
<input type="text" name="text2" value="" placeholder="enter a number">
<input type="submit" name="result" value="Add"><br><br>
<?php 
	$sum='';
	if(isset($_POST['result'])){
		$number1 = @$_POST['text1'];
		$number2 = @$_POST['text2'];
		$sum = $number1 + $number2;
	}
?>
<input type="text" name="result" value="<?php echo $sum;?>">
</form>