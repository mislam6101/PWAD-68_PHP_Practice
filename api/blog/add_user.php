<?php
include_once ('../db_config.php');

//echo "hello";
$data = file_get_contents('php://input');
$data = json_decode($data);

$name =  $data->fname;
$email =  $data->email;

if($name != "" && $email !=  ""){
    $sql = "INSERT INTO react VALUES(NULL, '$name', '$email')";
    $db->query($sql);
}

if($db->affected_rows){
    echo "Successfully Inserted";
}
?>