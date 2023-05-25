<?php

namespace App\Classes;

abstract class VehiCleBase
{
    public $basicFee = 0;
    public $storage_fee = 0;
    public $price = 0;
    public $newPrice = 0;
    public $specialFee = 0;
    public $association = 0;
    public $type = "";
    public function __construct($price, $type)
    {
        $this->storage_fee = 100;
        $this->type =  ucfirst($type);
        $this->price = $price;
        $this->setValues();
        
    }
    abstract protected function calculateBasicFee($price): float;
    abstract protected function calculateSpecialFee($price): float;
    protected function calculateAssociationPrice($price): float{
        $asssociationPrice = 0;
        switch ($price) {
            case $price > 1 && $price <= 500:
                $asssociationPrice = 5;
                break;
            case $price > 500 && $price < 1000:
                $asssociationPrice = 10;
                break;
            case $price > 1000 && $price < 3000:
                $asssociationPrice = 15;
                break;
            case $price > 3000:
                $asssociationPrice = 20;
                break;
        }
        return $asssociationPrice;
    }
    protected function setValues()
    {
        $this->basicFee = $this->calculateBasicFee($this->price);
        $this->specialFee = $this->calculateSpecialFee($this->price);
        $this->association = $this->calculateAssociationPrice($this->price);
        $this->newPrice = $this->price + $this->basicFee + $this->specialFee + $this->association +  $this->storage_fee ;
    }
}



