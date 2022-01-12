<?php
if( isset($_POST['submit']) )//button clicked 
{    
  // assigning vars from form
  $nom = htmlentities($_POST["nom"]);
  $prenom = htmlentities($_POST["prenom"]);
  $login = htmlentities($_POST["login"]);
  $password = password_hash(htmlentities($_POST["password"]), PASSWORD_BCRYPT);
  $mail = htmlentities($_POST["mail"]);
  $tel = htmlentities($_POST["tel"]);

  // checking form completion
  if( (!empty($nom)) && (!empty($prenom)) && (!empty($login)) && (!empty($password)) && (!empty($mail)) && (!empty($tel)) )// form is completed
  { 
    $sqlQuery ='INSERT INTO client (Client_Nom, Client_Prenom, Client_Login, Client_Password, Client_Mail, Client_Tel) 
                VALUES (?,?,?,?,?,?)';
    $stmt = $db->prepare($sqlQuery);
    $stmt->execute([$nom,$prenom,$login,$password,$mail,$tel]);

    $sqlQuery ="SELECT Client_Id
                FROM client
                WHERE Client_Login = ?";
    $stmt = $db->prepare($sqlQuery);
    $stmt->execute([$login]);
    $count = $stmt->rowCount();
    $row = $stmt->fetch();
    
    $_SESSION["Client_Id"] = $row["Client_Id"];
    $_SESSION["Client_Prenom"] = $prenom;

    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'index.php';
     header("Location: http://$host$uri/$extra");
    exit;
  }
  else
  {
    // returning form incompletion
    $formcomplete = false;
  }
}
?>