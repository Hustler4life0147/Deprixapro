"use strict";

$(function () {
	cdp_load(1);
	cdp_load_countries_origin();
	cdp_load_countries_destiny();
});


//Cargar datos AJAX
function cdp_load(page) {
	var origin = $("#country_origin").val();
	var destiny = $("#country_destiny").val();
	var search = $("#search").val();
	var parametros = { "page": page, 'search': search, 'origin': origin, 'destiny': destiny };
	$("#loader").fadeIn('slow');
	$.ajax({
		url: './ajax/tools/ship_tariffs/ship_tariffs_list_ajax.php',
		data: parametros,
		beforeSend: function (objeto) {
		},
		success: function (data) {
			$(".outer_div").html(data).fadeIn('slow');
		}
	})
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
		minimumInputLength: 2,
		placeholder: translate_search_destiny,
		allowClear: true
	});
}

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
		minimumInputLength: 2,
		placeholder: translate_search_origin,
		allowClear: true
	});
}


//AJAX sweetalert2 borrar

$(document).ready(function() {
    $(document).on('click', '#item_', function(e) {
        var id = $(this).data('id');
        cdp_eliminar(id);
        e.preventDefault();
    });
});
 
function cdp_eliminar(id) {
    swal({
        title: message_delete_confirm,
        text: message_delete_confirm2,
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#336aea',
        cancelButtonColor: '#eb644c',
        confirmButtonText: message_delete_confirm1,
        showLoaderOnConfirm: true,

        preConfirm: function() {
            return new Promise(function(resolve) {
                $.ajax({
                        url: './ajax/tools/ship_tariffs/ship_tariffs_delete_ajax.php',
                        type: 'POST',
                        data: {
                            'id': id,
                        },
                        dataType: 'json'
                    })
                    .done(function(response) {
                        swal(response.message, message_delete_error2, response.status);
                        $('html, body').animate({
                            scrollTop: 0
                        }, 600);
                        $('#resultados_ajax').html(response);
                        cdp_load(1);
                    })
                    .fail(function() {
                        swal('Oops...', message_delete_error, 'error');
                    });
            });
        },
        allowOutsideClick: false
    });
}
