<?php
// Classe abstraite modèle qui permet la connexion à la bdd
abstract class Modele
{
    protected $_db;

    public function __construct()
    {
        $db = new PDO('mysql:host=db710898991.db.1and1.com;dbname=db710898991;charset=utf8', 'dbo710898991', 'Soundlike21@');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $this->_db = $db;
    }
}