<?php include 'templates/header.php';?>
          <div class="container-fluid py-5">
            <div class="row  ">
              <div class="col-md-12 tres d-flex flex-row justify-content-center align-items-center p-1">
                <div class="d-flex justify-content-center align-items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                  </svg>
                </div>
               <div class="tres  d-flex flex-column ms-3 justify-content-center align-items-center">
                <h1 class="mt-1 fw-bold">Contacto</h5>
                
               </div>
              </div>
            
            </div>
          </div>
          <div class="container py-5">
              <div class="row">
                <div class="col-md-6 mx-auto">
                  <form action="procesar" method="post">
                    <input type="hidden" name="fecha" value="<?php echo date('d/m/Y');?>">
                  <div class="mb-3">
                        <label for="nombre" class="form-label tres">Nombre</label>
                        <input type="text" class="form-control" id="nombre"  required name="nombre" autofocus>
                      </div>
                      <div class="mb-3">
                        <label for="telefono" class="form-label tres">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" required name="telefono">
                      </div>
                  <div class="mb-3">
                        <label for="email" class="form-label tres">Email </label>
                        <input type="email" class="form-control" id="email" required name="email" >
                      </div>
                      <div class="mb-3">
                        <label for="mensaje" class="form-label tres">Mensaje</label>
                        <textarea class="form-control" id="mensaje" rows="3" required name="mensaje"></textarea>
                      </div>
                      <div class="mb-3 d-flex justify-content-center">
                        <button type="submit" class="px-3 py-1 one text-white rounded" name="enviar">enviar</button>
                      </div>
                  </form>

                </div>
              </div>
          </div>
 <?php include 'templates/footer.php';?>