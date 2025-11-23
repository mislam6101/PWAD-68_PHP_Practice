<?php 
class fileUpload{
    public $file;
    public function __construct($x) {
        $this->file = $x;
    }
    function upload(){
        $info = $this->file;
        $name = $info["name"];
        $tmpName = $info["tmp_name"];
        $f_size = $info["size"];
        $allowsize = 512000;
        $allowtypes = ["jpg", "png", "pdf"];
        $errors = array();
        $data = pathinfo($name);
        $ext = strtolower($data["extension"]);
        if ($f_size > $allowsize){
            $errors[] = "file size must be within 500 kb";
        }
        if(!in_array($ext, $allowtypes)){
            $errors[] = "File type must be jpg or png";
        }
        if(count($errors)>0){
            foreach($errors as $err){
                echo $err . "<br>";
            }
        }
        else{
            if(move_uploaded_file($tmpName, "uploads/". $name)){
                echo "Upload Successfull";
            }
        }
    }
}
?>