<?php

require_once './connect.php';

$stmt = $connect->prepare('SELECT * FROM users');
$stmt->execute();
$list = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <h1>Faça um Cadastro de Usuário</h1>
    <form action="insert.php" method="post">
        <div>
            <input type="text" name="name">
        </div>
        <div>
            <input type="email" name="email">
        </div>
        <div>
            <input type="password" name="password">
        </div>
        <div>
            <button>Cadastrar Usuário</button>
        </div>
    </form>
    <?php if ($stmt->rowCount() > 0):?>
    <table border="1">
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>email</th>
            <th>ações</th>
        </tr>
        <?php foreach ($list as $user): ?>
        <tr>
            <td><?=$user['id']; ?></td>
            <td><?=$user['name']; ?></td>
            <td><?=$user['email']; ?></td>
            <td>
                Editar
                |
                Deletar
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php else: ?>
        <p> Não existe</p>
    <?php endif; ?> 
</body>
</html>