<?php 
    class Product{
        private $idProduct;
        private $name;
        private $price;
        private $quantity;
        public function __construct($idProduct, $name, $price, $quantity){
            $this->idProduct = $idProduct;
            $this->name = $name;
            $this->price = $price;
            $this->quantity = $quantity;
        }
        public function getIdProduct(){
            return $this->idProduct;
        }
        public function setIdProduct($idProduct){
            $this->idProduct = $idProduct;
            return $this;
        }
        public function getName(){
            return $this->name;
        }
        public function setName($name){
            $this->name = $name;
            return $this;
        }
        public function getPrice(){
            return $this->price;
        }
        public function setPrice($price){
            $this->price = $price;
            return $this;
        }
        public function getQuantity(){
            return $this->quantity;
        }
        public function setQuantity($quantity){
            $this->quantity = $quantity;
            return $this;
        }
    }
?>