<?php
session_start();
if(isset($_POST['email']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'projet';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('Connexion à la base de données impossible');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $sEmail = mysqli_real_escape_string($db,htmlspecialchars($_POST['email'])); 
    $sPassword =  mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
    $sHashPassword = password_hash($sPassword, PASSWORD_DEFAULT);
    
    if($sEmail !== "" && $sPassword !== "")
    {
        $requete = "SELECT count(*) FROM t_users where 
              usr_email = '".$sEmail."' and usr_password = '".$sHashPassword."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['email'] = $sEmail;
           header('Location: ../Views/index.php');
        }
        else
        {
           header('Location: ../Views/login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: ../Views/login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: ../Views/login.php');
}
mysqli_close($db); // fermer la connexion
?>