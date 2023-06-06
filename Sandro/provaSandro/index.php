<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FONT-AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <title>PHP FORM</title>
</head>
<body>
    <div class="form-box">
        <div class="form-title">
            <h1>Cadastre-se</h1>
        </div>

        <?php 
            if(isset($_POST['insert'])) {
                $name = filter_input(INPUT_POST, 'name');
                $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
                $pass = filter_input(INPUT_POST, 'pass');
                $passHash = password_hash($pass, PASSWORD_DEFAULT);

                require_once "./class/users.php";

                $insertUser = new Users();
                $insert = $insertUser->insertUser($name, $email, $passHash);
            }
        ?>

        <form action="" method="post" class="form">
            <div class="container">
                <div class="input-box">
                    <input type="text" id="name" name="name" placeholder="Nome">
                </div>

                <div class="input-box">
                    <input type="email" id="email" name="email" placeholder="Email">
                </div>

                <div class="input-box">
                    <input type="password" id="pass" name="pass" placeholder="Senha">
                </div>

                <div class="buttons">
                    <input type="submit" value="Cadastar" class="teste" name="insert">
                </div>
            </div>
        </form>
    </div>

    <?php include "list.php"; ?>
</body>
</html>