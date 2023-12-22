<?php



?>

    <main>
    <div class="container">


    <h1>Connexion :</h1>
    <form id="connexion" method="POST" action="">

        <input id="connPseudo" name="connPseudo" type="text" placeholder="Pseudo" required="required">
        <input id="connPassword" name="connPassword" type="password" placeholder="Mot de passe" required="required"> 
        <button type="submit" name="btnConnexion" > Valider </button>
    </form>
    <form method="get" action="index.php"> 
                        <input type="hidden" name="action" placeholder="Inscription">
    <input type="submit"  value="inscription">
</form>
    </div>
    </main>

</body>
</html>