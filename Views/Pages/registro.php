<h1>Registro</h1>
<div class="d-flex justify-content-center text-center">
<form class="p-5 bg-light" method="post">
                <div class="form-group">
                <label for="rname">User</label>
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                     </div>
                        <input type="text" class="form-control" placeholder="Enter name" id="rname" name=rname>
                  </div>                     
                </div>
                
                <div class="form-group">
                  <label for="email">Email</label>
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                     </div>
                        <input type="email" class="form-control" placeholder="Enter email" id="remail" name=remail>
                  </div>                     
                </div>

                
                <div class="form-group">
                 <label for="pwd">Password</label>
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                     </div>
                        <input type="password" class="form-control" placeholder="Enter password" id="rpwd" name=rpwd>
                  </div>                     
                </div>
       
                 <?php 
                 require_once "Controller/FormularioController.php";

                 $callSave =  FormularioController::registroController();

                    if ($callSave=="ok") {

                      echo '<script>

                          if(window.history.replaceState){
                             window.history.replaceState(null,null,window.location.href);
                          }
           
                       </script>';
                      
                       echo "<div class='alert alert-success'>Registro Exitoso!</div>";
                    }
                 ?> 
                
                <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>