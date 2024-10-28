<?php

class Home_model
{
    private $dbh;
    private $stmt;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=anilib';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllAnime()
    {
        $this->stmt = $this->dbh->prepare('select*from anime');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAnimeById($id)
    {
        $this->stmt = $this->dbh->prepare('select*from anime where id = :id');
        $this->stmt->bindParam(':id', $id);
        $this->stmt->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllManga()
    {
        $this->stmt = $this->dbh->prepare('select*from manga');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMangaById($id)
    {
        $this->stmt = $this->dbh->prepare('select*from manga where id = :id');
        $this->stmt->bindParam(':id', $id);
        $this->stmt->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

}

?>