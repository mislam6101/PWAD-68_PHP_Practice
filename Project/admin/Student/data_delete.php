<?php 
$id = $_REQUEST["id"];
include_once("../inc/db_config.php");

$sql = "DELETE FROM students WHERE students.id=$id";
$db->query("$sql");
header("Location:student_list.php");
$db->close();

?>