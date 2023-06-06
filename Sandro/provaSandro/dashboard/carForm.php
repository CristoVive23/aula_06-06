<?php 
    require_once "conn.php"; // include

    //Preparar
    $stmt = $conn->prepare("SELECT * FROM graphicalexcar");
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

    <title>Carro</title>
</head>
<body>
    <?php include 'index.php'?>

    <div class="content">
        <h1>Salário mínimo / Preco do carro (Gráfico Linha)</h1>

        <?php include 'carlistGraph.php'?>

        <form action="carInsert.php" method="post" class="container">
            <div class="form">
                <div>
                    <input type="number" id="anoalex" name="anoalex" placeholder="Digite o ano:">
                </div>
                <div>
                    <input type="number" step="0.010" id="salarioalex" name="salarioalex" placeholder="Digite o salário mínimo:">
                </div>
                <div>
                    <input type="number" step="0.010" id="lcaralex" name="lcaralex" placeholder="Digite o valor:">
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
                    <th>Valor Carro:</th>
                    <th>Poder de compra:</th>
                    <th>Ações:</th>
                </tr>

                <?php foreach($list as $item):?>
                    <tr>
                        <td><?=$item['idalex']?></td>
                        <td><?=$item['anoalex']?></td>
                        <td><?=$item['salarioalex']?></td>
                        <td><?=$item['lcaralex']?></td>
                        <td><?=$item['compraalex']?></td>
                        <td>
                            <a href="carDelete.php?idalex=<?=$item['idalex']?>" class="teste">
                                Deletar
                            </a>
                            
                            <a href="carUpdate.php?idalex=<?=$item['idalex']?>" class="teste">
                                Alterar
                            </a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </table>
        </form>
    </div>
</body>
</html>alex