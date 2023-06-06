<?php 
    require_once "conn.php"; // include

    //Preparar
    $stmt = $conn->prepare("SELECT * FROM graphicleonpib");
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

    <title>PIB</title>
</head>
<body>
    <?php include 'index.php'?>

    <div class="content">
        <h1>PIB Brasil (Gráfico Linha)</h1>

        <?php include 'PIBlistGraph.php'?>

        <form action="pibInsert.php" method="post" class="container">
            <div class="form">
                <div>
                    <input type="number" id="anoleon" name="anoleon" placeholder="Digite o ano:">
                </div>
                <div>
                    <input type="number" step="0.010" id="pibleon" name="pibleon" placeholder="Digite o valor do PIB:">
                </div>
                <div>
                    <input type="submit" value="Cadastar" class="teste">
                </div>
            </div>

            <table class="table-box" >
                <tr>
                    <th>id.</th>
                    <th>Ano:</th>
                    <th>PIB:</th>
                    <th>Ações:</th>
                </tr>

                <?php foreach($list as $item):?>
                    <tr>
                        <td><?=$item['idleon']?></td>
                        <td><?=$item['anoleon']?></td>
                        <td><?=$item['pibleon']?></td>
                        <td>
                            <a href="pibDelete.php?idleon=<?=$item['idleon']?>" class="teste">
                                Deletar
                            </a>
                            
                            <a href="pibUpdate.php?idleon=<?=$item['idleon']?>" class="teste">
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