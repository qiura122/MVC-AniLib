<?php

class Input_model
{
    private $dbh;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=anilib';
        try {
            $this->dbh = new PDO($dsn, 'root', '');
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function AddAllAnime($judul, $deskripsi, $genre, $season, $image)
    {
        $sql = "INSERT INTO anime (judul, deskripsi, genre, season, image) VALUES (:judul, :deskripsi, :genre, :season, :image)";
        $stmt = $this->dbh->prepare($sql);

        return $stmt->execute(
            [
                ':judul' => $judul,
                ':deskripsi' => $deskripsi,
                ':genre' => $genre,
                ':season' => $season,
                ':image' => $image
            ]
        );
    }

    public function AddAllManga($judul, $deskripsi, $genre, $season, $image)
    {
        $sql = "INSERT INTO manga (judul, deskripsi, genre, season, image) VALUES (:judul, :deskripsi, :genre, :season, :image)";
        $stmt = $this->dbh->prepare($sql);

        return $stmt->execute(
            [
                ':judul' => $judul,
                ':deskripsi' => $deskripsi,
                ':genre' => $genre,
                ':season' => $season,
                ':image' => $image
            ]
        );
    }

}