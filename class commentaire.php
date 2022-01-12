<?php
// Je souhaite réaliser une partie commentaire pour mon site 
class Comentaires  {
 // delcaration des propriétés de mes propriété.
  public  int  $id;
  public  string $nom;
  public  string $prenom;
  public  string $email;
  public  int    $date;
  public  string $smiley;
  public  string $commentaires;
// declaration de methodes 
// J'initilise le constructeur avec mes propriété à l'interieure.
public function  __construct(string $nom , string $prenom, string $email , int $date , string $smiley , string $commentaires, int $id)
{
    // J'utilise $this pour aller chercher mes propriété
    $this->id = $id;
    $this->name = $name;
    $this->prenom = $prenom;
    $this->email = $email;
    $this->date =  $int;
    $this->smiley = $smiley;
    $this->commentaire = $commentairte;
}
  }
// J'instancie la class commentaire.
$comentaire = new comentaire();
//Je dit si la lcass commentaire est public , prive ou proteger.Mes commentaire sont public
echo $commentaire->public;
// Je procede a un heritage. La class vote heritera des propriéte de la classe commentaire. la classe permettra aux utilisateur
// de voter pour le commentaire qu'il trouve pertinent.
class vote extends comentaire {
    // Je declare un integer qui sera propre a mes votes.
    public int $numberOfVotes;
    // Je declare une propriéte $moyennedes commentaire pour faire la moyenne de l'ensemble des commentaire
    public float $moyennedescommentaire;
}
// j'instancie la class  vote 
$vote = new vote()
$vote->printitem('pris en compte'); // affichera 'vote pris en compte'
// Je procede de nouveaux a un heritage. la classe amelioration permettra aux utilisateur d'ameliorer la prise des commentaire
Class amelioration extends vote {

     // j'ai choisi de faire en sorte que lid soit en mode proteger pour qu'il soit limiter a la classe elle meme
    protected int $id;
    // j4ai decider de faire une constante qui est forcement static. Comme c'est ma derniere class , je positionne le fianl
    final public  static $name;
 
    public function  nameValues(){
        // J'utilise l'operateur de resolution de porter :: pour acceder a ma constante
        return self::staticValues
    }
}
// j'instancie ma class amelioration
$amelioration = new amelioration();
// la j'ai voulu essayer une boucle , mais je pense ne pas avoir bien compris la doc.je t'explique comment j'ai compris.
// je fait une boucle foreach qui va parocurir 
foreach ($ameliorations as $amelioration)
    print "parcour reussi";
$amelioration->nameValues();
?>