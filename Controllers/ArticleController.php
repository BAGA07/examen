<?php
require($_SERVER['DOCUMENT_ROOT'].'/examen_atelier/models/Article.php');
require($_SERVER['DOCUMENT_ROOT'].'/examen_atelier/DataBase/Connexion.php');

class ArticleController {
    public static function index () {
        $sql = "SELECT * FROM article ";
        $request = Connexion::db()->prepare($sql);
        $request->execute();
        $articles = [];
        while ($a = $request->fetch()) {
            $article = new Article;
            $article->id = $a['id'];
            $article->titre = $a['titre'];
            $article->description = $a['description'];
            $article->price = $a['price'];
            
            $articles[] = $article; 
        }
        return $articles;
    }
    public static function create (Article $article) {
        $sql = "INSERT INTO article(titre,description,price) VALUES (?,?,?)";
        $request= Connexion::db()->prepare($sql);
        return $request->execute([
            $article->titre,
            $article->description,
            $article->price,
        ]);
    }
    public static function read ($id) {
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
    public static function update (Article $article) {
        $sql = "UPDATE article SET titre=?, description=?, price=? WHERE id=?";
        $request = Connexion::db()->prepare($sql);
       
        $request->execute([
            $article->titre,
            $article->description,
            $article->price,
            $article->id,
        ]);
        
    }
    public static function delete ($id) {
        $sql = "DELETE FROM article WHERE id=?";
        $request = Connexion::db()->prepare($sql )->execute([$id]);
    }
    public static function getArticleByID ($id) {
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
}