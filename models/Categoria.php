<?php 
    class Categoria extends Conectar{

        public function get_categoria(){
            $conectar=parent::conexion();
            $sql="SELECT * FROM tbl_categoria WHERE estatus=1;";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

    }   
?> 