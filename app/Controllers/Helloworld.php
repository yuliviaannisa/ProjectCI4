<?php namespace App\Controllers;

class Helloworld extends BaseController {

	public function index($name, $npm)
	{
		echo $name . "<br>";
		echo $npm . "<br>";
	}
	public function show()
	{
		echo "Yulivia  Annisa Putri\n";
		echo "1857051008";
	}
}