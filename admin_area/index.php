<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-black py-3">
    <div class="container">
      <a class="nav-home" href="https://localhost/website" role="button">
        <h2 class="home">Helheim Gaming</h2>
      </a>

      <div class="container text-end">
            <h4>Welcome Admin</h4>
            <a href="../index.php" class="logout">
                Logout
            </a>
      </div>
    </div>
  </nav>

  <div class="row">
    <div class="col-lg-12 col-md-6 col-sm-4 p-2">
        <div class="container">
            <h3 class="py-5 text-center">Manage details</h3>
        </div>

        <div class="button text-center">
            <a href="index.php?insert_product" class="nav-item my-2">
                <button>Insert Games</button>
            </a>
            <a href="" class="nav-item my-2">
                <button>View Games</button>
            </a>
            <a href="index.php?Delete_game" class="nav-item my-2">
                <button>Delete Game</button>
            </a>
            <a href="../info.php?info" class="nav-item my-2">
                <button>Register Users And Contact</button>
            </a>
        </div>

    </div>
  </div>

<div class="container">
<?php

if(isset($_GET['insert_product']))
{
    include('insert_product.inc.php');
}
elseif(isset($_GET['Delete_game']))
{
    include('Delete_game.inc.php');
}

?>


</div>

    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>