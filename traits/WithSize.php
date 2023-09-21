<?php

trait WithSize
{
    // public static $adult = 'Adult Pet';
    // public static $young = 'Young pet';

    protected $size;

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getSize()
    {
        return $this->size;
    }
}
