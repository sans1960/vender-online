<?php include 'templates/header.php';?>
<div class="container vh-100">
    <div class="row mt-5">
        <div class="col-md-6 mx-auto mt-5">
            <div class="d-flex justify-content-center align-items-center mt-5">
                 <div class="d-flex flex-column justify-content-center align-items-center mt-5">
                 <?php
                      if(isset($_POST['enviar'])){
                          $fecha = $_POST['fecha'];
                          $nombre = $_POST['nombre'];
                          $telefono = $_POST['telefono'];
                          $email = $_POST['email'];
                          $mensaje = $_POST['mensaje'];
                          $data = file_get_contents('admin/contactes.json');
                          $data = json_decode($data,true);
                          $input = array(
                            'fecha' => $_POST['fecha'],
                            'nombre'=>$_POST['nombre'],
                            'telefono' => $_POST['telefono'],
                            'mensaje' => $_POST['mensaje'],
                            'email' => $_POST['email'],
                          );
                          $data[] = $input;
                          $data = json_encode($data, JSON_PRETTY_PRINT);
                           file_put_contents('admin/contactes.json', $data);
                           $htmlContent =  '<html lang="en">
                           <head>
                               <title>Email</title>
                               <style>
                                   *{
                                       font-family: Verdana, Geneva, Tahoma, sans-serif;
                                   }
                                   h1{
                                       text-align:center ;
                                   }
                                   table{
                                       margin: 20px auto;
                                       padding: 10px;
                                   }
                               </style>
                           </head>
                           <body>
                           <h1>Nuevo Contacto </h1>
                           <table>
                               <tr>
                                  <th>Fecha : </th><td>'.$fecha.'</td>
                                </tr>
                               <tr>
                                   <th>Nombre : </th><td>'.$nombre.'</td>
                               </tr>
                               <tr>
                                   <th>Telefono : </th><td>'.$telefono.'</td>
                               </tr>
                               <tr>
                                   <th>Email : </th><td>'.$email.'</td>
                      
                               </tr> ';
                          
                               $htmlContent .='</table>';
                               $htmlContent .='<p>Mensaje : '.$mensaje.'</p>';
                               $htmlContent .='</body></html>';
                               $to = 'asanscliment@gmail.com';
                               $subject = "Contacto";
                               $headers = "MIME-Version: 1.0" . "\r\n";
                               $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                            //    mail($to,$subject,$htmlContent,$headers);
                          }
                      ?>
                      <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-hand-thumbs-up-fill tres mb-5" viewBox="0 0 16 16">
  <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
</svg>
                    <p class="tres mt-5">Gracias por contactarnos : <?php echo $nombre;?>.</p>
                    <p>Pronto nos pondremos en contacto contigo.</p>
                    <p>Esperamos poder servirte.</p>
                    <a href="index" class="px-3 py-1 one text-white rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
  <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
</svg>
                    </a>
                 </div>
            </div>

        </div>
    </div>

</div>















<?php include 'templates/footer.php';?>