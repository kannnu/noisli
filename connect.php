<?php

$con = mysqli_connect("localhost", "root", "", "noisli");
if(!$con){
	die('Could not connect: ' . mysql_error());
}
?>