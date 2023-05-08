<?php

require_once __DIR__ . '/../Traits/Calories.php';

class Dog extends Products {

    use Calories;

    public $dogIcon = '<i class="fa-solid fa-shield-dog"></i>';

}

?>