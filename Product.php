<?php

// class Product
class Product
{
    protected $name;
    protected $price;
    protected $stock;

    public function __construct($name, $price, $stock)
    {
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }

    public function showInformation()
    {
        return 'Nama : ' . $this->name . ' , Harga : ' . number_format($this->price, 0, ' ', '.') . ' , Stock : ' . $this->stock;
    }
}

// class turunan dari Product

class ProductElectronic extends Product
{
    private $discount = 40;

    public function calculateDiscount()
    {
        $diskon = $this->price * ($this->discount / 100);
        return 'Harga setelah diskon : ' . number_format($this->price - $diskon, 0, ' ', '.');
    }

    public function showInformation()
    {
        return parent::showInformation() . '<br>' . $this->calculateDiscount();
    }

}

class ProductFashion extends Product
{
    private $discount = 20;

    public function calculateDiscount()
    {
        $diskon = $this->price * ($this->discount / 100);
        return 'Harga setelah diskon : ' . number_format($this->price - $diskon, 0, ' ', '.');
    }

    public function showInformation()
    {
        return parent::showInformation() . '<br>' . $this->calculateDiscount();
    }

}


// instansiasi objek

$hp = new ProductElectronic('Oppo A5S', 2500000, 27);
echo $hp->showInformation();

echo '<hr>';

$polo = new ProductFashion('Kaos Polo', 400000, 78);
echo $polo->showInformation();