<?php include('config/navigation.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- PERSONAL -->
  <link rel="stylesheet" href="assets/css/site.css">
  <?php include('global/external-css.html') ?>
  <title><?php print $PAGE_TITLE;?> - American Black </title>
</head>
<body>
  <?php include('global/navbar.php'); ?>
  <section id="members" class="m-5">
    <h2>Equipo desarrollador</h2>
    <div class="row">
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/vanessa1.jpg" alt="Vanessa Echeverry Tamayo">
          <div class="card-body">
            <h5 class="card-title">Vanessa Echeverry Tamayo</h5>
            <p class="card-text">T&eacute;cnico en programaci&oacute;n de software</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/vanessa2.jpg" alt="Vanessa Echeverry Tamayo">
          <div class="card-body">
            <h5 class="card-title">Vanessa Valencia Carvajal</h5>
            <p class="card-text">T&eacute;cnico en programaci&oacute;n de software</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/laura.jpg" alt="Vanessa Echeverry Tamayo">
          <div class="card-body">
            <h5 class="card-title">Laura Holguin Florez</h5>
            <p class="card-text">T&eacute;cnico en programaci&oacute;n de software</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/brandon.jpg" alt="Vanessa Echeverry Tamayo">
          <div class="card-body">
            <h5 class="card-title">Brandon Perez Alzate</h5>
            <p class="card-text">T&eacute;cnico en programaci&oacute;n de software</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php 
    include('global/footer.php');
    include('login.php');
    include('global/external-js.html');
  ?>
</body>
</html>