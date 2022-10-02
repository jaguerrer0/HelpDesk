<?php
    require_once("../config/conexion.php");
    require_once("../models/Categoria.php");
    $categoria = new Categoria();

    switch($_GET["op"]){
        case "combo":
            $datos = $categoria->get_categoria();
            if(is_array($datos)==true and count($datos)>0){
                /* Primera opcion del combobox */
                /* $html= "<option>- Seleccionar una opcion -</option>"; */
                /* Llenado del combox desde la base de datos */
                foreach($datos as $row)
                {
                    $html.= "<option value='".$row['cat_id']."'>".$row['cat_nombre']."</option>";
                }
                echo $html;
            }
        break;
    }
?>