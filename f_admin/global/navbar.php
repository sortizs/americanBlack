<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="../index.php">AMERICAN BLACK</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php if ($CURRENT_PAGE == "Usuarios") {?>active<?php }?>">
        <a class="nav-link" href="usuarios.php">
          <i class="fas fa-users-cog fa-sm fa-fw"></i>
          Usuarios
        </a>
      </li>
      <li class="nav-item <?php if ($CURRENT_PAGE == "Productos") {?>active<?php }?>">
        <a class="nav-link" href="productos.php">
          <i class="fas fa-boxes fa-sm fa-fw"></i>
          Productos
        </a>
      </li>
      <li class="nav-item <?php if ($CURRENT_PAGE == "Ventas") {?>active<?php }?>">
        <a class="nav-link" href="ventas.php">
          <i class="fas fa-file-alt fa-sm fa-fw"></i>
          Ventas
        </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="../php/logout.php">
          <i class="fas fa-sign-out-alt fa-sm fa-fw"></i>
          Cerrar Sesi&oacute;n
        </a>
      </li>
    </ul>
  </div>
</nav>