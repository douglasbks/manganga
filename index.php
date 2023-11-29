<?php $_GET['pag'] = $_GET['pag'] ?? 'home'?>
<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mangangá Site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/362b02afb6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<script>
    function subirSite() {
        document.getElementById('cabecalho').scrollIntoView({ behavior: 'smooth' });
    }
</script>
<body>
<div class="container">
    <?php include('cabecalho.php');
    include("view/{$_GET['pag']}.php");
    include('contato.php');
    include('rodape.php');
    ?>
</div>
</body>
</html>