<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="one p-3 d-flex justify-content-between align-items-center text-white">
        <div>
            <h4>Panel</h4>
        </div>
        <div class="d-flex justify-content-center align-items-center">
        <a><?php echo $_SESSION['user'];?></a>
        <a href="logout" class="nav-link ms-3" href="">logout</a>
        </div>

    </div>
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-10 mx-auto">
            <table class="table">
  <thead>
    <tr>
    <th>Fecha</th> 
      <th>Nombre</th>
      <th>Telefono</th>
      <th>Email</th>
      <th>Mensaje</th>
    </tr>
  </thead>
  <tbody>
     <?php
     //fetch data from json
			$data = file_get_contents('contactes.json');
			//decode into php array
			$data = json_decode($data);

			$index = 0;
            foreach($data as $row){
                echo "
                <tr>
                    <td>".$row->fecha."</td>
                    <td>".$row->nombre."</td>
                    <td>".$row->telefono."</td>
                    <td>".$row->email."</td>
                    <td>".$row->mensaje."</td>
                  
                </tr>
            ";

            $index++;
        }
    ?>
       
    
  </tbody>
</table>
            </div>

        </div>
    </div>
<script src="../js/bootstrap.bundle.min.js"></script> 
</body>
</html>
