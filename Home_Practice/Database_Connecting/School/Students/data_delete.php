<?php 

$id = $_REQUEST["id"];

include_once("db_config.php");
$sql = "DELETE FROM students WHERE students.id = $id";
$db->query($sql);

$db->close();
header("Location:index.php");
?>