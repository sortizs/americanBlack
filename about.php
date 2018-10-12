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
    <section id="about" class="m-5">
        <h2>¿Qui&eacute;nes somos?</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Introducci&oacute;n</h5>
                        <p class="card-text justify">
                            AmericanBlack es un almacen de ropa que busca ampliar su comercio y ganar mas clientes.
                            el almacen se fundo en 2016 en san pedro de los milagros (ant).ofrece ropa para hombre y
                            mujer a la moda,ropa moderna y se ajusta a todo tipo de estilo actualemnte cuenta con
                            un almacen fisico ubicado en el parque central de san pedro y dandole un buen servicio al
                            cliente para
                            mayor comodidad. <br>
                            Nuestra filosofía como almacen se basa en el hecho de que la evolución y la cultura ha hecho
                            del
                            ser humano un individuo globalizado mássensible, racional y respetuoso, que se preocupa por él
                            y
                            por el bienestar de los demás, que vive para disfrutar, con mente abierta y dispuesto a
                            escuchar para
                            cambiar su pensamiento con facilidad; un individuo flexible, amoroso y reflexivo.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Marco Te&oacute;rico</h5>
                        <p class="card-text justify">
                            Internet es hoy en dia na infraestructura informatica extendida ampliamente,
                            su influencia alcanza no solo al campo de las comunicaciones entre computadoras,
                            tambien a toda la sociedad en la medida en que su uso aumenta cada vez mas para llevar acabo
                            el comercio electronico, la adquisicion de informacion y la interaccion entre la comunidad o
                            comundades remotas.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Beneficiarios</h5>
                        <p class="card-text justify">
                            Con este proyecto para el 2018 se beneficiaran principalmente los clientes
                            de el alamcen ya que tendran mas acceso a los productor y siempre estar
                            informado de la nueva mercancia que entra cada mes y asi el almacen
                            enfocarse a mejorar la atenccion al cliente.
                        </p>
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