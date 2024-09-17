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


$db = new Conexion;
$db->cdp_query("SELECT * FROM cdb_settings");
$db->cdp_execute();
$settings = $db->cdp_registro();
$numrows = $db->cdp_rowCount();

if ($numrows > 0) {
    $config_lang = $settings->language;
    $direction_layout = ($config_lang == "ar") ? "rtl" : "ltr";

    // Validar el valor de $config_lang para evitar posibles ataques de inyección de SQL
    $allowed_languages = array("fr", "br", "ar", "es", "en");
    if (!in_array($config_lang, $allowed_languages)) {
        $config_lang = "en"; // Establecer un idioma predeterminado si el valor no es válido
    }

    // Incluir el archivo de idioma según la configuración
    include("languages/$config_lang.php");
} else {
    // Manejar el caso cuando no se encuentra ninguna configuración en la base de datos
    // Aquí puedes definir un comportamiento por defecto o mostrar un mensaje de error
}

