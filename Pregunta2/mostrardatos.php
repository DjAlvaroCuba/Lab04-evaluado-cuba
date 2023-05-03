<?php
    $usuario = $_POST['usuario'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];
    $edad = $_POST['edad'];
    if ($edad < 18) {
      echo "<script>alert('Solo menores de edad'); window.location.replace('index.html');</script>";
  } 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
    .cuadro {
        border: 2px solid #ccc;
        margin: 100px;
        padding: 0px;
        margin-top: 5px;
        margin-bottom: 5px;
        background-color: #f5f5f5;
    }
    .cuadro p {
        font-weight: bold;
    }
  </style>
  </head>
<body >
<?php
    echo "<div class='p-3 text-center cuadro'>
    <p class='fs-1'>Bienvenido:  "."<br>".$usuario ."
    </p>
    </div>";
    echo "<div class='p-3 text-center cuadro'>
    <p class='fs-1'> Su direccion es:   "."<br>".$direccion ."
    </p>
    </div>";
    echo "<div class='p-3 text-center cuadro'>
    <p class='fs-1'> Su correo es:   "."<br>".$email ."
    </p>
    </div>";
    echo "<div class='p-3 text-center cuadro'>
    <p class='fs-1'> Su edad es:   "."<br>".$edad ."
    </p>
    </div>";
?>
</body>
</html>