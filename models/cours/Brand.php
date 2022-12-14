<?php

class Brand
{

    public function __construct(
        private int $id,
        private string $name
    ) { }

    /**
     * GETTER =>
     * On veut récupérer la valeur d'un attribut en DEHORS DE LA CLASSE (attribut private)
     * Ici il s'agit de l'attribut "name"
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * SETTER =>
     * On veut modifier la valeur de l'attribut EN DEHORS DE LA CLASSE (attribut private)
     * Ici il s'agit de l'attribut "name"
     * @param string $name
     */
    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function __toString(): string
    {
        return 'ID : @' . $this->id . ' - ' . $this->name;
    }

}
