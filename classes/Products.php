<?php
class products
{

    protected $name;
    protected $description;
    protected $price;


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
        if (!is_numeric($price))
            throw new Exception('prezzo non valido');
        $this->price = $price;
    }



    public function setDescription($desc)
    {
        if (is_numeric($desc) || strlen($desc) <= 0) return false;
        $this->description = $desc;
        return true;
    }
}
