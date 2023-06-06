<?php 
    require_once "conn.php";

    $idleon = filter_input(INPUT_GET, 'idleon');

    // Prepara
    $stmt = $conn->prepare("SELECT * FROM graphicleonxeo WHERE idleon = :idleon");

    // Trocar
    $stmt->bindValue(':idleon', $idleon);

    // Executar
    $stmt->execute();

    // Buscar 1
    $item = $stmt->fetch(PDO::FETCH_ASSOC);
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

        <form action="xeoUpdadeAction.php" method="post" class="container">
            <div class="form">
                <input type="hidden" name="id" value="<?=$item['idleon']?>">

                <div>
                    <input type="number" id="anoleon" name="anoleon" placeholder="Novo ano:" value="<?=$item['anoleon']?>">
                </div>
                <div>
                    <input type="number" step="0.010" id="processleon" name="processleon" placeholder="Novo valor:" value="<?=$item['xeonleon']?>">
                </div>
                <div>
                    <input type="submit" value="Alterar" class="teste">
                </div>
            </div>
        </form>
    </div>
</body>
</html>