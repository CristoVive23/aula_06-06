<?php 
    require_once "./class/users.php";

    $listUsers = new Users();
    $date = $listUsers->searchDate();

    if(isset($_GET['delete_id'])) {
        $deleteId = $_GET['delete_id'];

        $listUsers->deleteUser($deleteId);

        header("Location: ".$_SERVER['PHP_SELF']);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
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

    <title>Lista</title>
</head>
<body>
    <div class="list-box">
        <?php foreach ($date as $post):?>

            <div class="user-card">
                <p class="user-name"><?=$post['id'], "- ",$post['nameBanc']?></p>
                <p class="user-email"><?=$post['emailBanc']?></p>

                <div class="btn">
                    <a href="?delete_id=<?=$post['id']?>" class="b"><i class="fa-solid fa-trash"></i></a>
                    <a href="update.php?update_id=<?=$post['id']?>" class="b"><i class="fa-solid fa-pen-to-square"></i></a>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</body>
</html>