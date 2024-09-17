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



require_once("../../loader.php");
require_once("../../helpers/querys.php");

$user = new User;
$core = new Core;
$errors = array();

// Validación de campos
if (empty($_POST['fname'])) {
    $errors['fname'] = $lang['validate_field_ajax122'];
}
if (empty($_POST['lname'])) {
    $errors['lname'] = $lang['validate_field_ajax123'];
}

if (empty($_POST['phone_custom'])) {
    $errors['phone_custom'] = $lang['validate_field_ajax128'];
}
if (empty($_POST['address'])) {
    $errors['address'] = $lang['validate_field_ajax88'];
}

   

if (!isset($response['status'])) {

    // Construir respuesta JSON
    $response = array();

    // Procesar datos y realizar inserción
    $data = array(
        'lname' => cdp_sanitize($_POST['lname']),
        'fname' => cdp_sanitize($_POST['fname']),
        'phone' => cdp_sanitize($_POST['phone']),
        'email' => cdp_sanitize($_POST['email']),
        'sender_id' => $_SESSION['userid']
    );

    $recipient_id = cdp_insertRecipient($data);

    if ($recipient_id !== null && isset($_POST["total_address"])) {
        for ($count = 0; $count < $_POST["total_address"]; $count++) {
            $dataAddresses = array(
                'recipient_id' =>  $recipient_id,
                'address' =>  cdp_sanitize($_POST["address"][$count]),
                'country' =>  cdp_sanitize($_POST["country"][$count]),
                'city' =>  cdp_sanitize($_POST["city"][$count]),
                'state' =>  cdp_sanitize($_POST["state"][$count]),
                'postal' =>  cdp_sanitize($_POST["postal"][$count])
            );
            cdp_insertAddressRecipient($dataAddresses);
        }
    }

   
    if ($recipient_id) {
        $response['status'] = 'success';
        $response['message'] = $lang['message_ajax_success_add'];
    } else {
        $response['status'] = 'error';
        $response['message'] = $lang['message_ajax_error1'];
    }

    header('Content-type: application/json; charset=UTF-8');
    echo json_encode($response);
} 


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
?>