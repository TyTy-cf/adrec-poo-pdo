<?php

class Brand
{

    use TraitName;

    public function __construct(
        private int $id,
        private string $name
    ) { }

    public function __toString(): string
    {
        return 'ID : @' . $this->id . ' - ' . $this->name;
    }

}
