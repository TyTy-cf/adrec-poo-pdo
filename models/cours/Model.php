<?php

class Model
{

    private string $name;

    private Brand $brand;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

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