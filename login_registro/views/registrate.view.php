<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Registrar usuario</title>
  </head>
  <body>
    <div class="container">
      <h1>Registrar usuario</h1>
      <?php if (!empty($errores)): ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $errores; ?>
        </div>
      <?php endif; ?>
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Usuario:</label>
          <input type="text" class="form-control" id="id_usuario" name="usuario" placeholder="Enter usuario">
        </div>
        <div class="form-group">
          <label for="id_password">Password</label>
          <input type="password" name="password" class="form-control" id="id_password" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="id_confirm_password">Confirmar Password</label>
          <input type="password" class="form-control" id="id_confirm_password" name="confirm_password" placeholder="Password">
        </div>
        <table class="table">
          <thead>
            <tr>
              <th>Módulo</th>
              <th>Permisos</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($permisos_agrupados as $modulo => $acciones): ?>
              <tr>
                <td style="text-transform: capitalize;"><?php echo $modulo; ?></td>
                <td>
                  <?php foreach ($acciones as $accion => $value): ?>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" name="permisos[<?php echo $modulo; ?>][<?php echo $value; ?>]" id="defaultCheck1">
                      <label style="text-transform: capitalize;" class="form-check-label" for="defaultCheck1">
                        <?php echo implode(' ', explode('-', $value)); ?>
                      </label>
                    </div>
                  <?php endforeach; ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>