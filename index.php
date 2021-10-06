<html>
 <head>
   <title>HandiHelp</title>
 </head>
 <body>


<?php
$page_title = "HandiHelp";

include("modele/User.php");
include("modele/DatabaseHandler.php");
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

$date_crea =  date('Y-m-d H:i:s');
$task = new Tasks($date_crea, 'Besoin Help', 1, 1, true, 'en cours');
$task->createTask();

?>

</body>

</html>