<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: red;
           /* background-image:linear-gradient(to right,rgba( 20,147,220), rgba( 17,54,51)) ;*/
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px;
            border-radius: 15px;
            width: 30%;
        }
        fieldset{
            border: 3px solid red;
        }
        legend{
            border: 1px solid red;
            padding: 10px;
            text-align: center;
            background-color: red;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5px;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser.valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="" method="post">
            <fieldset>
                <legend><b>Cadastrar clientes</b></legend>    
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="nome" class="labelInput" >Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                <p>Sexo:</p>
                <input type="radio" name="sexo" id="feminino" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" name="sexo" id="masculino" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" name="sexo" id="outro" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <div class="inputBox">
                    <label for="dataNascimento"><b>Data de dataNascimento:</b></label>
                    <input type="date" name="dataNascimento" id="dataNascimento" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput" >Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <input type="submit" name="submit " id="submit">
            </fieldset>




        </form>
    </div>
    <?php 
    
    include_once'config.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $dataNasc = $_POST['dataNascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];
    $senha = $_POST['senha'];

$sql = "INSERT INTO usuario (nome, email, telefone, sexo, data_nasc, cidade, estado, endereco,senha) 
VALUES ('$nome', '$email', '$telefone', '$sexo', '$dataNasc', '$cidade', '$estado', '$endereco', '$senha')";

if ($conn->query($sql) === TRUE) {
echo "Seus dados foram informados com sucesso!";
} else {
echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
} 
else {
echo "Nenhum dado foi informado pelo usuário";
}

    
    
    ?>
</body>
</html>