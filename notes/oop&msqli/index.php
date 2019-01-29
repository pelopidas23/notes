<?php
//create the connection
$mysqli = mysqli_connect('localhost','root','','company');
//check the connection 
if(mysqli_connect_errno())
{
	print_f( "Connection failed: %s\n",mysqli_connect_error());	
}

$result = $mysqli->query("select * from employees");
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


<?php while($row=$result->fetch_object()): ?>
<tr>
<th><?php echo $row->id;?></th>
<th><?php echo $row->firstname;?></th>
<th><?php echo $row->lastname;?></th>
<th><?php echo $row->department;?></th>
<th><?php echo $row->email;?></th>
</tr>
<?php endwhile;?>
</table>



<?php 
$result = $mysqli->query("select p.name,c.name as 'category',p.id 
                                 from products p
								 left join categories c
								 on p.category = c.id");

?>

<h1>Products</h1>
<table width="500" cellpadding=5 cellspacing=5 border =1 >
<tr>
<th>ID#</th>
<th>product</th>
<th>category</th>
</tr>
<?php while($row=$result->fetch_object()): ?>
<tr>
<th><?php echo $row->id;?></th>
<th><?php echo $row->name;?></th>
<th><?php echo $row->category;?></th>
</tr>
<?php endwhile;?>
</table>