<?php

class Movie {
    public $title;
    public $type;
    public $duration;
    public $director;
    
    public function __construct(string $_title, string $_type, int $_duration, string $_director){
        $this->title = $_title;
        $this->type = $_type;
        $this->duration = $_duration;
        $this->director = $_director;
    }

    public function get_info(){
        return "title: {$this->title} - type: {$this->type}- duration: {$this->duration}- director: {$this->director}";
    }
}

?>