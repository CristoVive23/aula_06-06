<?php 
    require_once "conn.php";

    $idalex = filter_input(INPUT_GET, 'idalex');

    // Prepara
    $stmt = $conn->prepare("SELECT * FROM graphicalexdol WHERE idalex = :idalex");

    // Trocar
    $stmt->bindValue(':idalex', $idalex);

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

    <title>Dolar</title>
</head>
<body>
    <?php include 'index.php'?>

    <div class="content">
        <h1>Salário mínimo / Preço do Dolar (Gráfico Linha)</h1>

        <?php include 'dollistGraph.php'?>

        <form action="dolUpdadeAction.php" method="post" class="container">
            <div class="form">
                <input type="hidden" name="id" value="<?=$item['idalex']?>">

                <div>
                    <input type="number" id="anoalex" name="anoalex" placeholder="Novo ano:" value="<?=$item['anoalex']?>">
                </div>
                <div>
                    <input type="number" step="0.010" id="salarioalex" name="salarioalex" placeholder="Novo salário mínimo:" value="<?=$item['salarioalex']?>">
                </div>
                <div>
                    <input type="number" step="0.010" id="ldolalex" name="ldolalex" placeholder="Novo valor:" value="<?=$item['ldolalex']?>">
                </div>
                <div>
                    <input type="submit" value="Alterar" class="teste">
                </div>
            </div>
        </form>
    </div>
</body>
</html>