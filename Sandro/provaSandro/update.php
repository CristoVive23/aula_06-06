<?php 
    require_once "./class/users.php";
    
    $listUsers = new Users();

    if(isset($_GET['update_id'])) {
        $updateId = $_GET['update_id'];
        $users = $listUsers->searchDate();
        $user = null;

        foreach ($users as $u) {
            if ($u['id'] == $updateId) {
                $user = $u;
                break;
            }
        }
    } 

    if(isset($_POST['update'])) {
        $id = filter_input(INPUT_POST, 'id');
        $name = filter_input(INPUT_POST, 'new_name');
        $email = filter_input(INPUT_POST, 'new_email', FILTER_VALIDATE_EMAIL);
        $pass = filter_input(INPUT_POST, 'new_pass');
        $passHash = password_hash($pass, PASSWORD_DEFAULT);

        $update = $listUsers->updateUser($id, $name, $email, $passHash);

        header("Location: index.php");
    }
?>

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
            <h1>Atualizar</h1>
        </div>

        <form action="" method="post" class="form">
            <div class="container">
                <input type="hidden" name="id" value="<?=$user['id']?>">

                <div class="input-box">
                    <input type="text" id="name" name="new_name" placeholder="Novo nome">
                </div>

                <div class="input-box">
                    <input type="email" id="email" name="new_email" placeholder="Novo email">
                </div>

                <div class="input-box">
                    <input type="password" id="pass" name="new_pass" placeholder="Nova senha">
                </div>

                <div class="buttons">
                    <input type="submit" value="Atualizar" class="teste" name="update">
                </div>
            </div>
        </form>
    </div>
</body>
</html>