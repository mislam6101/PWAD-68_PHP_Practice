<?php 

class std{
    public $id;
    public $name;
    public $batch;
    public $file;

    public function __construct($file) {
        $this->file = $file;
    }
    function result($s_id){
        $arr = file($this->file);
        foreach($arr as $line){
            //[$f_id, $name, $batch, $result] = explode(" ", $line);
            list($f_id, $name, $batch, $result) = explode(" ", $line);
            if($s_id == $f_id){
                return  "You got ". $result;
            }
        }
        return "Didn't find the ID";

    }
}

?>