"use strict";

$(function () {


    cdp_load_countries_origin();
    cdp_load_countries_destiny();

    cdp_load_states();
    cdp_load_cities();
});


function cdp_load_countries_origin() {

    $("#country_origin").select2({
        ajax: {
            url: "ajax/select2_countries.php",
            dataType: 'json',

            delay: 250,
            data: function (params) {
                return {
                    q: params.term // search term
                };
            },
            processResults: function (data) {
                return {
                    results: data
                };
            },
            cache: true
        },
        placeholder: translate_search_country,
        allowClear: true
    });
}

function cdp_load_countries_destiny() {

    $("#country_destiny").select2({
        ajax: {
            url: "ajax/select2_countries.php",
            dataType: 'json',
            delay: 250,
            data: function (params) {
                return {
                    q: params.term // search term
                };
            },
            processResults: function (data) {
                return {
                    results: data
                };
            },
            cache: true
        },
        placeholder: translate_search_country,
        allowClear: true
    }).on('change', function (e) {

        var country = $("#country_destiny").val();

        $("#state_destinystates").attr("disabled", true);
        $("#state_destinystates").val(null);

        $("#city_destinycities").val(null);
        $("#city_destinycities").attr("disabled", true);

        if (country != null) {
            $("#state_destinystates").attr("disabled", false);
        }
        cdp_load_cities();
        cdp_load_states();
    });
}

function cdp_load_states() {
    var country = $("#country_destiny").val();

    $("#state_destinystates").select2({
        ajax: {
            url: "ajax/select2_states.php?id=" + country,
            dataType: 'json',

            delay: 250,
            data: function (params) {
                return {
                    q: params.term // search term
                };
            },
            processResults: function (data) {
                return {
                    results: data
                };
            },
            cache: true
        },
        placeholder: translate_search_state,
        allowClear: true
    }).on('change', function (e) {

        var state = $("#state_destinystates").val();

        $("#city_destinycities").attr("disabled", true);
        $("#city_destinycities").val(null);

        if (state != null) {
            $("#city_destinycities").attr("disabled", false);
        }

        cdp_load_cities();
    });
}

function cdp_load_cities() {
    var state = $("#state_destinystates").val();

    $("#city_destinycities").select2({
        ajax: {
            url: "ajax/select2_cities.php?id=" + state,
            dataType: 'json',
            delay: 250,
            data: function (params) {
                return {
                    q: params.term // search term
                };
            },
            processResults: function (data) {
                return {
                    results: data
                };
            },
            cache: true
        },
        placeholder: translate_search_city,
        allowClear: true
    });
}




// AJAX sweetalert2 guardar

$(document).ready(function() {
    $("#save_data").submit(function(event) {
        event.preventDefault();


        // Obtén los valores de los campos
        var tariff_price = $('#tariff_price').val(); 
        var initial_range = $('#initial_range').val();
        var final_range = $('#final_range').val();
        var country_origin = $('#country_origin').val();
        var country_destiny = $('#country_destiny').val();
        var state_destinystates = $('#state_destinystates').val();
        var city_destinycities = $('#city_destinycities').val();




       // Almacena los nombres de los campos faltantes
        var missingFields = [];

        // Verifica si los campos obligatorios están vacíos y guarda los nombres en el array
        if (!tariff_price) missingFields.push(message_error_form34);
        if (!initial_range) missingFields.push(message_error_form32);
        if (!final_range) missingFields.push(message_error_form33);
        if (!country_origin) missingFields.push(message_error_form31);
        if (!country_destiny) missingFields.push(message_error_form28);
        if (!state_destinystates) missingFields.push(message_error_form29);
        if (!city_destinycities) missingFields.push(message_error_form30);




         // Verifica si hay campos faltantes
        if (missingFields.length > 0) {
            // Construye el mensaje de alerta
            var alertMessage = message_error_form5;
            alertMessage += '\n\n- ' + missingFields.join('\n- ');

            // Muestra el mensaje de alerta
            Swal.fire({
                type: 'error',
                title: message_error_form1,
                text: alertMessage,
                confirmButtonColor: '#336aea',
                showConfirmButton: true,
            });

        } else {

        // Configurar objeto FormData
        var data = new FormData(this);

      

        // Realizar la solicitud AJAX
        $.ajax({
            url: "ajax/tools/ship_tariffs/ship_tariffs_add_ajax.php",
            type: 'POST',
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                Swal.fire({
                   title: message_error_form6,
                    text: message_error_form14,
                    type: 'info',
                    showCancelButton: false,
                    showConfirmButton: false,
                    allowOutsideClick: false,
                    onBeforeOpen: () => {
                        Swal.showLoading();
                    },
                });
            },
            success: function(response) {
                Swal.close();
                if (response.status === 'success') {
                    Swal.fire({
                        type: 'success',
                        title: message_error_form15,
                        showConfirmButton: false,
                        timer: 1500,
                        timerProgressBar: true,
                    }).then(() => {
                        // Redirigir al listado de clientes
                        window.location.href = 'shipping_tariffs_list.php';
                    });
                } else {
                    Swal.fire({
                        type: 'error',
                        title: message_error_form18,
                        text: response.message || message_error_form17,
                        confirmButtonColor: '#336aea',
                        showConfirmButton: true,
                    });
                }
            },
            error: function() {
                Swal.close();
                Swal.fire({
                    type: 'error',
                    title: message_error_form18,
                    text: message_error_form19,
                    confirmButtonColor: '#336aea',
                    showConfirmButton: true,
                });
            }
        });

      }

    });
    
});



document.getElementById("initial_range").addEventListener("keypress", onlyValidNumber);

document.getElementById("final_range").addEventListener("keypress", onlyValidNumber);

document.getElementById("tariff_price").addEventListener("keypress", onlyValidNumber);

function onlyValidNumber(event) {
    if (event.charCode < 46 || event.charCode > 57) {
        event.preventDefault();
    }
}

