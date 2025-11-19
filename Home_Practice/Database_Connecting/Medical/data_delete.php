<?php

    $id = $_REQUEST["id"];
    include_once("db_config.php");

    $sql = "DELETE FROM patiants WHERE patiants.id = $id";
    $db->query("$sql");
    $db->close();

    header("Location:index.php");

?>