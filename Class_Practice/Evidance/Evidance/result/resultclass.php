<?php 
class std{
    public $id;
    public $file;
    public function __construct($file) {
        $this->file = $file;
    }
    function result($id){
        $data = file($this->file);
        foreach($data as $line){
            list($fid, $name, $batch, $result) = explode(" ", $line);
            if($id == $fid){
                return "Name : " . $name . "<br>Batch : " . $batch . "<br>Result : " . $result;
            }
            // else{
            //     return "Didn't find the student data.";
            // }
        }
        return "Didn't find the student data.";
    }
}

?>