<?php 

trait Calories {

    public $calories;
    public $measureUnit;

    public function setCalories(Int $calories, String $measureUnit) {

        $this->calories = $calories;
        $this->measureUnit = $measureUnit;

    }

    public function getCalories() {
        return $this->calories . ' ' . $this->measureUnit;
    }

}