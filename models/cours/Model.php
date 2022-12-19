<?php

class Model
{

    use TraitName;

    private Brand $brand;

    public function getBrand(): Brand {
        return $this->brand;
    }

    public function setBrand(Brand $brand): void
    {
        $this->brand = $brand;
    }

    public function __toString(): string
    {
        return $this->brand->getName() . ' ' . $this->name;
    }

}