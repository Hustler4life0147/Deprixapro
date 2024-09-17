<?php
// *************************************************************************
// *                                                                       *
// * DEPRIXA PRO -  Integrated Web Shipping System                         *
// * Copyright (c) JAOMWEB. All Rights Reserved                            *
// *                                                                       *
// *************************************************************************
// *                                                                       *
// * Email: support@jaom.info                                              *
// * Website: http://www.jaom.info                                         *
// *                                                                       *
// *************************************************************************
// *                                                                       *
// * This software is furnished under a license and may be used and copied *
// * only  in  accordance  with  the  terms  of such  license and with the *
// * inclusion of the above copyright notice.                              *
// * If you Purchased from Codecanyon, Please read the full License from   *
// * here- http://codecanyon.net/licenses/standard                         *
// *                                                                       *
// *************************************************************************



// Verifica si el archivo de configuración existe
if (!file_exists('config/config.php')) {
    header("location: install");
    exit;
}

// Incluye el archivo loader.php
require_once("loader.php");

// Crea instancias de las clases User y Core
$user = new User();
$core = new Core();

// Verifica si estamos autenticados
if ($user->cdp_loginCheck() == true) {
    // Determina la vista a cargar según el nivel de usuario

    if ($_SESSION['userlevel'] == 9) {
        include('views/dashboard/index.php');
    } else if ($_SESSION['userlevel'] == 1) {
        include('views/dashboard/dashboard_client.php');
    } else if ($_SESSION['userlevel'] == 2) {
        include('views/dashboard/index.php');
    } else if ($_SESSION['userlevel'] == 3) {
        include('views/dashboard/dashboard_driver.php');
    }
} else {
    // Si no estamos autenticados, redirige al inicio de sesión
    header("location: login.php");
    exit;
}
