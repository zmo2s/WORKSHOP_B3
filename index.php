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
$id_demandeur = $task->jointureNomDemandeur(1);
echo "la valeur de l'id demdandeur".$id_demandeur;
 var_dump($id_demandeur);

$task = new Tasks("tourner la vise",$date_crea, 'Besoin Help', 1, 1, true, 'en cours');
$task = $task->getTasks();
 //echo "la valeur de l'id demandeur";
// var_dump($id_demandeur);
 $task = new Tasks("tourner la vise",$date_crea, 'Besoin Help', 1, 1, true, 'en cours');

?>

<div id="taskList">
    <ul class="taskList">

        <?php
         
        if (isset($data)) {
            foreach ($data as $row) {
        echo $row->nom; ?>
        <tr id="1"><td> <?php $row->$nom ?></td></tr> <?php
            }
        }
        ?>
    </ul>
</div>


<div class="tableFixHead">
    <table id="myTable" class="table table-dark table-hover">
      <thead>
        <tr><th>nom</th><th>prenom</th><th>email</th>
      </thead>
      <tbody>
     
      <?php
      
        if (isset($data)) {
        ?>  
           <?php foreach ($data as $row) {
       ?>
        <tr><td> <?php echo (string) $row->nom ?></td><td> <?php echo (string) $row->prenom ?></td><td> <?php echo (string) $row->email ?></td></tr> 
       
         <?php
            }
        }
        
        ?>
       
        </td>

      </tbody>
    </table>
  </div>

<?php var_dump($task) ?>
  <div class="tableFixHead">
    <table id="myTable" class="table table-dark table-hover">
      <thead>
        <tr><th>Nom demandeur</th><th>Nom de la tache</th><th>Intervenant</th><th>Statut</th><th>resolu</th><th>Supprimer</th></tr>
      </thead>
      <tbody>
     
      <?php
      $cpt = 0;
        if (isset($task)) {
        ?>  
           <?php foreach ($task as $row) {
             $cpt = $cpt + 1;
       ?>
        <tr id=<?php echo $cpt ?>><td> <?php echo (string) var_dump($task->jointureNomDemandeur($row->nom)); ?></td><td> <?php echo (string) $row->nom ?></td><td> <?php echo (string) $row->id_intervenant ?></td><td> <?php echo (string) $row->statut ?></td><td><button onclick="myFunction(id)" id=<?php echo $cpt ?> type="button" class="btn btn-info"><i class="bi-check-circle" ></i></button><td><button type="button" class="btn btn-danger">  <i class="bi-trash" ></i></button></td></tr> 
       
         <?php
            }
        }
        
        ?>
       
        </td>

      </tbody>
    </table>
  </div>
  <script type="text/javascript" src="view/javascript/array.js"></script>

</body>

</html>
