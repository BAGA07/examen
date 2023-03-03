<?php
require($_SERVER['DOCUMENT_ROOT'] . '/examen/models/Etudiant.php');
require($_SERVER['DOCUMENT_ROOT'] . '/examen/DataBase/Connexion.php');

class EtudiantController
{
    public static function index()
    {
        $sql = "SELECT * FROM etudiant ";
        $request = Connexion::db()->prepare($sql);
        $request->execute();
        $etudiants = [];
        while ($row = $request->fetch()) {
            $etudiant = new etudiant;
            $etudiant->id = $row['id'];
            $etudiant->nom = $row['nom'];
            $etudiant->prenom = $row['prenom'];
            $etudiant->adresse = $row['adresse'];

            $etudiants[] = $etudiant;
        }
        var_dump($etudiants);
        die;
        return $etudiants;
    }
    /*  public static function create(Article $article)
    {
        $sql = "INSERT INTO etudiant(titre,description,price) VALUES (?,?,?)";
        $request = Connexion::db()->prepare($sql);
        return $request->execute([
            $article->titre,
            $article->description,
            $article->price,
        ]);
    }
    public static function read($id)
    {
        $sql = "SELECT * FROM article WHERE id = ?";
        $request = Connexion::db()->prepare($sql);
        $request->execute([$id]);
        $row = $request->fetch();
        $article = new Article;
        $article->id = $row['id'];
        $article->titre = $row['titre'];
        $article->description = $row['description'];
        $article->price = $row['price'];

        return $article;
    }
    public static function update(Article $article)
    {
        $sql = "UPDATE article SET titre=?, description=?, price=? WHERE id=?";
        $request = Connexion::db()->prepare($sql);

        $request->execute([
            $article->titre,
            $article->description,
            $article->price,
            $article->id,
        ]);
    }
    public static function delete($id)
    {
        $sql = "DELETE FROM article WHERE id=?";
        $request = Connexion::db()->prepare($sql)->execute([$id]);
    }
    public static function getArticleByID($id)
    {
        $sql = "SELECT * FROM article WHERE id = ?";
        $request = Connexion::db()->prepare($sql);
        $request->execute([$id]);
        $row = $request->fetch();
        $article = new Article;
        $article->id = $row['id'];
        $article->titre = $row['titre'];
        $article->description = $row['description'];
        $article->price = $row['price'];

        return $article;
    } */
}
