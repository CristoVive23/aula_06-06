<?php 
    require_once "conn.php"; // include

    //Preparar
    $stmt = $conn->prepare("SELECT * FROM graphicalexdol");
    // Executar
    $stmt->execute();
    // Buscar
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../css/style.css">

    <title>Dolar</title>
</head>
<body>
    <?php include 'index.php'?>

    <div class="content">
        <h1>Salário mínimo / Valor do Dolar (Gráfico Linha)</h1>

        <?php include 'DOLlistGraph.php'?>

        <form action="DOLinsert.php" method="post" class="container">
            <div class="form">
                <input type="number" id="anoalex" name="anoalex" placeholder="Digite o ano:">
                <div>
                </div>
                <input type="number" step="0.010" id="salarioalex" name="salarioalex" placeholder="Digite o salário mínimo:">
                <div>
                </div>
                <input type="number" step="0.010" id="pdolalex" name="pdolalex" placeholder="Digite o valor:">
                <div>
                </div>
                <div>
                    <input type="submit" value="Cadastar" class="teste">
                </div>
            </div>

            <table class="table-box" >
                <tr>
                    <th>id.</th>
                    <th>Ano:</th>
                    <th>Salario Min:</th>
                    <th>Dolar:</th>
                    <th>Poder de compra:</th>
                    <th>Ações:</th>
                </tr>

                <?php foreach($list as $item):?>
                    <tr>
                        <td><?=$item['idalex']?></td>
                        <td><?=$item['anoalex']?></td>
                        <td><?=$item['salarioalex']?></td>
                        <td><?=$item['ldolalex']?></td>
                        <td><?=$item['compraalex']?></td>
                        <td>
                            <a href="dolDelete.php?idalex=<?=$item['idalex']?>" class="teste">
                                Deletar
                            </a>
                            
                            <a href="dolUpdate.php?idalex=<?=$item['idalex']?>" class="teste">
                                Alterar
                            </a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </table>
        </form>
    </div>
</body>
</html>