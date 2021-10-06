<div id="connect">

    <?php
        session_start();
        
        if (isset($_SESSION["userid"])) {
            // Affiche son pseudo 
            printf("<span>%s</span>
                <div id=\"signout\">
                    <a href=\"traitement/signout.php\">Se déconnecter</a>
                </div>
            ", $_SESSION['nickname']);
        }
        else{
                printf("
                <div id=\"connectForm\">
                    <form action=\"traitement/signin.php\" method=\"POST\">
                        <label for=\"nickname\">Pseudo</label>
                        <input id=\"nickname\" name=\"nickname\" type=\"text\">
            
                        <label for=\"password\">Mot de passe</label>
                        <input id=\"password\" name=\"password\" type=\"password\">
            
                        <button type=\"submit\">Connexion</button>
                    </form>
                </div>
            
                <div id=\"connectSignup\">
                    <a href=\"signupForm.php\">S'inscrire</a>
                </div>");
        }

        if(isset($_SESSION["userMessage"]))
        {
            printf( "<div>%s</div>", $_SESSION["userMessage"]);
        }
       
    ?> 

</div>
<hr>