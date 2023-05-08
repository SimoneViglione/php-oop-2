<?php

require_once __DIR__ . '/../Traits/Calories.php';

class Cat extends Products {

    use Calories;

    public $catIcon = '<i class="fa-solid fa-shield-cat"></i>';

}

?>