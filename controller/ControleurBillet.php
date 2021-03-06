<?php

require_once 'model/billet.php';
require_once 'model/commentaires.php';
require_once 'view/viewClass.php';

class ControleurBillet {

  private $billet;
  private $commentaire;

  public function __construct() {
    $this->billet = new Billet();
    $this->commentaire = new Commentaire();
  }

  // Affiche les détails sur un billet
  public function billet($idBillet) {
    $billet = $this->billet->getBillet($idBillet);
    $commentaires = $this->commentaire->getCommentaires($idBillet);
    $vue = new View("Billet");
    $vue->generer(array('billet' => $billet, 'commentaires' => $commentaires));
  }
  
	// Ajoute un commentaire
	public function commenter($auteur, $contenu, $idBillet) {
		$this->commentaire->ajouterCommentaire($auteur, $contenu, $idBillet);
		$this->billet($idBillet);
	}

}