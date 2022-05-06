<?php  


class Movie
    {
        private $title;
        private $language;
        private $duration;
        private $firstActor;
        private $director;
        private $nationality;
        private $poster;
        
        
        
        public function __construct($title, $language, $duration, $firstActor, $director, $nationality, $poster)
        {
            $this->title = $title;
            $this->language = $language;
            $this->duration = $duration;
            $this->firstActor = $firstActor;
            $this->director = $director;
            $this->nationality = $nationality;
            $this->poster = $poster;
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

        public function getPoster(){
            return $this->poster;
        }
        
    }

    $doctorStrange = new Movie('doctorStrange', 'italiano', 126, 'Benedict Cumberbatch', 'Sam Raimi', 'U.s.a.', 'https://m.media-amazon.com/images/I/81Zlc0suPCL._SY550_.jpg');
    $guidaIntergalattica = new Movie('guida intergalattica per autostoppisti', 'italiano', 110, 'Martin Freeman', 'Hammer & Tongs', 'U.s.a.', 'https://pad.mymovies.it/filmclub/2005/07/045/locandina.jpg');
    
?>