	$(document).ready(function() {
	//tooltips	
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	
	});
	 //Lenguaje del datatable
	$('.AllDataTable').DataTable({
		language: {
			 	"sProcessing":     "Procesando...",
			    "sLengthMenu":     "Mostrar _MENU_ registros",
			    "sZeroRecords":    "No se encontraron resultados",
			    "sEmptyTable":     "Ningún dato disponible en esta tabla",
			    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
			    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
			    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
			    "sInfoPostFix":    "",
			    "sSearch":         "Buscar :",
			    "sUrl":            "",
			    "sInfoThousands":  ",",
			    "sLoadingRecords": "Cargando...",
			    "oPaginate": {
			        "sFirst":    "Primero",
			        "sLast":     "Último",
			        "sNext":     "Siguiente",
			        "sPrevious": "Anterior"
			    },
			    "oAria": {
			        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
			    }
		}
	});

	// Validacion para deshabilitar el boton ingresar
	$("#password").keyup(function(event) {
		var fieldValue = event.target.value;
		if (fieldValue == 0) {
			$("#send").attr("disabled", "disabled");
		} else {
			$("#send").removeAttr("disabled", "disabled");
		}    
	});	

	$(".nav-tabs a").click(function(){
        $(this).tab('show');
    });

});

$(document).ready(function()
	{
		$('.navbar-nav li a.dropdown-toggle').click(function(e)
		{
			e.preventDefault();
			$(this).parent().toggleClass('open');
		});
		$('[data-toggle="collapse"]').click(function()
		{
			var target = $(this).attr('data-target');
			$(target).toggleClass('in');
		});
	});

$(document).ready(main);
var contador=1;
function main() {
		$('.bt-menu').click(function() {
		if (contador==1) {
				$('.nav_menu').animate({
					left:'23'
				});
				contador=0;
		}else{
			contador=1;
			$('.nav_menu').animate({
					left:'-100%'
				});
		}
	});
	//mostramos y ocultamos submenus
	$('.submenu').click(function() {
		$(this).children('.children').slideToggle();
	});
}

$(document).ready(function() {
    $('#example').DataTable();   
} );


//metodos por el index
function habilitar() {
    
    var contr_pasw = document.getElementById("contr_pasw");
    var btn_enviar = document.getElementById("btn_enviar");

    if(contr_pasw.value != ""){
        btn_enviar.disabled = false;
    }
    else{
        btn_enviar.disabled = true;
    }    
}

function numerico(evt) {
    if(window.Event){
        keynum = evt.keyCode;
    }    
    else{
        keynum = evt.which;
    }
    if((keynum > 47 && keynum < 58 ) || keynum == 8 || keynum == 13){
        return true;
    }
    else{
        return false;
    }

}



	
	
	



