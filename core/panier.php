<?php
session_start();
  class cart 
  {
        public $prix;
        public $nomproduit;
        public $idproduits;
        public $quantités;
    // On peux ensuite créer des methodes qui sont des fonctions
    // prix,nomduproduit,Quantité,idduproduit
    public function  addcart(){
        $this->$prix;
        $this->$nomduproduit;
        $this->$quantité;
        $this->$idduproduit;       
    }
    //session
    public function Viewcart(){
        $this->session;
    }
    //quantité,iduproduit,
    public function editcart(){
        $this->quantité; 
        $this->idproduit;
    }
    // session
    public function deletepanier(){
        $this->session;
    }
    // session 
    public function enregistrerlepanier(){
        $this->session;
    }
}
//public signifie que la variable est accessible au niveaux de la classe
//privatesig signifie que la variable est accesible depuis l'inteireure de la casse mais pas en dehors. 
//le faite de créer un objet à partir d'une classe s'apelle instancier une classe. 
//En programmation orienté objet, une classe est un modèle ou un mode d’emploi tandis que les objets sont les objets créés à partir de ce modèle
//Une classe possède un ensemble de variables, appelées propriétés ainsi qu’un ensemble de fonctions appelées méthodes.
//Il est possible de créer une classe à partir d’une classe grâce au mot-clé   new . On appelle cela une instance.
//Pour accéder aux propriétés ou aux méthodes d’une classe, on utilise le symbole  ->
//Le rôle d’un getter est de récupérer une information. Le rôle d’un setter est de définir ou de mettre à jour une information.
//Par convention, les fonctions de type getter commencent par le préfixe “get” tandis que les fonctions de type setter commencent par le préfixe “set”. Cela nous permet de rapidement les identifier.