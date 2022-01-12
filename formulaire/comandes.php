<?php
function ajouter($rue)// ce qui est mis à l'interieur de la fonction se nomme les parametres.
{
    if (require("database.php")) 
    {
        $req = $access->prepare("INSERT INTO podcast VALUES ()");
        $req->execute();
        $req->closecursor();
    }
}
function afficher()
{
    if(require("database.php"))
    {
        $req=$access->prepare("SELECT * FROM podcast ORDER BY id DESC");
        $req->execute();
        $data =$req->fetchall(PDO::FETCH_OBJ);

        return $data;
        $req->closecursor();
    }
}
function supprimer($id)
{
    if (require("database.php")) 
    {
        $req=$access->prepare("DELETE * FROM podcast where id=?");
        $req->execute(array($id));
    }
}
?>