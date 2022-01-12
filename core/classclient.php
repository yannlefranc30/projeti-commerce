<?php
//Une classe est une définition qui contient le nom des propriétés qu’on pourra manipuler ainsi que des méthodes. Les propriétés, ce sont des variables internes à cette définition dans lesquelles on stocke des valeurs.
class clients{ 
    //Une classe a aussi des méthodes : il s’agit de fonctions internes à la classe. 
    public $nom;
    public $prenom;
    public $password; 
    public $mail;
    public $id;
// Je céer un conctructeur  qui me permet d'initaliser mes propriétés 
   public function __construct( public string $id ,$nom,$prenom,$mail){
       $this->nom = $nom;// le this me permet d'aller cherhcher mes propriété.
       $this->prenom = $prenom;
       $this->mail = $mail;
   }
   // ici je declare une methode pour le mot de passe de mes clients.
   // Chaque mot de passe du client est dans ma logique privée
   // Je dit sous forme de condition que si $this va chercher ma propriété password
   // alors il affiche le mot de passe via la fonction password_hach permettant de hacher le mot de passe.
   // sion le mot de passe est incorecte.
   public function password(private string $password ){
    if($this->password)
    echo password_hash(string)
    else{
        echo 'mot de passe incorect';
    }
}
// Je declare une instance de la classe client.
$client=new Client();
// Je procéde par la suite à l'heritage. La classe adresse herite de la classe clients.
// la class clients est le parents de la classe adresse
class adresse extends clients {
    
    // je declare deux constructeurs 
        public function __construct(public string $adresse,$rue,$ville,){
          $this->adresse = $adresse;
          $this->ville = $ville;
          $this->rue = $rue;
        }
        }
        public function __construct( public int $codepostal){
            $this->codepostal = $cod;
            
        }
?>

//En programmation orienté objet, une classe est un modèle ou un mode d’emploi tandis que les objets sont les objets créés à partir de ce modèle
Une classe possède un ensemble de variables, appelées propriétés ainsi qu’un ensemble de fonctions appelées méthodes.
Il est possible de créer une classe à partir d’une classe grâce au mot-clé   new . On appelle cela une instance.
Pour accéder aux propriétés ou aux méthodes d’une classe, on utilise le symbole  ->.
//L’intérêt d’utiliser les getters et les setters est qu’il est toujours possible de récupérer la longueur, de la modifier mais en s’assurant d’effectuer certains contrôles avant (définis dans le setter).
En utilisant la staticité vous pouvez partager des valeurs, ou appeler des méthodes “utilitaires”, n’ayant pas d’impact sur l’état de l’objet.
Il est possible et recommandé de créer des constantes pour les informations qui ne changent pas, grâce au mot-clé const.
Pour appeler une propriété ou méthode statique au sein d’une classe, il faut utiliser le mot cléself.
On appelle la méthode  __construct  un constructeur.
__construct  est la méthode appelée lors de la création d’un objet ;  __destruct  lors de sa suppression de la mémoire.
En utilisant le mot clé   private, vous empêchez quiconque autre que la classe courante de manipuler les propriétés et méthodes.
En utilisant le mot clé   protected, vous donnez l'autorisation à la classe courante ainsi qu'à ses enfants de manipuler les propriétés et méthodes :) ; mais pas aux éléments extérieurs à la classe, ou extérieurs aux objets de cette classe.
Et comme nous l’avons vu précédemment, avec le mot-lé  public , il est possible de manipuler la méthode ou la propriété depuis la classe, ses classes enfants et depuis l’extérieur.
Autrement dit, pour modifier une propriété depuis un enfant, il faut qu’elle possède la visibilité public ou protected, ou qu’elle possède un mutateur.