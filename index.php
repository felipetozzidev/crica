<?php
    include_once("parts/header.html");
?>

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
                 header("location: principal_v2.php");
             }
 
         }
     }
     
?>

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

<?php
    include_once("parts/footer.html")
?>