<?php
require_once __DIR__.'/../vendor/autoload.php';
use Geeks\controller\Autenticacion as Auth;

//Abrimos la sesion
$a=new Auth();
$error=null;

    if(isset($_POST)&&count($_POST)>0)
    {
        if($_POST["action"]=="register"){
            $error=$a->registrar($_POST);
        }elseif($_POST["action"]=="login"){
            $error=$a->logar($_POST);
            if($error==null){
                header('Location: registro.php');
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paiporta 25K</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <?php
        include __DIR__.'/../assets/menu.php';
    ?>
    <header>
        <h1>Paiporta 25K 2019!!!</h1>
    </header>
    <div class="content pagina d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/cartel.png" alt="Imagen corredores" height="200px">
            <div class="card-body">
                <h5 class="card-title">Ponte en marcha...</h5>
                <p class="card-text"></p>
                <a href="registro.php" class="btn btn-primary">Inscribirse</a>
            </div>
        </div>
    </div>        
    <footer>
        <h2>Pratocinado por el Ayuntamiento de Paiporta </h2>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>