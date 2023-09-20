<?php
class product
{

    protected $name;
    protected $description;
    protected $price;

    // public function __construct($_name, $_description, $_price)
    // {
    //     $this->setName($_name);
    //     $this->setDescription($_description);
    //     $this->setPrice($_price);
    // }

    public function getName()
    {
        return $this->name;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getPrice()
    {
        return $this->price;
    }


    public function setName($name)
    {
        if (is_numeric($name) || !$name) return false;
        $this->name = $name;
        return true;
    }

    public function setPrice($price)
    {
        if (!is_numeric($price)) return false;
        $this->price = $price;
        return true;
    }

    public function setDescription($desc)
    {
        if (is_numeric($desc) || strlen($desc) <= 0) return false;
        $this->description = $desc;
        return true;
    }
}
