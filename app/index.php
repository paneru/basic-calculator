<!DOCTYPE html>
<html>
	<head>
		<title>Basic Calculator - PHP</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"></script>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="container" style="margin-top: 50px">

			<?php require_once "./CalculatorController.php";?>
            <h1>Basic Calculator</h1>
		    <!-- Calculator - form -->
		    <form method="post">
		        <input name="num_1" type="text" class="form-control textInput" />
		        <select name="operation">
		        	<option value="plus">Plus</option>
		            <option value="minus">Minus</option>
		            <option value="times">Times</option>
		            <option value="divided by">Divided By</option>
		        </select>
		        <input name="num_2" type="text" class="form-control textInput" />
		        <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
		    </form>
		</div>
	</body>
</html>