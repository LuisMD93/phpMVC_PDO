<?php 

class FormularioController{


    static public function registroController(){

        if(isset($_POST['rname'])){
          
           $datos = array("name"=>ucfirst($_POST['rname']),
                          "email"=>ucfirst($_POST['remail']),
                          "password"=>$_POST['rpwd'],
                          "lastname"=>"Doe"
          );

          $response = FormularioModel :: modelRegistro($datos,"");

          return $response;
        
        }
    }

    static public function consultarController($item,$value,$password){

        $response = FormularioModel :: modelConsultar("profesor",null,null,null);

        return $response;
    }

    static public function SelectItemController($item,$value){

        $response = FormularioModel :: modelSelect("profesor",$item,$value);
        return $response;

    }

    public function ingresoController(){

        if(isset($_POST['iemail']) && isset($_POST['ipwd'])){

         $response = FormularioModel :: modelConsultar("profesor","correo",ucfirst($_POST['iemail']),$_POST['ipwd']);
         if(!empty($response)){
            $_SESSION["logOut"] = true;
            echo '<script>

                      if(window.history.replaceState){
                             window.history.replaceState(null,null,window.location.href);
                      }
                      window.location = "index.php?pages=inicio";
            </script>';
            
            echo '<div class="alert alert-success">Bienvenido</div>';

         }else{
            
            echo '<script>

                  if(window.history.replaceState){
                        window.history.replaceState(null,null,window.location.href);
                    }
                 </script>';

            echo '<div class="alert alert-danger">Usuario o contrseña erroneo</div>';
         }
        }        
    }

    static public function UpdateItemController(){

        if(isset($_POST['upname'])){

            if($_POST['passwordnew']!=""){

                $password = $_POST['passwordnew'];

            }else{
                $password = $_POST['passwordold'];
            }
          
            $datos = array("name"=>ucfirst($_POST['upname']),
                           "email"=>ucfirst($_POST['upemail']),
                           "password"=>$password,
                           "lastname"=>"Doe",
                           "id"=>$_POST['id']
           );
 
           $response = FormularioModel :: modelActualizar($datos,"profesor");

           return $response;
         
         }

    }

    public function deleteItemController(){

        if (isset($_POST["id"])) {

            $response = FormularioModel:: modelEliminar($_POST["id"],"profesor");
            
            if($response){
                          
                echo '<script>

                      if(window.history.replaceState){
                          window.history.replaceState(null,null,window.location.href);
                      }
                          window.location = "index.php?pages=inicio";
                     </script>';
                
            }

        }
       
    }

}