<link href="../../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">

<form action='receiver.php' method="get" role="form">
	<div class="form-group">
		<label>Num 1</label> 
		<input type="number" name="num1" class="form-control">
	</div>
	<div class="form-group">
		<label>Num 2</label> 
		<input type="number" name="num2" class="form-control" >
	</div>
	<div class="form-group">
		<select name="method" class="form-control">
			<option value="add"> Add</option>
			<option value="minus"> Minus</option>
			<option value="divide"> Divide</option>
			<option value="multiply"> Multiply</option>
		</select>
	</div>
	
	<input type="submit" value="Calculate" class="btn btn-primary">


</form>