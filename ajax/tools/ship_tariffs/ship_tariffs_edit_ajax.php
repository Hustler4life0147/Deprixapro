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

require_once("../../../loader.php");
require_once("../../../helpers/querys.php");

$errors = array();

if (empty($_POST['country_destiny']))
    $errors['country_destiny'] =  $lang['validate_field_ajax1'];

if (empty($_POST['state_destinystates']))
    $errors['state_destinystates'] = $lang['validate_field_ajax3'];


if (empty($_POST['city_destinycities']))
    $errors['city_destinycities'] = $lang['validate_field_ajax2'];

if (empty($_POST['country_origin']))
    $errors['country_origin'] = $lang['validate_field_ajax4'];

if (empty($_POST['initial_range']))
    $errors['initial_range'] = $lang['validate_field_ajax5'];

if (empty($_POST['final_range']))
    $errors['final_range'] = $lang['validate_field_ajax6'];

if (empty($_POST['tariff_price']))
    $errors['tariff_price'] = $lang['validate_field_ajax7'];




if (CDP_APP_MODE_DEMO === true) {
?>

    <div class="alert alert-warning" id="success-alert">
        <p><span class="icon-minus-sign"></span><i class="close icon-remove-circle"></i>
            <span>Error! </span> There was an error processing the request
        <ul class="error">

            <li>
                <i class="icon-double-angle-right"></i>
                This is a demo version, this action is not allowed, <a class="btn waves-effect waves-light btn-xs btn-success" href="https://codecanyon.net/item/courier-deprixa-pro-integrated-web-system-v32/15216982" target="_blank">Buy DEPRIXA PRO</a> the full version and enjoy all the functions...

            </li>


        </ul>
        </p>
    </div>
    <?php
} else {

    $response = array(); // Inicializar el array de respuesta

    // Validación de rango inicial y final

    if (isset($_POST['initial_range']) && isset($_POST['final_range']) && ($_POST['final_range'] < $_POST['initial_range'])) {
        $response['status'] = 'error';
        $response['message'] = $lang['validate_field_ajax8'];
    } else if (isset($_POST['country_origin']) && isset($_POST['country_destiny']) && isset($_POST['initial_range']) && isset($_POST['final_range'])) {
        if (cdp_verifyRangeTariffsExist($_POST['country_origin'], $_POST['country_destiny'], $_POST['initial_range'], $_POST['final_range'], $_POST['id'])) {
            $response['status'] = 'error';
            $response['message'] = $lang['validate_field_ajax9'];
        }
    }

    if (!isset($response['status'])) {
        // No se encontraron errores en la validación
        $data = array(
            'tariff_price' => cdp_sanitize($_POST['tariff_price']),
            'initial_range' => cdp_sanitize($_POST['initial_range']),
            'final_range' => cdp_sanitize($_POST['final_range']),
            'country_origin' => cdp_sanitize($_POST['country_origin']),
            'country_destiny' => cdp_sanitize($_POST['country_destiny']),
            'state_destinystates' => cdp_sanitize($_POST['state_destinystates']),
            'city_destinycities' => cdp_sanitize($_POST['city_destinycities']),
            'id' => cdp_sanitize($_POST['id'])
        );

        $insert = cdp_updateTariffs($data);

        if ($insert) {
            $response['status'] = 'success';
            $response['message'] = $lang['message_ajax_success_updated'];
        } else {
            $response['status'] = 'error';
            $response['message'] = $lang['message_ajax_error1'];
        }
    }

    header('Content-type: application/json; charset=UTF-8');
    echo json_encode($response);


    if (!empty($errors)) {
    ?>
        <div class="alert alert-danger" id="success-alert">
            <p><span class="icon-minus-sign"></span><i class="close icon-remove-circle"></i>
                <?php echo $lang['message_ajax_error2']; ?>
            <ul class="error">
                <?php
                foreach ($errors as $error) { ?>
                    <li>
                        <i class="icon-double-angle-right"></i>
                        <?php
                        echo $error;
                        ?>
                    </li>
                <?php
                }
                ?>
            </ul>
            </p>
        </div>

    <?php
    }

    if (isset($messages)) {

    ?>
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <p><span class="icon-info-sign"></span>
                <?php
                foreach ($messages as $message) {
                    echo $message;
                }
                ?>
            </p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

<?php
    }
}
?>