<?php
// Controleur qui gère la connexion au back office
class ControleurConnexion {

    // Fonction qui renvoi la vue admin si ce dernier est loggé sinon renvoi la vue du formulaire de connexion.
    public function connexion() {
        if (isset($_SESSION['nom']) AND isset($_SESSION['is_admin']))
        {
            $vue = new ControleurAdmin;
            $vue->admin();
        }
        else
        {
            $vue = new Vue("Connexion");
            $vue->generer($test);
        }
    }
}