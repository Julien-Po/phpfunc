<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h2 class="pageTitle"> Add Message </h2>
    <div class="container">
 <!--Création du formulaire, avec un input text puisque l'on va envoyer un message -->
        <form autocomplete="off" action="" method="post">
            <input type="text" id="Messages" value="" placeholder="message">
<!--On définit le type du bouton et l'action qu'il doit jouer lors de la soumission du formulaire -->
            <button type="button" id="messageButton" class="btn btn-primary" onclick="submitData('insert');">Envoyer le message</button>
        </form>
    </div>
    <div class="hiddenMessage">
        <p>"Message envoyé avec succès !"</p>
    </div>
<!--On va chercher le fichier script, dans lequel on définit notamment les actions de submitData -->
    <?php require 'script.php'; ?>
</body>

</html>


