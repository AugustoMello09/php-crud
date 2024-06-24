<?php 
include "db_conexao.php";

  if(isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `php`(`id`, `first_name`, `last_name`, `email`, `gender`) 
    VALUES (NULL,'$first_name','$last_name','$email','$gender')";

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: index.php?msg=Novo usuário criado com sucesso! ");
    }
    else {
      echo "Failed: " . mysqli_error($conn);
    }
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>CRUD</title>
</head>
<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5"
  style="background-color: #BBE9FF;">
    <h1>PHP Crud Projeto Integrador Extensionista - ADS 3</h1> 
  </nav>
   
  <div class="container">
      
      <div class="text-center mb-4">
        <h3>Adicionar novo usuário</h3>
        <p class="text-muted"> Preencha o formulário a baixo e adicione um novo usuário</p>
      </div>
      
      <div class="container d-flex justify-content-center">
          
          <form action="" method="post" style="width:50vw; min-width:300px;">
            
            <div class="row mb-3">
              
              <div class="col">
                  <label class="form-label">Primeiro nome</label>
                  <input type="text" class="form-control" name="first_name" placeholder="José">
              </div>

              <div class="col">
                  <label class="form-label">Último nome</label>
                  <input type="text" class="form-control" name="last_name" placeholder="Abel">
              </div>

            </div>

            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="text" class="form-control" name="email" placeholder="seuEmail@gmail.com">
            </div>
          
            <div class="form-group mb-3">
                  <label>Gênero:</label>&nbsp;
                  <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                  <label for="male" class="form-input-label">Masculino</label>
                  &nbsp;
                  <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                  <label for="female" class="form-input-label">Feminino</label>
            </div>

            <div>
                <button type="submit" class="btn btn-success" name="submit">Salvar</button>
                <a href="index.php" class="btn btn-danger">Cacelar</a>
            </div>
          </form>
      </div>
   
    </div>
  
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>