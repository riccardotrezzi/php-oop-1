<?php
    
    class Movie {
        private $title;
        public $director;
        public $actors;
        public $year;
        public $genre;

        function __construct($title, $director, $actors, $year, $genre){
            $this -> setTitle($title);
            $this -> director = $director;
            $this -> actors = $actors;
            $this -> year = $year;
            $this -> genre = $genre;
        }

        public function getTitle(){
            return $this->title;
        }

        public function setTitle($title) {
            if(is_string($title) && strlen($title) > 0) {
                return $this -> title = $title;
            }
            else {

            }
        }

    }

    $actors = [
            'Daniel Craig',
            'Rami Malek',
            'Léa Seydoux',
            'Lashana Lynch',
            'Ben Whishaw',
            'Naomie Harris', 
            'Jeffrey Wright',
            'Christoph Waltz',
            'Ralph Fiennes',
            'Rory Kinnear',
            'Ana de Armas',
            'Billy Magnussen',
            'David Dencik',
    ];

    $jamesBond = new Movie('No Time To Die', 'Cary Fukunaga', $actors, 2021, 'Action');
    
    var_dump($jamesBond);

?>
