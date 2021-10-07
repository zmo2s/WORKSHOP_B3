<!DOCTYPE html>
<html>
<head>
        <?php include "library/bootstrap.html";?>
        <link rel="stylesheet" href="css/table.css">
     
        <meta charset="UTF-8">
        <title>HandiHelp</title>
</head>
<body>

        <?php include "html/header/navbar.html";?>
        <div class="mt-5 ms-5">
              <div class="mt-5">
              <form>

<div class="row">
    <div class="form-group col-lg-3">
      <label for="taskName">Nom de la tache</label>
      <input type="email" class="form-control " id="taskName" aria-describedby="emailHelp" placeholder="Recupere le tournevis">
    </div>
</div>
<button type="submit" class="btn btn-primary">Ok</button>

<div class="row">
  <div class="col-2">
    <span id=service>Service :</span>
    <select name="service">
      <option value="service1">Service 1</option>
      <option value="service2">Service 2</option>
    </select>
  </div>
  <div class="col-auto">
    <span id=service>Salarié :</span>
    <select name="service">
      <option value="service1">Salarié 1</option>
      <option value="service2">Salarié 2</option>
    </select>
  </div>
</div>

<div class="row">
  <div class="col-12">
    Urgent :
    
      <input class="form-check-input" type="radio" name="urgence" id="flexRadioDefault1">
      <label class="form-check-label" for="flexRadioDefault1">Oui</label>
      <input class="form-check-input" type="radio" name="urgence" id="flexRadioDefault2">
      <label class="form-check-label" for="flexRadioDefault1">Non</label>
  </div>
</div>





</form>
<div class="mt-5" ></div>
                    <div class="mt-5" ></div>
                  <?php include "html/table/table.html";?>
              </div>
        </div>
        <script type="text/javascript" src="javascript/array.js"></script>
</body>
</html>