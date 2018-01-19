<?php 
interface  Usluge {
	public function kupatilo();
	public function balkoni();
}
class Hotel {

	private static $instance;
	protected $listaSoba;
	protected $dostupneSobe;

	public function izdajSobu($sifra, $brojKreveta){
		if ($brojKreveta === 1){
			return new Jednokrevetna($sifra);
		}
		elseif ($brojKreveta === 2){
			return new Dvokrevetna($sifra);
		}
		elseif ($brojKreveta === 3){
			return new Trokrevetna($sifra);
		}
		else {
			echo "Nema dostupnih soba!";
			return;
		}

	}

    private function __construct() {
    	$this->listaSoba = [];
    }

    static function getInstance() {
        if (self::$instance == NULL) {
            self::$instance = new Hotel();
        }

        return self::$instance;
    }

    public function dodajSobu($brojKreveta) {
        $this->listaSoba++;
    }

    public function getSoba() {
        return $this->listaSoba;
    }

}

class Recepcija {
	public $naziv;
	public $korisnici;

	public function __construct($naziv) {
		$this->korisnici = [];
	}

	public function pretplata($korisnik) {
		$this->korisnici[] = $korisnik;
	}

	public function informacija($message) {
		foreach ($this->korisnici as $korisnik) {
			$korisnik->poruka($this, $message);
		}
	}


}

abstract class Sobe implements Usluge{
	private static $sifra;
	protected $kupatilo = 0;
	protected $balkon = 0;
	public $dostupneSobe;

	public function __construct($sifra) {
		$this->sifra = $sifra;
	}

	public function kupatilo(){
		return $this->privatnoKupatilo = TRUE;
	}

	public function balkoni(){
		return $this->balkon = TRUE;
	}

}

class Jednokrevetna extends Sobe {
	protected $count = 0;

		public function __construct($sifra){
		parent::construct($sifra);
		++$this->count;
	}
}

class Dvokrevetna extends Sobe {
	protected $count = 0;

		public function __construct($sifra){
		parent::construct($sifra);
		++$this->count;
	}
}

class Trokrevetna extends Sobe {
	protected $count = 0;

		public function __construct($sifra){
		parent::construct($sifra);
		++$this->count;
	}

}
class Korisnik {
	private $ime;
	private $prezime;
	private $jmbg;

	public function __construct($name, $prezime, $jmbg, $recepcija){
		$this->name = $name;
		$this->prezime = $prezime;
		$this->jmbg = $jmbg;
		$recepcija->pretplata($this);
	}

	public function poruka($recepcija, $message){
		echo $this->name . "," . " " . $message . "<br>";
	}

}

$recepcionar = new Recepcija ("Hotel Gucevo");
$korisnik = new Korisnik ("Marko", "Markovic", 555555, $recepcionar);
$recepcionar -> informacija("soba koju ste zahtevali trenutno je slobodna.");
$gost = Hotel::izdajSobu('gaga', 1);
Hotel::getInstance($gost)->dodajSobu();
var_dump($gost);



