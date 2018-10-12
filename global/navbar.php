<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="../index.php">AMERICAN BLACK</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-home fa-sm fa-fw"></i>
                    Inicio
                </a>
            </li>
            <li class="nav-item <?php if ($CURRENT_PAGE == "About") {?>active<?php }?>">
                <a class="nav-link" href="about.php">
                    <i class="fas fa-info-circle fa-sm fa-fw"></i>
                    ¿Qui&eacute;nes somos?
                </a>
            </li>
            <li class="nav-item <?php if ($CURRENT_PAGE == "Members") {?>active<?php }?>">
                <a class="nav-link" href="members.php">
                    <i class="fas fa-users fa-sm fa-fw"></i>
                    Integrantes
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#login">
                    <i class="fas fa-sign-in-alt fa-sm fa-fw"></i>
                    Iniciar Sesi&oacute;n
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($CURRENT_PAGE == "Signup") {?>active<?php }?>" href="signup.php">
                    <i class="fas fa-file-signature fa-sm fa-fw"></i>
                    Reg&iacute;strate
                </a>
            </li>
        </ul>
    </div>
</nav>