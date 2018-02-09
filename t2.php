<?php

interface Plant{
	function getType();
}

//定义接口
interface Animal{
    function getName();
    function getAge();
    function getSex();
}


class Dog implements Animal
{
	private $name = "Dog";

	function getName() {
		return $this->name;
	}

	function getAge() {
		return 18;
	}

	function getSex() {
		return "male";
	}

	function getType() {
		return "200";
	}
}


class Pig implements Animal, Plant
{
	private $name = "Pig";

	function getName() {
		return $this->name;
	}

	function getAge() {
		return 16;
	}

	function getSex() {
		return "female";
	}

	function getType() {
		return "100";
	}
}

class Behavior {

	var $word = "Welcome to China.";
	var $an;

	function say(Animal $an) {
		$this->an = $an;
		$name = $this->an->getName();
		$type = $this->an->getType();
		echo $name. " " .$this->word . " " . $type;
	}

} 

$display = new Behavior();
$display ->say(new Dog);

?>