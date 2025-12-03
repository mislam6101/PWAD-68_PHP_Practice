<?php 
$db = new mysqli('localhost', 'root', '','company');
$id = $_REQUEST['id'];
$sql = "DELETE FROM manufacturer WHERE id = '$id'";
$db->query($sql);
header("Location:product_list.php");
?>