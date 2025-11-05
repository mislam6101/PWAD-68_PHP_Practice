<?php 
// w is for write
// r is for read
// a is for append
 $Data_entry = fopen("std1.txt", "a");
 fwrite($Data_entry, "Tumi valo aso?\n");
 
 $f_handle = fopen("std1.txt", "r");


 

 while(!feof($f_handle)){
    echo fgets(($f_handle)) . "<br>";
 }
 fclose($f_handle);

?>
