<?php
    require '../../model/model_carrera.php';
    $MU = new Modelo_carrera();//Instaciamos
    $consulta = $MU->Cargara_Select_gra();
    echo json_encode($consulta);

?>