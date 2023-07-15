<!DOCTYPE html>

<html lang="pt-br">
<body> 
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link"></a>
                </li>
            </ul>
        </div>
    </nav>
    <form action="dados.php" method="POST">
        <div class="container">
            <div class="mt-3">
                <h2> Hora do remédio </h2>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="nome" id="exampleFormControlInput1" value="<?php echo !empty($_POST['nome']) ? $_POST['nome'] : ''; ?>">
                <?php
                    $nome = !empty($_POST['nome']) ? $_POST['nome'] : '';
                    echo FormValidation::stringValidate($nome);
                ?>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Remédio:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="remedio" value="<?php echo !empty($_POST['remedio']) ? $_POST['remedio'] : ''; ?>">
                <?php
                    $remedio = !empty($_POST['remedio']) ? $_POST['remedio'] : '';
                    echo FormValidation::stringValidate($remedio);
                ?>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Intervalo (horas):</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" name="intervalo" value="<?php echo !empty($_POST['intervalo']) ? $_POST['intervalo'] : ''; ?>">
                <?php 
                    $intervalo = !empty($_POST['intervalo']) ? $_POST['intervalo'] : '';
                    echo FormValidation::intervaloValidate($intervalo);
                ?>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Horário Inicial</label>
                <input type="time" class="form-control" id="exampleFormControlInput1" name="horario" value="<?php echo !empty($_POST['horario']) ? $_POST['horario'] : ''; ?>">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">CALCULAR</button>
                <a type="reset" class="btn btn-danger" href="dados.php" id="limpar">LIMPAR</a>
            </div>
        </div>
    </form>
</body>
</html>