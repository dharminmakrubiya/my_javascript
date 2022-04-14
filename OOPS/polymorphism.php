<?php

abstract class Person
{
	abstract public function one();
}

class English extends Person
{
	public function one()
	{
		return 'Hello How Are You!';
	}
}

class Gujrati extends Person
{
	public function one()
	{
		return 'Kem Che!';
	}
}

class Hindi extends Person
{
	public function one()
	{
		return 'Kese Ho!';
	}
}

function polymorphism($people)
{
	foreach ($people as $person) {
		echo $person->one() . '<br>';
	}
}


$people = [
	new English(),
	new Gujrati(),
	new Hindi()
];

polymorphism($people);