<?php
//Controleur qui gère la vue accueil
class ControleurAccueil {

  private $_article;

  public function __construct() {
    $this->_article = new ArticleManager();
  }

  // Reset des variables stockées en session et appel de la fonction accueil().
  // Pas d'entrée. En sortie, on génère la vue accueil.
  public function deconnexion() {
    $_SESSION = array();
    $this->accueil();
  }
  
  // Affiche la liste de tous les billets du blog.
  // Pas d'entrée. En sortie, on génère la vue accueil avec un tableau $billets contenant les objets articles.
  public function accueil() {
    $billets = $this->_article->getList();
    $vue = new Vue("Accueil");
    $vue->generer(array('billets' => $billets));
  }

  
}