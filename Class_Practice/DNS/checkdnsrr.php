<?php 
$domain = "example.com";
$record_exist = checkdnsrr($domain, "ANY");

print_r($record_exist);

?>