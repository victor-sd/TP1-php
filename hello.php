<?php

class Movie
{
    private $name = null;
    private $description = 'quelque chose';
    private $duration = 120;
    private $releaseDate = null;
    
    public function __construct($name = "",$description = "",$duration = 0,$releaseDate=null)
    {
        $this->name = $name;
        $this->description = $description;
        $this->duration = $duration;
        $this->releaseDate = $releaseDate;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName(String $name = "")
    {
        $this -> name = $name;
    }
    
    public function getDescription()
    {
        return $this->description;
    }
    
    public function setDescription(String $description = "")
    {
        $this -> description = $description;
    }
    
    public function getDuration()
    {
        return $this->duration;
    }
    
    public function setDuration($duration = "")
    {
        $this -> duration = $duration;
    }
    
        public function getReleaseDate()
    {
        return $this->releaseDate;
    }
    
    public function setReleaseDate($releaseDate = "")
    {
        $this -> releaseDate = $releaseDate;
    }
    
    public function display()  
    {
        echo 'Le film '.$this->name.' est à propos de '.$this->description.'. Il fait '.$this->duration.' et il est sorti le '.$this->releaseDate;
    }
}

$movie = new Movie("blabla","un film",120,"15/10/1998"); 
$movie->display();
?>