<?php

abstract class AbstractRepository
{

    protected PDO $pdo;

    // Port = 3307 si MariaDB sinon (MySQL) 3306
    private string $url = 'mysql:host=127.0.0.1:3307;dbname=db-steamish-v3';
    private string $user = 'root';
    private string $pwd = '';
    private string $lowerClassName;

    public function __construct(protected string $className)
    {
        $this->pdo = new PDO($this->url, $this->user, $this->pwd);
        $this->lowerClassName = strtolower($this->className);
    }

    /**
     * @return array
     */
    public function findAll(): array {
        // Si la requête DOIT renvoyer PLUSIEURS résultats => fetchAll
        return $this->pdo
            ->query('SELECT * FROM ' . $this->lowerClassName)
            ->fetchAll(PDO::FETCH_CLASS, $this->className);
    }

    public function findOneById(int $id): mixed {
        $query = $this->pdo
            ->prepare('SELECT * FROM ' . $this->lowerClassName . ' WHERE id = ?');
        $query->bindValue(1, $id);
        $query->execute();
        // Si la requête DOIT renvoyer UN seul résultat => fetchObject
        return $query->fetchObject($this->className);
    }

    public function findBy(
        array $columns,
        string $orderBy = null,
        string $direction = null,
        int $limit = null
    ): mixed {
        // $columns : ['name' => 'Pokémon Violet']
        // $orderBy : nom de colonne
        // $direction : ASC ou DESC
        // $limit : la limit, doh
        // $objects = fetchAll(....)
        // => si size = 1; alors return $objects[0]
        // sinon return $objects
    }

}