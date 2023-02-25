<?php

require_once "Controller/PlantillaController.php";
require_once "Controller/FormularioController.php";
require_once "Model/FormularioModel.php";//Asi cual quier controlador puede usar los metodos de este modelo

$callPlantilla = new PlantillaController();
$callPlantilla ->plantillaController();