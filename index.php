<?php
    ini_set("display_errors",1);
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $conn  = new PDO("pgsql:host=localhost;port=6551;dbname=postgres;user=postgres;");
        $nome = isset($_POST['nome']) ? $_POST['nome'] : "";
        $senha = isset($_POST['senha']) ? $_POST['senha'] : "";

        $query = "select nome, senha from usuarios where nome='$nome' and senha='$senha'";
        $result = $conn->prepare($query);
        $result->execute();
        $rows = $result->fetchAll();
        if($rows){
            echo "Logado com sucesso.";
        }else{
            echo "Não logou, tente novamente.";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de SQL Injection</title>
</head>
<body>
    <form action="index.php" method="POST">
        <h2>Demonstrando SQL Injection</h2>
        <br>Usuário:<br>
        <input type="text" name="nome"><br><br>
        Senha:<br>
        <input type="text" name="senha"><br><br>
        <input type="submit" value="Logar">
    </form>
</body>
</html>