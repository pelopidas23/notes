<?php include 'database.php';?>

<?php
//print_r($_POST);
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$department=$_POST['department'];
$email=$_POST['email'];

mysqli_query($connect,"insert into employees (firstname,lastname,department,email)
                                      values ('$firstname','$lastname','$department','$email')");

if(mysqli_affected_rows($connect)>0)
{
	echo '<p>Employee added</p>';
		echo '<a href ="index.php">Go back</a>';
}
	else
	{ echo '<p>Employee not added</p>';
      echo mysql_error($connect);

 }

?>