<?php
$connect=mysqli_connect('localhost','root','','company');
if(mysqli_connect_errno($connect))
{
	echo 'failed to connect';
}
?>