<?php

class student
{
    public $id;
    public $name;
    public $batch;
    public $file;
    public function __construct($file)
    {
        $this->file = $file;
    }
    function result($id)
    {
        $data = file($this->file);
        foreach ($data as $line) {
            [$f_id, $name, $batch, $result] = explode(" ", $line);
            // list($f_id, $name, $batch, $result) = explode(" ", $line);
            if($id == $f_id){
                return $result;
            }
            else{
                return "Did't find the student data.";
            }
        }
    }
}

?>
