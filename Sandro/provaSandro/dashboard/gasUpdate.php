<?php 
    require_once "conn.php";

    $idleon = filter_input(INPUT_GET, 'idleon');

    // Prepara
    $stmt = $conn->prepare("SELECT * FROM graphicleongas WHERE idleon = :idleon");

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

    <title>Gasolina</title>
</head>
<body>
    <?php include 'index.php'?>

    <div class="content">
        <h1>Salário mínimo / Preço da gasolina (Gráfico Linha)</h1>

        <?php include 'gaslistGraph.php'?>

        <form action="gasUpdadeAction.php" method="post" class="container">
            <div class="form">
                <input type="hidden" name="id" value="<?=$item['idleon']?>">

                <div>
                    <input type="number" id="anoleon" name="anoleon" placeholder="Novo ano:" value="<?=$item['anoleon']?>">
                </div>
                <div>
                    <input type="number" step="0.010" id="salarioleon" name="salarioleon" placeholder="Novo salário mínimo:" value="<?=$item['salarioleon']?>">
                </div>
                <div>
                    <input type="number" step="0.010" id="pgasolinaleon" name="gasolinaleon" placeholder="Novo preço da gasolina:" value="<?=$item['lgasoleon']?>">
                </div>
                <div>
                    <input type="submit" value="Alterar" class="teste">
                </div>
            </div>
        </form>
    </div>
</body>
</html>