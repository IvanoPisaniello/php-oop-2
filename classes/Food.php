<?php
require_once  __DIR__ . '/Products.php';
require_once __DIR__ . '/../traits/WithSize.php';

class Food extends Products
{
    use WithSize;

    protected $type = 'croccantini';
    protected $composition;
    protected $img;
    protected $species;



    public function __construct($_name, $_description, $_composition, $_price, $_img, $_species, $_size)
    {
        $this->setName($_name);
        $this->setDescription($_description);
        $this->setPrice($_price);
        $this->img = $_img;
        $this->setSpecies($_species);
        $this->setSize($_size);

        $this->setComposition($_composition);
    }

    public function getComposition()
    {
        return $this->composition;
    }

    public function getimg()
    {
        return $this->img;
    }


    public function setComposition($composition)
    {
        if (strlen($composition) <= 0) return false;
        $this->composition = $composition;
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
