<?php 

require_once "Connection/conexionPDO.php";

class FormularioModel {

    static public function modelRegistro($datos){

        $stmt = conexionPDO::Conectar()->prepare("INSERT INTO profesor(   
            nombre,
            apellido ,
            celular ,
            correo
        )VALUES(
            :nombre,
            :apellido ,
            :celular ,
            :correo)"); 
        
        $stmt->bindParam(":nombre",$datos["name"], PDO::PARAM_STR);
        $stmt->bindParam(":apellido",$datos["lastname"], PDO::PARAM_STR);
        $stmt->bindParam(":celular",$datos["password"], PDO::PARAM_STR);
        $stmt->bindParam(":correo",$datos["email"], PDO::PARAM_STR);

        if($stmt->execute()){
            return "ok";
        }else{
            print_r(conexionPDO::Conectar()->errorInfo());
         }
      
        $stmt->close();
        $stmt = null;
  
    }

    static public function modelConsultar($tabla,$key,$value,$password){

        $query = "";
        //CAMBIAR ESTA PARTE!!!! VIDEO 5 -> MINUTO 9
        if($key == null && $value == null){

            $stmt = conexionPDO::Conectar()->prepare("SELECT * ,DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM $tabla ORDER BY id DESC");
            $stmt->execute();
            echo "<script>console.log('if--->') </script>";

            return $stmt->fetchAll();
                
        }else{
               $stmt = conexionPDO::Conectar()->prepare("SELECT *  FROM $tabla where $key = :$key and celular = :celular");
               $stmt->bindParam(":".$key,$value, PDO::PARAM_STR);
               $stmt->bindParam(":celular",$password, PDO::PARAM_STR);
               $stmt->execute();
               echo "<script>console.log('else--->') </script>";
               return $stmt->fetch();                          
        }     
        $stmt->close();
        $stmt = null;
     
    }

   
    static public function modelSelect($tabla,$key,$value){

        $stmt = conexionPDO::Conectar()->prepare("SELECT *  FROM $tabla where $key = :$key");
        $stmt->bindParam(":".$key,$value, PDO::PARAM_STR);
        $stmt->execute();
       
        echo "<script>console.log('function--->') </script>";

        return $stmt->fetch(); 
    }

    static public function modelActualizar($datos,$tabla){

        $stmt = conexionPDO::Conectar()->prepare("UPDATE $tabla SET  
            nombre=:nombre,
            apellido=:apellido,
            celular=:celular,
            correo=:correo
            WHERE id=:id"); 
        
        $stmt->bindParam(":nombre",$datos["name"], PDO::PARAM_STR);
        $stmt->bindParam(":apellido",$datos["lastname"], PDO::PARAM_STR);
        $stmt->bindParam(":celular",$datos["password"], PDO::PARAM_STR);
        $stmt->bindParam(":correo",$datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":id",$datos["id"], PDO::PARAM_INT);

        if($stmt->execute()){
            return true;
        }else{
            print_r(conexionPDO::Conectar()->errorInfo());
         }
      
        $stmt->close();
        $stmt = null;
  
    }

    static public function modelEliminar($id,$tabla){

        $stmt = conexionPDO::Conectar()->prepare("DELETE FROM  $tabla  WHERE id=:id"); 
    
        $stmt->bindParam(":id",$id, PDO::PARAM_INT);

        if($stmt->execute()){
            return true;
        }else{
            print_r(conexionPDO::Conectar()->errorInfo());
         }
      
        $stmt->close();
        $stmt = null;


    }
}

