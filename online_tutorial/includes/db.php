<?php

$host="localhost:3306";
$username="root";
$password="Heeva066";
$db_name="test";
$tbl_name="file";

$db = mysqli_connect("$host", "$username", "$password","$db_name") or die("cannot connect");
//mysqli_select_db("$db_name","$tbl_name")or die("cannot select DB");
?>