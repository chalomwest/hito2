<?php
require_once("conectar.php");
class Gym extends Conectar{
    private $db;
    
    public function __construct(){
        $this->db=parent::conectar();
        parent::setNames();   
    }
    public function getDatos(){
        $sql="
            select
            id_gym,Nombre,Descripcion
            from
            gym;
            ";
       $datos= $this->db->query($sql);
       $arreglo=array();
       while($reg=$datos->fetch_object()){
            $arreglo[]=$reg;
       }  
       return $arreglo;   
    }

}
