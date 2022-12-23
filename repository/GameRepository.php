<?php

class GameRepository
{

    private PDO $pdo;

    // Port = 3307 si MariaDB sinon (MySQL) 3306
    private string $url = 'mysql:host=127.0.0.1:3307;dbname=db-steamish-v3';
    private string $user = 'root';
    private string $pwd = '';

    public function __construct()
    {
        $this->pdo = new PDO($this->url, $this->user, $this->pwd);
    }

    /**
     * @return Game[]
     */
    public function findAll(): array {
        // Si la requête DOIT renvoyer PLUSIEURS résultats => fetchAll
        return $this->pdo
            ->query('SELECT * FROM game')
            ->fetchAll(PDO::FETCH_CLASS, Game::class);
    }

    public function findOneById(int $id): Game {
        $query = $this->pdo
            ->prepare('SELECT * FROM game WHERE game.id = ?');
        $query->bindValue(1, $id);
        $query->execute();
        // Si la requête DOIT renvoyer UN seul résultat => fetchObject
        return $query->fetchObject(Game::class);
    }

    public function findGamesBetween(DateTime $beginDate, DateTime $endDate): array {
        $query = $this->pdo
            ->prepare('SELECT * FROM game WHERE YEAR(game.published_at) BETWEEN ? AND ?');
        $query->bindValue(1, date_format($beginDate, 'Y'));
        $query->bindValue(2, date_format($endDate, 'Y'));
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, Game::class);
    }

    public function findGamesByApproxName(string $name): array {
        $query = $this->pdo
            ->prepare('SELECT * FROM game WHERE game.name LIKE :name');
        $like = '%'.$name.'%';
        $query->bindParam(':name', $like);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, Game::class);
    }

    public function addGame(Game $game): Game {
        $query = $this->pdo
            ->prepare('INSERT INTO game VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?)');
        $query->bindValue(1, $game->getPublisherId());
        $query->bindValue(2, $game->getName());
        $query->bindValue(3, $game->getPrice());
        $query->bindValue(4, $game->getPublishedAt());
        $query->bindValue(5, $game->getDescription());
        $query->bindValue(6, $game->getThumbnailCover());
        $query->bindValue(7, $game->getThumbnailLogo());
        $query->bindValue(8, $game->getSlug());
        $query->execute();
        $game->setId($this->pdo->lastInsertId());
        return $game;
    }

    public function createTableExample(): void {
        $query = $this->pdo
            ->query('CREATE TABLE example (id int(6) auto_increment not null, name varchar(255) not null, primary key(id)) engine=InnoDB;');
    }

    public function findLastReleased(int $limit = 6): array {
        $query = $this->pdo
            ->prepare('SELECT * FROM game ORDER BY game.published_at DESC LIMIT ?');
        $query->bindValue(1, $limit, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, Game::class);
    }

    public function findMostPlayed(int $limit = 6): array {
        $query = $this->pdo
            ->prepare('SELECT game.* FROM game JOIN library ON library.game_id = game.id GROUP BY game.id ORDER BY SUM(library.game_time) DESC LIMIT ?');
        $query->bindValue(1, $limit, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, Game::class);
    }

}