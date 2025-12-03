<?php 
$domain = "prothomalo.com";
getmxrr($domain, $mxhosts);
echo "<pre>";
print_r($mxhosts);

?>