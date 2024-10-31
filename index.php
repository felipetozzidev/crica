<?php
    if (isset($_POST['username']) || 
        isset($_POST['senha'])){
         if (strlen($_POST['username'] == 0))
           echo "Usuário requerido";
         else if (strlen($_POST['senha']) == 0)
             echo "Senha requerida";
         else {
             $usuario = $_POST['username'];
             $senha = $_POST['senha'];
             $database = 'crica';
             $host = 'localhost';
 
             $mysqli = new mysqli($host,$usuario,$senha,$database);
 
             if($mysqli->error){
                     die("erro ao conectar no banco de dados" . $mysqli->error);
             }
             else {
                 header("location: principal.php");
             }
 
         }
     }
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="src/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


<main class="main_container" data-pag="login">
    <form method="post" action="index.php" class="section_container">
        <div >
            
        </div>
        <div>
            <h1>
                Sistema integrado do IFSP
            </h1>
        </div>
        <div>
            <label for="">Usuario</label>
            <input type="text" name="username" id="">
        </div>
        <div>
            <label for="">Senha</label>
            <input type="password" name="senha" id="">
        </div>
        <div>
            <button type="submit">
                Enviar
            </button>
        </div>
    </form>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="src/js/scripts.js"></script>
</body>
</html>