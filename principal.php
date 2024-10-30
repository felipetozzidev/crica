<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>

<body>
    <?php
    include_once("parts/header.html")
    ?>

    <main class="main_container" data-pag="menu">
        <div>
            <a href="submenu?index=alunos">
                Alunos
            </a>
            <a href="submenu?index=cursos">
                Cursos
            </a>
        </div>
        <div>
            <a href="submenu?index=disciplinas">
                Disciplinas
            </a>
            <a href="submenu?index=professores">
                Professores
            </a>
        </div>
        <div>
            <a href="submenu?index=horarios">
                Horários
            </a>
            <a href="submenu?index=salas">
                Salas
            </a>
        </div>  
    </main>

    <?php
    include_once("parts/footer.html")
    ?>
</body>

</html>