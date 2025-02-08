    <?php
    

    $serveur = "mysql-web-cre4.alwaysdata.net";
    $dbname = "web-cre4_admin";
    $user = "web-cre4";
    $pass = "LandesAntibes0640@";
    
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On crée une table form
        $form = "CREATE TABLE form(
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nom TEXT,
            prenom TEXT,
            email INT,
            sujet TEXT,
            message TEXT)";
        $dbco->exec($form);
    }
    catch(PDOException $e){
        echo 'Erreur : '.$e->getMessage();
    }



   /* echo 'Nom : '$_POST["nom"].'<br>';
    echo 'Prénom : '$_POST["prenom"].'<br>';
    echo 'E-mail : '$_POST["email"].'<br>';
    echo 'Sujet : '$_POST["sujet"].'<br>';
    echo 'Message : '$_POST["message"].'<br>';*/
    ?>

