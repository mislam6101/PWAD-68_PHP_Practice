<?php 
include_once("db_config.php");
$id = $_REQUEST['id'];
$sql = "DELETE FROM manufacturer WHERE id= '$id'";
$db->query($sql);

$db->close();
header("Location:manufacturer_form.php");
?>