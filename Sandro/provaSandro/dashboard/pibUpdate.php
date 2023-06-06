<?php 
    require_once "conn.php";

    $idleon = filter_input(INPUT_GET, 'idleon');

    // Prepara
    $stmt = $conn->prepare("SELECT * FROM graphicleonpib WHERE idleon = :idleon");

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

    <title>PIB</title>
</head>
<body>
    <?php include 'index.php'?>

    <div class="content">
        <h1>PIB do Brasil (Gráfico Linha)</h1>

        <?php include 'piblistGraph.php'?>

        <form action="pibUpdadeAction.php" method="post" class="container">
            <div class="form">
                <input type="hidden" name="id" value="<?=$item['idleon']?>">

                <div>
                    <input type="number" id="anoleon" name="anoleon" placeholder="Novo ano:" value="<?=$item['anoleon']?>">
                </div>
                <div>
                    <input type="number" step="0.010" id="pibleon" name="pibleon" placeholder="Novo valor:" value="<?=$item['pibleon']?>">
                </div>
                <div>
                    <input type="submit" value="Alterar" class="teste">
                </div>
            </div>
        </form>
    </div>
</body>
</html>