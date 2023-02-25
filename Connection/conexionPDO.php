<?php


class conexionPDO{  

       static public function Conectar(){

         $link = new PDO("mysql:host=localhost;dbname=boletinapp","root",""); 
         $link->exec("set names utf8");
 
         return $link;
 }
}