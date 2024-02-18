<?php
header("Access-Control-Allow-Origin: *");

class Movie
{
    public $title;
    public $production;
    public $duration;
    public $genre;
    public $oscar;
    public $goldenGlobes;

    function __construct($titolo, $produzione, $durata, $genere, $statuettaoro, $globo)
    {
        $this->title = $titolo;
        $this->genre = $genere;
        $this->production = $produzione;
        $this->duration = $durata;
        $this->oscar = $statuettaoro;
        $this->goldenGlobes = $globo;       
    }
  
    public function setPrizes($oscar , $goldenGlobes)
    {
        $prizes = intval($oscar) + intval($goldenGlobes);
        return $prizes;      
    }
};
class Genere
{
    public $genere1;
    public $genere2;

    function __construct($tipo1, $tipo2)
    {
        $this->genere1 = $tipo1;
        $this->genere2 = $tipo2;
    }
}

$generefilm1 = new Genere('Azione', 'Guerra');

$generefilm2 = new Genere('Fantasy', 'Avventura');

$rambo = new Movie('Rambo', 'Lions Gate Entertainment', '114', $generefilm1, 1, 2);

$lordofthering = new Movie('The Lord of the ring', 'New Line Cinema', '221', $generefilm2, 4, 3);

var_dump($lordofthering);
var_dump($rambo);
?>