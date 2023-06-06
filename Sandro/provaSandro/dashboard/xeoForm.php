<?php 
    require_once "conn.php"; // include

    //Preparar
    $stmt = $conn->prepare("SELECT * FROM graphicleonxeo");
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

    <title>Process. Xeon</title>
</head>
<body>
    <?php include 'index.php'?>

    <div class="content">
        <h1>Valor do processador Xeon (Gráfico Coluna)</h1>
        <h3>com o valor do dólar em 2014 x valor dele sem taxa x valor dele com taxa de 60% no valor hoje</h3>

        <?php include 'xeolistGraph.php'?>

        <form action="xeoInsert.php" method="post" class="container">
            <div class="form">
                <div>
                    <input type="number" id="anoleon" name="anoleon" placeholder="Digite o ano:">
                </div>
                <div>
                    <input type="number" step="0.010" id="processleon" name="processleon" placeholder="Digite a valor:">
                </div>
                <div>
                    <input type="submit" value="Cadastar" class="teste">
                </div>
            </div>

            <table class="table-box" >
                <tr>
                    <th>id.</th>
                    <th>Ano:</th>
                    <th>Processador:</th>
                    <th>Ações:</th>
                </tr>

                <?php foreach($list as $item):?>
                    <tr>
                        <td><?=$item['idleon']?></td>
                        <td><?=$item['anoleon']?></td>
                        <td><?=$item['xeoleon']?></td>
                        <td>
                            <a href="xeoDelete.php?idleon=<?=$item['idleon']?>" class="teste">
                                Deletar
                            </a>
                            
                            <a href="xeoUpdate.php?idleon=<?=$item['idleon']?>" class="teste">
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