<?php  

class Film {
    public $titolo;
    public $regista;
    public $casaProduttrice;
    public $annoUscita;
    private $cast = [];

    public function __construct($titolo,$regista,$casaProduttrice,$annoUscita) {
        $this->titolo = $titolo; 
        $this->regista = $regista; 
        $this->casaProduttrice = $casaProduttrice; 
        $this->annoUscita = $annoUscita; 
    }

    public function addCast(Cast $cast) {
        $this->cast[] = $cast;
    }

    public function getCast() {
        return $this->cast;
    }
}

class Cast {
    public $attore1;
    public $attore2;
    public $attore3;
    public $attore4;
    public $attore5;

    public function __construct($attore1,$attore2,$attore3,$attore4,$attore5) {
        $this->attore1 = $attore1;
        $this->attore2 = $attore2;
        $this->attore3 = $attore3;
        $this->attore4 = $attore4;
        $this->attore5 = $attore5;
    }
}

$incantata = new Film('La città Incantata','Hayao Miyazaki','Studio Ghibli', 2001);
$castIncantata = new Cast('Rumi Hīragi','Miyu Irino','Mari Natsuki','Bunta Sugawara','Akio Nakamura');
$incantata->addCast($castIncantata);

$akira = new Film('Akira','Katsuhiro Ōtomo','Akira Committee Company', 1988);
$castAkira = new Cast('Mitsuo Iwata','Nozomu Sasaki','Tarō Ishida','Mami Koyama','Tesshō Genda');
$akira->addCast($castAkira);

$ghost = new Film('Ghost in the Shell','Mamoru Oshii','Production I.G.',1995);
$castGhost = new Cast('Atsuko Tanaka','	Akio Ōtsuka','Iemasa Kayumi','Kōichi Yamadera','Tamio Ōki');
$ghost->addCast($castGhost);

var_dump($incantata);
var_dump($akira);
var_dump($ghost);