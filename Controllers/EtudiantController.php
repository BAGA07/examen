<?php
require($_SERVER['DOCUMENT_ROOT'] . '/examen_atelier/models/Etudiant.php');
require($_SERVER['DOCUMENT_ROOT'] . '/examen_atelier/DataBase/Connexion.php');

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
            $etudiant->date_naissance = $row['date_naissance'];
            $etudiant->email = $row['email'];
            $etudiant->telephone = $row['telephone'];

            $etudiants[] = $etudiant;
        }
        return $etudiants;
    }
   public static function create(Etudiant $etudiant)
    {
        $sql = "INSERT INTO etudiant(nom,prenom,adresse,date_naissance,email,telephone) VALUES (?,?,?,?,?,?)";
        $request = Connexion::db()->prepare($sql);
        return $request->execute([
            $etudiant->nom,
            $etudiant->prenom,
            $etudiant->adresse,
            $etudiant->date_naissance,
            $etudiant->email,
            $etudiant->telephone,
        ]);
    } 
    
    
    
    /*  
    public static function read($id)
    {
        $sql = "SELECT *
        FROM aliment
        JOIN famille ON aliment.famille_id = famille.id
        WHERE aliment.nom = "haricots verts"; WHERE id = ?";
        $request = Connexion::db()->prepare($sql);
        $request->execute([$id]);
        $row = $request->fetch();
        $etudiant = new Etudiant;
        $etudiant->id = $row['id'];
        $etudiant->nom = $row['nom'];
        $etudiant->prenom = $row['prenom'];
        $etudiant->adresse = $row['adresse'];
        $etudiant->date_naissance = $row['date_naissance'];
        $etudiant->email = $row['email'];
        $etudiant->telephone = $row['telephone'];

        return $etudiant;
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
?>