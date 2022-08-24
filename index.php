<?php

if(isset($_POST['submit']))
{
include_once('config.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$sexo = $_POST['genero'];
$dataNascimento = $_POST['data-nascimento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$endereco = $_POST['endereco'];

$result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,data_nasc,cidade,estado,endereco) VALUES ('$nome', '$email' , '$telefone', '$sexo', '$dataNascimento', '$cidade', '$estado', '$endereco')");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | MCR</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <form action="index.php" method="POST">
            <fieldset>
                <legend>
                   <b>Formulário De Clientes</b></legend>
                   <br><br>

                   <div class="input-box">
                        <input type="text" name="nome" id="nome" class="inputUser" required>
                        <label class="label-input" for="nome">Nome Completo</label>
                    </div>
                    <br><br>
                    <div class="input-box">
                        <input type="text" name="email" id="email" class="inputUser" required>
                        <label class="label-input" for="nome">Email</label>
                    </div>

                    <br><br>

                    <div class="input-box">
                        <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                        <label class="label-input" for="telefone">Telefone</label>
                    </div>

                   

                    <p>Sexo:</p>
                    <input type="radio" name="genero" id="feminino" value="Feminino" required>
                    <label for="Feminino">Feminino</label>
                    <br>
                    <input type="radio" name="genero" id="masculino" value="Masculino" required>
                    <label for="masculino">Masculino</label>
                    <br>
                    <input type="radio" name="genero" id="outros" value="Outros" required>
                    <label for="outros">Outros</label>

                    <br><br>

            
                        <label for="data-nascimento"> <b>Data de Nascimento:</b></label>
                        <input type="date" name="data-nascimento" id="data-nascimento" required>
                   

                    <br><br>

                    <div class="input-box">
                        <input type="text" name="cidade" id="cidade" class="inputUser" required>
                        <label class="label-input" for="cidade">Cidade</label>
                    </div>
                    
                    <br><br>

                    <div class="input-box">
                        <input type="text" name="estado" id="estado" class="inputUser" required>
                        <label class="label-input" for="estado">Estado</label>
                    </div>
                    
                    <br><br>

                    <div class="input-box">
                        <input type="text" name="endereco" id="endereco" class="inputUser" required>
                        <label class="label-input" for="endereco">Endereço</label>
                    </div>

                    <br><br>

                    <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>