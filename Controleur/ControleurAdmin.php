<?php
//Controleur qui gère la vue admin
class ControleurAdmin {

  private $_article;
  private $_commentaire;

  public function __construct() {
    $this->_article = new ArticleManager();
    $this->_commentaire = new CommentaireManager();
  }

  // Affiche la liste de tous les billets du blog ainsi que la liste des commentaires signalés
  // Pas d'entrée. En sortie on génère la vue admin avec un tableau contenant les objets articles et un tableau contenant
  // les objets commentaires.
  public function admin() {
    $listebillet = $this->_article->getList();
    $listecoms = $this->_commentaire->getCommentaires_is_signal();
    $vue = new Vue("Admin");
    $vue->generer(array('listebillet' => $listebillet, 'listecoms' => $listecoms));
  }
}