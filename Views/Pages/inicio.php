<?php

  if(!isset($_SESSION["logOut"])){

    echo '<script>window.location = "index.php?pages=ingreso";</script>';
    return;
    
  }else{
   
    if(!$_SESSION["logOut"]){
      echo '<script>window.location = "index.php?pages=ingreso";</script>';
      return;
     }
   
   }
  $datos = FormularioController:: consultarController(null,null,null);
  
  $update =  new FormularioController();
  $update-> UpdateItemController();

 
?>
<table class="table table-bordered">
    <thead>
      <tr>
          <th>#</th>
          <th>Name</th>
          <th>Lastname</th> 
          <th>Phone</th> 
          <th>Email</th>
          <th>Fecha</th>
          <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($datos as $key => $info):?>
      <tr>
      <td><?php echo ($key+1); ?></td>
        <td><?php echo $info["nombre"]; ?></td>
        <td><?php echo $info["apellido"]; ?></td>
        <td><?php echo $info["celular"]; ?></td>
        <td><?php echo $info["correo"]; ?></td>
        <td><?php echo $info["fecha"]; ?></td>
        <td>
            <div class="btn-group">
                <a class="btn btn-warning" href="index.php?pages=editar&id=<?php echo $info["id"]; ?>"><i class="fas fa-pencil-alt"></i></a>&nbsp;&nbsp;&nbsp;
                <form method="post">
                    <input type="hidden"  id="ipwd" name="id" value="<?php echo $info["id"];?>">
                    <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                    <?php
                           $delete = new FormularioController();
                           $delete->deleteItemController();
                    ?>
                </form>
            </div>
        </td>
      </tr>
    <?php endforeach ?>
    </tbody>
  </table>