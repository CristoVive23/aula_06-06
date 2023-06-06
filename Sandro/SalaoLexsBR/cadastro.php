<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastrar Cliente </title>
    <link rel="stylesheet" href="style.css">
    <!--bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>



<div class="container">
  
    <h1 style="color: white;"> Cadastrar Cliente </h1>

    <form action="insert.php" method="post">
        <div class="col-md-6">
            <label for="name"  class="form-label"> Digite Seu nome: </label>
            <input type="text" name="name" id="name" class="form-control" >
        </div>

        <div class="col-md-6">
            <label for="email"  class="form-label"> Digite Seu E-mail: </label>
            <input type="email" name="email" id="email" class="form-control" >
        </div>

        <div class="col-md-6">
            <label for="data_nascimento"  class="form-label"> Digite Sua data de nascimento: </label>
            <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" >
        </div>

        <div class="col-12">
            <label for="endereco"  class="form-label"> Digite Seu Endereço: </label>
            <textarea name="endereco" id="endereco" rows="3" class="form-control" ></textarea>
        </div>
        <br>
        <div class="col-md-6">
            <input type="Submit" value="Cadastrar" class="btn btn-success">
        </div>

    </form>
</div>
    
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>