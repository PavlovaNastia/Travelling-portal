<?php
session_start();
// session_destroy(;)
    require_once '../inc/database.php'; //База данных

    include_once("modelAdmin/modelAdmin.php");
    include_once("modelAdmin/modelAdminProducts.php");
    include_once("modelAdmin/modelAdminOverProducts.php");
    include_once("modelAdmin/modelAdminCategory.php");

    include_once("controllerAdmin/controllerAdmin.php");
    include_once("controllerAdmin/controllerAdminProducts.php");
    include_once("controllerAdmin/controllerAdminOverProducts.php");

    include_once('routeAdmin/routingAdmin.php'); 

    echo $response;