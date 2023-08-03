<?php
    phpinfo();
    require '../vendor/autoload.php';
    use Leo\Automatizador\app\Texto;

    $obTexto = new Texto;

    $textoTratado = '';

    if(isset($_POST['txtTextoNaoTratado']) and !is_numeric($_POST['txtTextoNaoTratado'])){
        $textoTratado = $obTexto->tratarTexto(1, $_POST['txtTextoNaoTratado']);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="Permissions-Policy" content="interest-cohort=()">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automatizador de vírgulas</title>
</head>
<body class="container bg-light" style="height: 100vh; width: 100vw">
    <form action="" method="post" class="d-flex justify-content-around align-items-center border h-75">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Texto a ser tratado:</label>
            <textarea class="form-control h-50" name="txtTextoNaoTratado" id="txtTextoNaoTratado" rows="10"></textarea>
            <button class="btn btn-secondary border mt-1">Modelo</button>
            <button class="btn btn-light border mt-1" type="submit">Tratar</button>
            <button class="btn btn-danger border mt-1" onclick="limparCampos()">Limpar</button>
        </div>
        <div class="form-group">
            <label for="txtTextoTratado">Texto tratado:</label>
            <textarea class="form-control h-50" id="txtTextoTratado" rows="10" disabled><?= $textoTratado ?></textarea>
            <button onclick="copiarTexto()" class="btn btn-success border mt-1">Copiar</button>
        </div>
    </form>
    <script>
        function copiarTexto(){
            const inputElement = document.getElementById('txtTextoTratado');
            // Seleciona o texto dentro do input
            inputElement.select();
            // Copia o texto selecionado para a área de transferência
            document.execCommand('copy');
        }

        function limparCampos(){
            let campo = document.getElementById('txtTextoNaoTratado')
            console.log('batata')
            campo.value = ''
        }
    </script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> -->
    <!-- <script src="/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
</body>
</html>