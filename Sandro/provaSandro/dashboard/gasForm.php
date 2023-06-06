<?php 
    require_once "conn.php"; // include

    //Preparar
    $stmt = $conn->prepare("SELECT * FROM graphicleongas");
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

    <title>Gasolina</title>
</head>
<body>
    <?php include 'index.php'?>

    <div class="content">
        <h1>Salário mínimo / Preço da gasolina (Gráfico Linha)</h1>

        <?php include 'GASlistGraph.php'?>

        <form action="GASinsert.php" method="post" class="container">
            <div class="form">
                <div>
                    <input type="number" id="anoleon" name="anoleon" placeholder="Digite o ano:">
                </div>
                <div>
                    <input type="number" step="0.010" id="salarioleon" name="salarioleon" placeholder="Digite o salário mínimo:">
                </div>
                <div>
                    <input type="number" step="0.010" id="pgasolinaleon" name="gasolinaleon" placeholder="Digite a valor:">
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
                    <th>Preço Gásolina:</th>
                    <th>Poder de compra:</th>
                    <th>Ações:</th>
                </tr>

                <?php foreach($list as $item):?>
                    <tr>
                        <td><?=$item['idleon']?></td>
                        <td><?=$item['anoleon']?></td>
                        <td><?=$item['salarioleon']?></td>
                        <td><?=$item['lgasoleon']?></td>
                        <td><?=$item['compraLeon']?></td>
                        <td>
                            <a href="gasDelete.php?idleon=<?=$item['idleon']?>" class="teste">
                                Deletar
                            </a>
                            
                            <a href="gasUpdate.php?idleon=<?=$item['idleon']?>" class="teste">
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