<!DOCTYPE html>
<html>
    <head> <meta charset="utf-8">
        <title>Acceuil</title>
            <link rel="stylesheet" href="Bootstrap/css/bootstrap.css" />
            <script type="text/javascript" src="JQuery/jquery-3.1.1.min.js"></script>
            <script src="JS/MesFonctions.js"></script>
    </head>
    <body>
        <script>
        $(document).ready(function(){
        $("#Ajouter").click(AjouterConference)
        })
        </script>
        <header>
            <h1>Devoir techdays</h1><br>
        </header>
        <main>
            <div id="Ajouter">
            <?php
                echo "<button onclick='AjouterConference' type='button' name='Ajouter'>Ajouter une conférence</button><br><br>";
            ?>
            </div>
            <?php
                echo "<button type='button' name='Noter'>Mettre une notre à une conférence</button><br><br>";
            ?>
        <div id=Ajout>
        </div>
        <div id=Noter>
        </div>
        </main>
    </body>
</html>