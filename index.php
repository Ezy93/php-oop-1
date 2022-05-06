<?php  


class Movie
    {
        private $title;
        private $language;
        private $duration;
        private $actors;
        private $director;
        private $nationality;
        
        
        
        public function __construct($title, $language, $duration, $actors, $director, $nationality)
        {
            $this->title = $title;
            $this->language = $language;
            $this->duration = $duration;
            $this->actors = $actors;
            $this->director = $director;
            $this->nationality = $nationality;
        }
        
    }
    
?>