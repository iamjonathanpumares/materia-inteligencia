<?php

$errores = ''; 

// Comprobar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  // Se obtienen los datos del formulario
  $nombre = $_POST['nombre']; // Obligatorio
  $correo = $_POST['correo']; // Obligatorio

  // Validar los datos
  $nombre = trim($nombre);
  if (!empty($nombre))
  {
    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    echo 'Tu nombre es: ' . $nombre . '<br>';
  }
  else
  {
    $errores .= 'Por favor, ingresa tu nombre <br>';
  }

  // Valida el correo
  $correo = trim($correo);
  if (!empty($correo))
  {
    // Validar si es un correo
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL))
    {
      $errores .= 'Por favor, ingresa un correo válido <br>';
    }
    else
    {
      echo 'Tu correo es: ' . $correo . '<br>';
    }
  }
  else
  {
    $errores .= 'Por favor, ingresa un correo <br>';
  }

  // Comprobar si no tengo errores
  if (empty($errores))
  {
    // Guardar un registro, actualizar un registro, enviar un correo
  }
  
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Formularios</title>
  </head>
  <body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      
      <?php if (!empty($errores)): ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $errores; ?>
        </div>
      <?php endif; ?>
      
      <label for="id_nombre">Nombre:</label>
      <input type="text" name="nombre" id="id_nombre">

      <br>

      <label>Correo:</label>
      <input type="text" name="correo">

      <br>

      <input type="submit" value="Guardar" name="submit-formulario">
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>