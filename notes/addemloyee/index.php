<!DOCTYPE html>
<html>
<head>
<style>
label{display:inline-block; width:100px;margin-bottom:5px;}
</style>

<title>Add Employee</title>
</head>

<body>
<h1>Add Employee</h1>
<form method="post" action="process.php">

<label> First Name: </label>
<input type ="text" name="firstname"></br>
<label> last Name: </label>
<input type ="text" name="lastname"></br>
<label> department: </label>
<input type ="text" name="department"></br>
<label> email: </label>
<input type ="text" name="email"></br>
<input type="submit" value="Add employee">

</form>
</body>
</html>