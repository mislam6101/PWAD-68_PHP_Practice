<?php 
$id = $_REQUEST["id"];
include_once("../inc/db_config.php");

$sql = "DELETE FROM students WHERE students.id=$id";
$db->query("$sql");
if ($db->affected_rows){
    session_start();
    $_SESSION["msg"] = "Successfully Deleted";
}

header("Location:student_list.php");
$db->close();

?>