<?php 
class Connexion {
    public static function db(){
        $db = new PDO("mysql:host = localhost; dbname=gestion_scolaire_db; charset=utf8",
        "root",
        "");
        return $db;
    }
}