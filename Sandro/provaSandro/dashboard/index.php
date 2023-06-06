<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500;700&display=swap" rel="stylesheet">

    <!-- FONT-AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Dashboard</title>
</head>
<body>
    <div class="lateral-bar">
        <div class="title">
            <h1>Dashboard</h1>
        </div>

        <div class="box-area">
            <button type="submit" class="box-graph" onclick="window.location.href='GASform.php'">
                <div class="icon">
                    <i class="fa-solid fa-gas-pump"></i>
                </div>

                <div class="text-area">
                    <p>Salário mínimo / Preço da gasolina</p>
                </div>
            </button>

            <button type="submit" class="box-graph" onclick="window.location.href='DOLform.php'">
                <div class="icon">
                    <i class="fa-sharp fa-solid fa-sack-dollar"></i>
                </div>
                
                <div class="text-area">
                    <p>Salário mínimo / Dólar</p>
                </div>
            </button>

            <button type="submit" class="box-graph" onclick="window.location.href='CARform.php'">
                <div class="icon">
                    <i class="fa-solid fa-car"></i>
                </div>

                <div class="text-area">
                    <p>Salário mínimo / Carro Mais Baratos</p>
                </div>
            </button>

            <button type="submit" class="box-graph" onclick="window.location.href='CESform.php'">
                <div class="icon">
                    <i class="fa-solid fa-basket-shopping"></i>
                </div>
                
                <div class="text-area">
                    <p>Salário mínimo / Cesta Básica</p>
                </div>
            </button>

            <button type="submit" class="box-graph" onclick="window.location.href='PIBform.php'">
               <div class="icon">
                    <i class="fa-sharp fa-solid fa-chart-simple"></i>
               </div>

                <div class="text-area">
                    <p>PIB Brasil</p>
                </div>
            </button>
    
            <button type="submit" class="box-graph" onclick="window.location.href='XEOform.php'">
                <div class="icon">
                    <i class="fa-solid fa-microchip"></i>
                </div>
                
                <div class="text-area">
                    <p>Processador Xeon</p>
                </div>
            </button>
            
            <button type="submit" class="box-graph" onclick="window.location.href='fonts.php'">
                <div class="icon">
                    <i class="fa-sharp fa-solid fa-file"></i>
                </div>
                
                <div class="text-area">
                    <p>Verificar fontes</p>
                </div>
            </button>
        </div>
    </div>
</body>
</html>