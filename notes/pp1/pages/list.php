<?php
try
{
	$dbh = new PDO('mysql:host=localhost;dbname=company;charset=utf8','root','');
}
catch(PDOException $e)
{
	echo $e->getMessage();
}
/*select data
//Create the query
$sth = $dbh->query("select * from employees");

//Set the fetch mode
//As there are mulltiple modes which you can use in order to  fetch the data
$sth->setFetchMode(PDO::FETCH_OBJ);
//PDO::FETCH_OBJ....in what that says is we want to fetch our values in objects instead of an array
?>


<h1>Employees</h1>
<table width="500" cellpadding=5 cellspacing=5 border =1 >
<tr>
<th>ID#</th>
<th>First name</th>
<th>Last Name</th>
<th>Department</th>
<th>email</th>
</tr>


<?php while($row=$sth->fetch()): ?>
<tr>
<th><?php echo $row->id;?></th>
<th><?php echo $row->firstname;?></th>
<th><?php echo $row->lastname;?></th>
<th><?php echo $row->department;?></th>
<th><?php echo $row->email;?></th>
</tr>
<?php endwhile;?>
</table>
*/
//----------------------------------------------------------------------------------------------------------------
/*insert data
//Dummy variables
$firstname = "David";
$lastname="Davidson";
$department = "designproject";
$email = "dd@gmail.com";

//create statement,that is equal with the db handle vaiable which runs its prepare method
$sth = $dbh->prepare("insert into employees (firstname,lastname,department,email)
                        VALUES(:firstname,:lastname,:department,:email)");
//placeholders...(:firstname,:lastname,:department,:email)

//since we create the placeholders we need to bind them
//it takes 2 parameters, placeholder you want to replace in our case it is a string so we want it inside quotes
//and the variable you want to replace which in reality will came from a form but in our case comes from the dummy variables

$sth->bindParam(':firstname',$firstname);
$sth->bindParam(':lastname',$lastname);
$sth->bindParam(':department',$department);
$sth->bindParam(':email',$email);

//the last thing we need to do is to execute it as it will do nothing
$sth->execute();
//so that it will insert a new value into our database table employees
*/

/*update data
//Dummy variables
$id = 4;
$lastname="logan";
$department = "design";


$sth = $dbh->prepare("update employees set department=:department, lastname=:lastname  
where id = :id");


$sth->bindParam(':id',$id);
$sth->bindParam(':department',$department);
$sth->bindParam(':lastname',$lastname);

$sth->execute();
*/



/*delete statement: the easiest but if you forget a where clause you end up deleting most 
of or even the whole table*/
/*delete data*/
//Dummy variables
$id = 8;


$sth = $dbh->prepare("delete from employees where id = :id");


$sth->bindParam(':id',$id);


$sth->execute();





