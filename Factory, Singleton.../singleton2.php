<?php

class Logger {
	private static $instance;

	private function __construct() { }

	static function getInstance() {
		if (self::$instance == NULL) {
			self::$instance = new Logger();
		}

		return self::$instance;
	}

	public function log($message) {
		echo "<br>" . date('Y:m:d H:i:s') . "> ". $message;
	}
}

Logger::getInstance()->log('My first message');
Logger::getInstance()->log('My second message');
Logger::getInstance()->log('My third message');

