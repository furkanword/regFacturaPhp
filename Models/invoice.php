<?php 
    class Invoice{
        private $numberInvoice;
        private $dateInvoice;
        private $idCustomer;
        private $subtotalInvoice;
        private $taxes;
        private $total;
        private $warranty;
        public function __construct($numberInvoice, $dateInvoice, $idCustomer, $subtotalInvoice, $taxes, $total, $warranty){
            $this->numberInvoice = $numberInvoice;
            $this->dateInvoice = $dateInvoice;
            $this->idCustomer = $idCustomer;
            $this->subtotalInvoice = $subtotalInvoice;
            $this->taxes = $taxes;
            $this->total = $total;
            $this->warranty = $warranty;
        }
        public function getNumberInvoice(){
            return $this->numberInvoice;
        }
        public function getDateInvoice(){
            return $this->dateInvoice;
        }
        public function getIdCustomer(){
            return $this->idCustomer;
        }
        public function getSubtotalInvoice(){
            return $this->subtotalInvoice;
        }
        public function getTaxes(){
            return $this->taxes;
        }
        public function getTotal(){
            return $this->total;
        }
        public function getWarranty(){
            return $this->warranty;
        }
        public function setNumberInvoice($numberInvoice){
            $this->numberInvoice = $numberInvoice;
            return $this;
        }
        public function setDateInvoice($dateInvoice){
            $this->dateInvoice = $dateInvoice;
            return $this;
        }
        public function setIdCustomer($idCustomer){
            $this->idCustomer = $idCustomer;
            return $this;
        }
        public function setSubtotalInvoice($subtotalInvoice){
            $this->subtotalInvoice = $subtotalInvoice;
            return $this;
        }
        public function setTaxes($taxes){
            $this->taxes = $taxes;
            return $this;
        }
        public function setTotal($total){
            $this->total = $total;
            return $this;
        }
        public function setWarranty($warranty){
            $this->warranty = $warranty;
            return $this;
        }

    }
?>