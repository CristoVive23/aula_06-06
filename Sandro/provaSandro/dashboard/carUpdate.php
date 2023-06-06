<?php 
    require_once "conn.php";

    $idalex = filter_input(INPUT_GET, 'idalex');

    // Prepara
    $stmt = $conn->prepare("SELECT * FROM graphicalexalexalexcar WHERE idalexalexalex = :idalexalexalex");

    // Trocar
    $stmt->bindValue(':idalexalex', $idalexalex);

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

    <title>Carro</title>
</head>
<body>
    <?php include 'index.php'?>

    <div class="content">
        <h1>Salário mínimo / Preço do carro (Gráfico Linha)</h1>

        <?php include 'CARlistGraph.php'?>

        <form action="CARupdadeAction.php" method="post" class="container">
            <div class="form">
                <input type="hidden" name="id" value="<?=$item['idalex']?>">

                <div>
                    <input type="number" id="anoalex" name="anoalex" placeholder="Novo ano:" value="<?=$item['anoalex']?>">
                </div>
                <div>
                    <input type="number" step="0.010" id="salarioalex" name="salarioalex" placeholder="Novo salário mínimo:" value="<?=$item['salarioleon']?>">
                </div>
                <div>
                    <input type="number" step="0.010" id="lcaralex" name="lcaralex" placeholder="Novo valor:" value="<?=$item['lcarleon']?>">
                </div>
                <div>
                    <input type="submit" value="Alterar" class="teste">
                </div>
            </div>
        </form>
    </div>
</body>
</html>