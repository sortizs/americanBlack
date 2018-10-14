<?php
  include ("php/cart.php");
?>

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="../index.php">AMERICAN BLACK</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <!-- <li class="nav-item <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>">
        <a class="nav-link" href="index.php">
          <i class="fas fa-home fa-sm fa-fw"></i>
          Inicio
        </a>
      </li> -->
      <li class="nav-item <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>">
        <a class="nav-link" href="catalogo.php">
          <i class="fas fa-boxes fa-sm fa-fw"></i>
          Cat&aacute;logo
        </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item <?php if ($CURRENT_PAGE == "Carrito") {?>active<?php }?>">
        <a class="nav-link" href="carrito.php">
          <i class="fas fa-shopping-cart fa-sm fa-fw"></i>
          <span class="badge badge-<?php if ($CURRENT_PAGE == "Carrito") {?>light<?php } else {?>dark<?php } ?>"><?php print $cart ?></span>
        </a>
      </li>
      <!-- <li class="nav-item <?php if ($CURRENT_PAGE == "Cuenta") {?>active<?php }?>">
        <a class="nav-link" href="cuenta.php">
          <i class="fas fa-user-circle fa-sm fa-fw"></i>
          Cuenta
        </a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="../php/logout.php">
          <i class="fas fa-sign-out-alt fa-sm fa-fw"></i>
          Cerrar Sesi&oacute;n
        </a>
      </li>
    </ul>
  </div>
</nav>