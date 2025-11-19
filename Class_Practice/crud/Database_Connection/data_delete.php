<?php 

$id = $_REQUEST["id"];
$sql = "DELETE FROM students WHERE students.ID = '$id'";
include_once("db_config.php");
$conn->query($sql);
$db->close();
header("Location:index.php");

?>