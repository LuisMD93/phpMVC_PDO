<?php 
              
     if (isset($_GET['id'])) {

        $datos= FormularioController:: SelectItemController("id",$_GET['id'],"");
        //echo'<pre>'; print_r($datos); echo'</pre>';
     }
?>

<h1>Editar</h1>
<div class="d-flex justify-content-center text-center">
<form class="p-5 bg-light" method="post">

                <div class="form-group">
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                     </div>
                        <input type="text" class="form-control" value="<?php echo $datos["nombre"];?>" placeholder="Enter name new" id="rname" name="upname">
                  </div>                     
                </div>

                <div class="form-group">
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                     </div>
                        <input type="email" class="form-control" value="<?php echo $datos["correo"];?>" placeholder="Enter email new" id="upemail" name="upemail">
                  </div>                     
                </div>  

                <div class="form-group">
                 <label for="pwd">Password</label>
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                     </div>
                        <input type="password" class="form-control" placeholder="Enter password" id="ipwd" name="passwordnew">
                  </div>                     
                </div>
                
            
                <input type="hidden"  id="ipwd" name="passwordold" value="<?php echo $datos["celular"];?>">
                <input type="hidden"  id="ipwd" name="id" value="<?php echo $datos["id"];?>">

<?php 
                
                $update =  FormularioController:: UpdateItemController();

                if($update){

                  echo '<script>
      
                         if(window.history.replaceState){
                          window.history.replaceState(null,null,window.location.href);
                         }
      
                        </script>';
              
                  echo "<div class='alert alert-success'>Actualizacion Exitosa!</div>
                    
                      <script>
                             setTimeout(function(){
                                window.location ='index.php?pages=inicio';
                             },3000);
                      </script>";
                 }
            
?>
                
                <button type="submit" class="btn btn-primary">Actualizar</button>

</form>


