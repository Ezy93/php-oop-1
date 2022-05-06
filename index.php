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

        public function getTitle(){
            return $this->title;
        }

        public function getLanguage(){
            return $this->language;
        }

        public function getDuration(){
            return $this->duration;
        }

        public function getActors(){
            return $this->actors;
        }

        public function getDirector(){
            return $this->director;
        }

        public function getNationality(){
            return $this->nationality;
        }
        
    }
    
?>