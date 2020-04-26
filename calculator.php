<?php include('function.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="POST">
		<table>
			<tr>
				<td>Enter First Number: </td>
				<td><input type="number" name="numOne"></td>
			</tr>
			<tr>
				<td>Enter Second Number:</td>
				<td><input type="number" name="numTwo"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="calculator" value="Result"></td>
			</tr>
		</table>
	</form>
</body>
</html>


<?php 

	if(isset($_POST['calculator'])){
		$numOne= $_POST['numOne'];
		$numTwo= $_POST['numTwo'];
		if(empty($numOne) or empty($numTwo)){
			echo "<span style=color:#995544;>Num One or Two Can't be empty</span>";
		}

		else {
			echo "Num one is :". $numOne.  " & Num2 is :". $numTwo."<br>";


			$cal = new Calculation;
			$cal->add($numOne, $numTwo);
			$cal->sub($numOne, $numTwo);
			$cal->mul($numOne, $numTwo);
			$cal->div($numOne, $numTwo);

		}
	}

