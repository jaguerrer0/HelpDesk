<?php 
    class Ticket extends Conectar{

        public function insert_ticket($usu_id,$cat_id,$tick_titulo,$tick_descrip){
            $conectar=parent::conexion();
            $sql="INSERT INTO tbl_ticket (tick_id, usu_id, cat_id, tick_titulo, tick_descrip, fecha_crea, estatus) VALUES (NULL, ?, ?, ?, ?, now(), '1');";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $usu_id);
            $sql->bindValue(2, $cat_id);
            $sql->bindValue(3, $tick_titulo);
            $sql->bindValue(4, $tick_descrip);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function listar_ticket_x_usu($usu_id){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT 
            tbl_ticket.tick_id, 
            tbl_ticket.usu_id, 
            tbl_ticket.cat_id, 
            tbl_ticket.tick_titulo, 
            tbl_ticket.tick_descrip,
            tbl_ticket.fecha_crea,
            tbl_usuario.usu_nombre, 
            tbl_usuario.usu_apellido, 
            tbl_categoria.cat_nombre 
            FROM 
            tbl_ticket 
            INNER JOIN tbl_categoria ON tbl_ticket.cat_id = tbl_categoria.cat_id 
            INNER JOIN tbl_usuario ON tbl_ticket.usu_id = tbl_usuario.usu_id 
            WHERE 
            tbl_ticket.estatus = 1
            AND tbl_usuario.usu_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $usu_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

    }   
?>