<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Nous Contacter</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="../home.css" />
        <link rel="shortcut icon" href="../Data/Files/Documents-Iconographiques/fav.ico" type="image/x-icon">
    </head>
    <body>
    <?php include('C:/Users/Marin/Documents/GitHub/Ornium-Team.github.io/header.php') ?>

        <div class="main">
            <div class="phantom-container"></div>
            <h1 class="gen-title">Bienvenue sur notre page de contact!</h1>
            <div class="mail-descript">
                <p class="mail-descript-p1">Pour nous envoyer un message, merci de remplir le formulaire ci-dessous :</p>
                <form class="mailing-box" method="post" action="validation.php">
                    <div class="from"><label for="from">De : </label><input required id="from" name="from" type="email" placeholder="votreadressemail@example.com"/></div>
                    <div class="object"><label for="object">Objet : </label><input required type="text" id="object" name="object" placeholder="De quoi allez-vous parler?"/></div>
                    <div class="mail"><label for="mail">Message :</label><textarea required name="mail" id="mail" cols="30" rows="10" placeholder="Votre message"></textarea></div>
                    <input type="submit" id="submit"/>
                </form>
            </div>
            <p class="other">Et si vous ne voulez pas remplir ce formulaire pour une raison quelconque, envoyez-nous un mail à l'adresse <a href="mailto:ornium.team@gmail.com" title="ornium.team@gmail.com">ornium.team@gmail.com</a></p>
        </div>


        <footer class="footer">
            <!--Pied de page-->
            <p>Occaecat in ipsum ullamco excepteur in est consectetur aute nostrud pariatur voluptate aliquip cupidatat deserunt.</p>
        </footer>

        <script src="../home.js"></script>
    </body>
</html>