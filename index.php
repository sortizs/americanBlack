<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/site.css">
    <?php include('template/external-css.html') ?>
    <title>{{ title }} - American Black </title>
</head>
<body>
    <?php include('template/navbar.html') ?>
    <?php include('template/carousel.html') ?>
    <?php include('template/project.html')?>
    <?php include('template/about.html')?>
    <?php include('template/members.html')?>
    <?php include('template/footer.html')?>
    <?php include('auth/login.php')?>
    <?php include('template/external-js.html') ?>
</body>
</html>