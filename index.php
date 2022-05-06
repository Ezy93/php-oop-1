<?php  


class Movie
    {
        private $title;
        private $language;
        private $duration;
        private $firstActor;
        private $director;
        private $nationality;
        
        
        
        public function __construct($title, $language, $duration, $firstActor, $director, $nationality)
        {
            $this->title = $title;
            $this->language = $language;
            $this->duration = $duration;
            $this->firstActor = $firstActor;
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
            return $this->firstActor;
        }

        public function getDirector(){
            return $this->director;
        }

        public function getNationality(){
            return $this->nationality;
        }
        
    }

    $doctorStrange = new Movie('doctorStrange', 'italiano', 126, 'Benedict Cumberbatch', 'Sam Raimi', 'U.s.a.');
    $guidaIntergalattica = new Movie('guida intergalattica per autostoppisti', 'italiano', 110, 'Martin Freeman', 'Hammer & Tongs', 'U.s.a.');
    
?>