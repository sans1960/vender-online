<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-6 mx-auto mt-5">
                <form action="backend" method="post">
                <div class="mb-3">
                    <label for="user" class="form-label">Usuario</label>
                      <input type="text" class="form-control" id="user" placeholder="Usuario" name="user" required autofocus>
                       </div>
                      <div class="mb-3">
                         <label for="contra" class="form-label">Contraseña</label>
                         <input type="text" name="contra" id="contra" class="form-control" required>
                           </div>
                           <div class="mb-3 d-flex justify-content-center">
                        <button type="submit" class="px-3 py-1 one text-white rounded" name="enviar">enviar</button>
                      </div>
                </form>

            </div>
        </div>
    </div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>