<html>
 <head>
   <title>HandiHelp</title>
 </head>
 <body>


<?php
$page_title = "HandiHelp";

include("modele/User.php");
require_once("view/head.php");
require_once("modele/connectNav.php");

$_SESSION["page"] = "index.php";

// $data = $dbh->getBlog();

if (isset($_SESSION["userid"])) {
    echo '<a href="taskInsertForm.php">Créer une demande</a>';
}
$user = new User("albert", "prenom", "password", "mail");
$data = $user->getUser();
var_dump($data);

?>

<<<<<<< HEAD
=======
<div id="taskList">
    <ul class="taskList">

        <?php
        if (isset($data)) {
            foreach ($data as $row) {
                var_dump($row);
            }
        }
        ?>
    </ul>
</div>
>>>>>>> 7205bf345e7a38b2a36f9844e5a7c85128eaa066
</body>

</html>