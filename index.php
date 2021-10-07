<html>
 <head>
   <title>HandiHelp</title>
 </head>
 <body>


<?php
$page_title = "HandiHelp";
 include ("view/library/bootstrap.html");
include("modele/User.php");
include("modele/Tasks.php");
require_once("view/head.php");
?>
<form method="post" action="view/head.php">
  <div class="form-group col-lg-2">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group col-lg-2">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
$user = new User("albert", "prenom", "password", "mail");
$data = $user->getUser();
var_dump($data);
$date_crea =  date('Y-m-d H:i:s');
$task = new Tasks("tourner la vise",$date_crea, 'Besoin Help', 1, 1, true, 'en cours');
$task->createTask();

?>

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
</body>

</html>