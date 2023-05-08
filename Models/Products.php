<?php

class Products {

    public $productname;
    public $image;
    public $price;

    public function setPrice($price) {
        if (!is_numeric($price) || $price < 0) {
          throw new Exception('Il prezzo deve può essere inferiore a 0');
        }
        $this->price = $price;
    }

      public function getPrice() {
        return $this->price;
    }
}

?>