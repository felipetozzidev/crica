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

    <main class="main_container" data-pag="menu_v2">
        <ul>
            <li>
                <div class="item_menu">
                    <i class="ri-graduation-cap-fill"></i>
                </div>
                <span>
                    Alunos
                </span>
            </li>
            <li>
                <div class="item_menu">
                    <i class="ri-book-open-fill"></i>
                </div>
                <span>
                    Cursos
                </span>
            </li>
            <li>
                <div class="item_menu">
                    <i class="ri-book-shelf-fill"></i>
                </div>
                <span>
                    Disciplinas
                </span>
            </li>
            <li>
                <div class="item_menu">
                    <i class="ri-presentation-fill"></i>
                </div>
                <span>
                    Professores
                </span>
            </li>
            <li>
                <div class="item_menu">
                    <i class="ri-time-fill"></i>
                </div>
                <span>
                    Horarios
                </span>
            </li>
            <li>
                <div class="item_menu">
                    <i class="ri-door-open-fill"></i>
                </div>
                <span>
                    Salas
                </span>
            </li>
        </ul>  
    </main>

    <?php
    include_once("parts/footer.html")
    ?>
</body>

</html>