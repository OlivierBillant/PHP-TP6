<?php
/*
Créer une classe nommée Form représentant un formulaire HTML. Le constructeur doit créer le code d’en-tête du formulaire en utilisant les éléments <form> et <fieldset>. 	 
Une méthode setText() doit permettre d’ajouter une zone de texte. 	 
Une méthode setSubmit() doit permettre d’ajouter un bouton d’envoi. 	 
Les paramètres de ces méthodes doivent correspondre aux attributs des éléments HTML correspondants.  

La méthode getForm() doit retourner tout le code HTML de création du formulaire.  

Créer des objets Form et y ajouter deux zones de texte et un bouton d’envoi.  

Tester l’affichage obtenu.
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>TP OOP Forms</title>
</head>

<body>
    <div class="container">
        <h1>TP6 OOP forms</h1>

        <?php
        require_once "Form.class.php";
        $formulaire = new Form();
        $formulaire->setText();
        $formulaire->setText();
        $formulaire->setText();
        $formulaire->setText();
        $formulaire->setSubmit();
        echo $formulaire->getForm();
        ?>

    </div>
</body>

</html>