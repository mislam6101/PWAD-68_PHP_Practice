<?php 

class fileInfo{
    public $file_arr;
    public function __construct($x) {
        $this->file_arr = $x;
    }
    function upload(){
        $info = $this->file_arr;
        $name = $info["name"];
        $size = $info["size"];
        $tmpName = $info["tmp_name"];
        $a_size = 500*1024;
        $a_ext = ["jpg", "png", "pdf"];
        $data = pathinfo($name);
        $ext = strtolower($data["extension"]);
        $errors = [];
        if($size > $a_size){
            $error[] = "File size must be in 500 kb";
        }
        if(!in_array($ext, $a_ext)){
            $error[] = "File extention must be jpg, png or pdf.";
        }
        if(count($errors) > 0){
            foreach($errors as $err){
                echo $err . "<br>";
            }
        }
        else{
            if(move_uploaded_file($tmpName, "uploads" . $name)){
                echo "Successfullu Uploaded.";
            }
        }
    }
}

?>