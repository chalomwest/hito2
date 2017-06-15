<?php
require_once("conectar.php");
class Horarios extends Conectar{
    private $db;
    
    public function __construct(){
        $this->db=parent::conectar();
        parent::setNames();   
    }
    public function getDatos(){
        $sql="
            select
            id,fecha,hora,estado,id_cancha,id_cliente
            from
            horarios;
            ";
       $datos= $this->db->query($sql);
       $arreglo=array();
       while($reg=$datos->fetch_object()){
            $arreglo[]=$reg;
       }  
       return $arreglo;   
    }

    public function insertar(){
         $sql= "
          insert into horarios('id','fecha','hora','estado','id_cancha','id_cliente')
          values
          ('".$_POST["id"]."','".$_POST["fecha"]."','".$_POST["hora"]."','".$_POST["estado"]."','".$_POST["id_cancha"]."','"$_POST["id_cliente"]"');
          ";

          $this->db->query($sql);


    }

}
?>