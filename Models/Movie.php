<?php
class Movie {
    private $title;
    private $type;
    private $duration;
    private $director;
    
    public function __construct(string $_title, array $_type, int $_duration, string $_director){
        $this->title = $_title;
        $this->type = $_type;
        $this->duration = $_duration;
        $this->director = $_director;
    }

    public function get_title(){
        return strval($this->title);
    }
    public function get_types_as_string(){
        $array_type = [];
        foreach($this->type as $type){
            array_push($array_type, $type->type);
        }
        return implode(', ',$array_type);
    }
}   

?>