<?php
class Counter {
    private static $instance;
    private $count;

    private function __construct() {
        $this->count = 0;
    }

    static function getInstance() {
        if (self::$instance == NULL) {
            self::$instance = new Counter();
        }

        return self::$instance;
    }

    public function incrementCount() {
        $this->count++;
    }

    public function getCount() {
        return $this->count;
    }
}

var_dump(Counter::getInstance()->getCount()); // 0
Counter::getInstance()->incrementCount();
Counter::getInstance()->incrementCount();
Counter::getInstance()->incrementCount();
var_dump(Logger::getInstance()->getCount()); // 3

