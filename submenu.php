<?php
    include_once("parts/header.html")
?>

<main class="submenu">
    <nav class="menu_lateral">
        <ul>
           <?php
            $menu = $_GET['index'];
            $alunos = ["Cadastro", "Boletim", "matrícula", "Disciplinas", "Curso", "Grade curricular"];
            $cursos = ["Cadastro", "Disciplinas", "Alunos", "Professor", "Horários", "Salas"];
            $disciplinas = ["Cadastro", "Professores", "Horário", "Salas", "Cursos", "Alunos"];
            $professores = ["Cadastro", "Disciplinas", "Boletim", "Cursos", "Alunos", "Horários", "Salas"];
            $horarios = ["Cadastro", "Grade", "Professores", "Disciplinas", "Salas", "Alunos", "Cursos"];
            $salas = ["Cadastro", "Mapa", "Professores", "Disciplinas", "Curso"];

            echo "<li class='titulo'> " . $menu . "</li>";

            switch ($menu) {
                case 'alunos':
                    foreach ($alunos as $index) {
                        echo "<li> <a href='#'>" . $index . "</a></li>";       
                    }
                    break;
                case 'cursos':
                    foreach ($cursos as $index) {
                        echo "<li> <a href='#'>" . $index . "</a></li>";       
                    }
                    break;
                case 'disciplinas':
                    foreach ($disciplinas as $index) {
                        echo "<li> <a href='#'>" . $index . "</a></li>";       
                    }
                    break;
                case 'professores':
                    foreach ($professores as $index) {
                        echo "<li> <a href='#'>" . $index . "</a></li>";       
                    }
                        
                    break;
                case 'horarios':
                    foreach ($horarios as $index) {
                        echo "<li> <a href='#'>" . $index . "</a></li>";       
                    }
                    break;
                case 'salas':
                    foreach ($salas as $index) {
                        echo "<li> <a href='#'>" . $index . "</a></li>";       
                    }
                    break;
                
                default:
                    # code...
                    break;
            }

            
           
           ?> 
        </ul>
    </nav>
</main>

<?php
    include_once("parts/footer.html")
?>