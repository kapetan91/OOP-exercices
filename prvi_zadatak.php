<?php
class BankAccount {
	public static $count = 0;
	protected $stanjeRacuna;
	public $racunBlok = false; 

	public function __construct($stanjeRacuna, $racunBlok){
		self::$count++;
		$this->name = $;
		echo "Stanje racuna je: " . self::$count . "<br>";
		$this->stanjeRacuna=$stanjeRacuna;
		$this->racunBlok=$racunBlok;
	}

	public function getStanje($stanje){
		$this->stanjeRacuna=$stanje;
		if ($stanjeRacuna <= -200){
			$this->racunBlok = true; 
			echo "nemas dovoljno para"
		}

	}
}
 class User {
 	private $ime;
 	private $prezime;
 	public $brojRacuna;

 	public function __construct($ime, $prezime, $brojRacuna, $stanjeRacuna, $racunBlok){

 		parent::__construct($brojRacuna, $stanjeRacuna);
 		$this->ime=$ime;
 		$this->prezime=$prezime;
 		$this->brojRacuna=$brojRacuna;
 	}

 	public function uplatitiPare(){
 		if ($racunBlok === false) {

 		}
 		else (){
 			echo "zahtev odbijen"
 		}
 	}
 	public function podiciPare(){
 		if ($racunBlok === false){

 		}
 	else{
 		echo "zahtev odbijen"
 	}

 	}

 	public function newAccount(){
 		$obj = new BankAccount($stanjeRacuna, $racunBlok);

		return $this->stanjeRacuna=$obj;
		
 	}
 	
	
  
 }

 $racun = new BankAccount();
 $racun -> newAccount (200, "" )


?>
	


Napraviti klase BankAccount (predstavlja bankovni racun) i User (predstavlja osobu tj. korisnika).
Bankovni racun treba da je opisan trenutnim stanjem na racunu i poljem da li je blokiran ili ne.
Korisnik treba da je opisan imenom, prezimenom i svojim bankovnim racunom.
Inicijalni balans bankovnog racuna je 0.
Korisnik moze da podigne ili uplati novac na bankovni racun (osim ako bankovni racun nije blokiran).
Ukoliko stanje bankovnog racuna dostigne -200 ili manje, bankovni racun postaje blokiran sve dok korisnik ne uplati dovoljno sredstava tako da je racun na nuli.
