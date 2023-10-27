<?php
//On va chercher le fichier de config puisqu'il contient les infos de connexion à la BDD
require 'config.php';

//Si le formulaire est rempli, si isset renvoie true, on joue la fonction insert. Si isset est null, on ne joue rien.

if(isset($_POST["action"])) {
    if($_POST["action"] == "insert") {
        insert();
    }
}

// La fonction insert se connecte à la BDD, envoie le contenu du formulaire dans la table phpalt, dans la colonne messages
//, et mysqli query execute la requête. On finit en envoyant un message qui informe l'utilisateur que son message s'est envoyé

function insert() {
    global $conn;
    $date = date('Y-m-d');
    $messages = $_POST["Messages"]; 
    

    /*
        FONCTION 1
    */

    //Si le contenu de l'input que l'on stocke dans la variable message contient la chaine de chaine de caractère "bonjour",
    // on la remplace par "bonjour à tous et on l'ajoute au contenu du message"
    if(strstr($messages, 'bonjour')) 
    {
        $messages = str_replace('bonjour', 'bonjour a tous', $messages);
    }

// On sélectionne la totalité des données dans laquelle l'id de l'user est égal à 1 et contenant une date. Ensuite, on stock le résultat dans
// $result, et l'on prépare la requête via le query. Une fois que c'est fait, on utilise la variable $R pour envoyer le résultat en base de
//donnée
    /*
        FONCTION 2 
    */
    $rqt = "SELECT COUNT(*) AS nb FROM phpalt WHERE userId = 1 AND date = '$date'";
    $result = $conn->query($rqt);
    $R = $result->fetch_assoc();

// Si le contenu de l'input contient 0, on insert dans le message et sa date dans les infos de l'utilisateur dont l'id = 1
//Puis on exécute la requête, donc on envoie en base de donnée, avant de renvoyer le message contenu dans echo
    
    if($R['nb'] == 0)
    {
        $query ="INSERT INTO phpalt (messages, userId, date) VALUES('$messages', 1, '$date')";
        mysqli_query($conn, $query);
    }
    
}
?>

