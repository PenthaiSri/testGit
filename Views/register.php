<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="../Ressources/style.css" media="screen" type="text/css" />
        <title>Authentification</title>
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="../Database/Config.php" method="POST">
                <h1>Création de compte</h1>
                
                <label><b>Email</b></label>
                <input type="text" placeholder="Entrer votre email" name="email" required>

                <label><b>Prénom</b></label>
                <input type="text" placeholder="Entrer votre prénom" name="firstname" required>

                <label><b>Nom</b></label>
                <input type="text" placeholder="Entrer votre nom" name="lastname" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <label><b>Confirmer le mot de passe</b></label>
                <input type="password" placeholder="Retaper le mot de passe" name="confpassword" required>

                <input type="submit" id='submit' value='Créer le compte'>
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
    </body>
</html>