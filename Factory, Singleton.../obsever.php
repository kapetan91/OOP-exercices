<?php 

class Publisher {
	private $subscribers;
	private $name;

	public function __construct($name) {
		$this->name = $name;
		$this->subscribers = [];
	}

	public function subscribe($subscriber) {
		$this->subscribers[] = $subscriber;
	}

	public function publish($message) {
		foreach ($this->subscribers as $subscriber) {
			$subscriber->notify($this, $message);
		}
	}

	public function getName() {
		return $this->name;
	}
}

class Subscriber {
	private $name;

	public function __construct($name, $publisher) {
		$this->name = $name;
		$publisher->subscribe($this);
	}

	public function notify($publisher, $message) {
		echo $this->name . ' got message from ' .
		$publisher->getName() . 
		": " . $message . "<br>";
	}
}

$publisher1 = new Publisher("Politika");
$publisher2 = new Publisher("VivifyBlog");
$subscriber1 = new Subscriber("Marko", $publisher1);
$subscriber2 = new Subscriber("Milan", $publisher1);
$subscriber3 = new Subscriber("Milica", $publisher2);
$subscriber4 = new Subscriber("Ana", $publisher2);

$publisher1->publish("Vivify Academy started");
$publisher1->publish("Start learning programming");
$publisher2->publish("A new blog about programming");
$publisher2->publish("Learn design patterns");