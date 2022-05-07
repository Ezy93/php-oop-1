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

        public function getActor(){
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

    $films=[
        $doctorStrange = new Movie('Doctor Strange', 'italiano', 126, 'Benedict Cumberbatch', 'Sam Raimi', 'U.s.a.', 'https://m.media-amazon.com/images/I/81Zlc0suPCL._SY550_.jpg'),
        $guidaIntergalattica = new Movie('guida intergalattica per autostoppisti', 'italiano', 110, 'Martin Freeman', 'Hammer & Tongs', 'U.s.a.', 'https://pad.mymovies.it/filmclub/2005/07/045/locandina.jpg'),
    ];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom css -->
    <link rel="stylesheet" href="style.css">
    <title>Films</title>
</head>
<body>
    <main>
        <h1>Films:</h1>
        <div class="container">
            <?php foreach ($films as $film) {?>
                <div class="film-card">
                    <div class="img-container">
                        <img src="<?= $film->getPoster() ?>" alt="<?= $film->getTitle().'image' ?>">
                    </div>
                    <h3>
                        <span class="text-bold">Titolo:</span><?=$film->getTitle() ?>
                    </h3>
                    <p>
                        <span class="text-bold">Language:</span><?= $film->getLanguage()  ?>
                    </p>
                    <p>
                        <span class="text-bold">Durata(min.):</span><?=$film->getDuration()  ?>
                    </p>
                    <p>
                        <span class="text-bold">Attore principale:</span><?=$film->getActor()  ?>
                    </p>
                    <p>
                        <span class="text-bold">Regista:</span><?=$film->getDirector()  ?>
                    </p>
                    <p>
                        <span class="text-bold">Nazione di produzione:</span><?=$film->getNationality()  ?>
                    </p>
                </div>
            <?php } ?>
        </div>
    </main>
</body>
</html>