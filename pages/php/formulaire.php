    <?php
       
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
    
        // Validation des données (exemple simple)
        if (empty($name) || empty($surname) || empty($email) || empty($subject) || empty($message)) {
            echo "Tous les champs sont obligatoires.";
        } else {
            // Envoi de l'e-mail
            //$to = "w3b.cre4@gmail.com"; // Remplacez par votre adresse e-mail
            $to = "bourdeloux.corinne@orange.fr"; // Remplacez par votre adresse e-mail
            $headers = "From: $name <$email>";
            mail($to, $sujet, $message, $headers); 
            echo "votre message a été envoyé avec succès";
            
        }
    }

      
    ?>

