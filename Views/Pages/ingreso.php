<h1>Ingreso</h1>
<div class="d-flex justify-content-center text-center">
<form class="p-5 bg-light" method="post">

                <div class="form-group">
                  <label for="email">Email</label>
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                     </div>
                        <input type="email" class="form-control" placeholder="Enter email" id="iemail" name="iemail">
                  </div>                     
                </div>

                
                <div class="form-group">
                 <label for="pwd">Password</label>
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                     </div>
                        <input type="password" class="form-control" placeholder="Enter password" id="ipwd" name=ipwd>
                  </div>                     
                </div>
       
                 <?php 
              
                 $callInit = new FormularioController;
                 $callInit->ingresoController();
              
                 ?>
                
                <button type="submit" class="btn btn-primary">Ingresar</button>
</form>
