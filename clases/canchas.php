<?php
require_once("conectar.php");
class Canchas extends Conectar{
    private $db;
    
    public function __construct(){
        $this->db=parent::conectar();
        parent::setNames();   
    }
    public function getDatos(){
        $sql="
            select
            id_cancha,id_gym,Nombre,Precio
            from
            canchas;
            ";
       $datos= $this->db->query($sql);
       $arreglo=array();
       while($reg=$datos->fetch_object()){
            $arreglo[]=$reg;
       }  
       return $arreglo;   
    }

}
?>
