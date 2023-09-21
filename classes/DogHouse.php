<?php
include_once  __DIR__ . '/products.php';
include_once __DIR__ . '/../traits/WithSize.php';

class DogHouse extends Product
{
    use WithSize;

    protected $type = 'cuccia';
    protected $material;
    protected $img;
    protected $species;



    public function __construct($_name, $_description, $_material, $_price, $_img, $_species, $_size)
    {
        $this->setName($_name);
        $this->setDescription($_description);
        $this->setPrice($_price);
        $this->img = $_img;
        $this->setSpecies($_species);
        $this->setSize($_size);

        $this->setMaterial($_material);
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function getimg()
    {
        return $this->img;
    }


    public function setMaterial($material)
    {
        if (strlen($material) <= 0) return false;
        $this->material = $material;
        return true;
    }

    public function getSpecies()
    {
        return $this->species;
    }

    public function setSpecies($species)
    {
        if (in_array($species, ['cane', 'gatto'])) {
            $this->species = $species;
            return true;
        }
        return false;
    }
}
