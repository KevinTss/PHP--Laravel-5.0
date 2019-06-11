<?php

namespace App\Http\Controllers;

class CarController {

	public function index() {
		return "List of cars";
	}

	public function getOne($model) {
		return "This is a $model";
	}

}