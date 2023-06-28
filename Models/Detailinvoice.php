<?php 
    class DetailInvoice{
        private $idDetailInvoice;
        private $idInvoice;
        private $idProduct;
        private $quantity;
        private $price;
        public function __construct($idDetailInvoice,$idInvoice, $idProduct, $quantity, $price){
            $this->idDetailInvoice = $idDetailInvoice;
            $this->idInvoice = $idInvoice;
            $this->idProduct = $idProduct;
            $this->quantity = $quantity;
            $this->price = $price;
        }
        public function getIdDetailInvoice(){
            return $this->idDetailInvoice;
        }
        public function setIdDetailInvoice($idDetailInvoice){
            $this->idDetailInvoice = $idDetailInvoice;
            return $this;
        }
        public function getIdInvoice(){
            return $this->idInvoice;
        }
        public function setIdInvoice($idInvoice){
            $this->idInvoice = $idInvoice;
            return $this;
        }
        public function getIdProduct(){
            return $this->idProduct;
        }
        public function setIdProduct($idProduct){
            $this->idProduct = $idProduct;
            return $this;
        }
        public function getQuantity(){
            return $this->quantity;
        }
        public function setQuantity($quantity){
            $this->quantity = $quantity;
            return $this;
        }
        public function getPrice(){
            return $this->price;
        }

    }