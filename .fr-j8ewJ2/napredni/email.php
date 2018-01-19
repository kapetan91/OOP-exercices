<?php
class Email {
	private $adresa;
	private $tema;
	private $tekst;

	public function __construct ($adresa, $tema, $tekst){
		$this->adresa = $adresa;
		$this->tema = $tema;
		$this->tekst = $tekst;
	}

	
	
}

class MailService {
	private static $instances; 


	public static function sendMail($instances)
    {
    	if (self::$instances == NULL){
        	self::$instances = new Email();
    	}

    	return self::$instances;
    }

  

}

