window.onload = function() {

var table = $('#dataTableInfo').DataTable({
        'processing': true,
        'searching': true,
        'ordering': false,
        'info': false,
        'paging': true,
        language: {
            search: 'Buscar',
            zeroRecords: 'No se encontraron registros para mostrar.',
            emptyTable: 'No hay registros en la base de datos.',
            lengthMenu: 'Mostrar _MENU_ registros',
            paginate: {
            first:      "Primer",
            previous:   "Anterior",
            next:       "Siguiente",
            last:       "&Uacute;ltimo"
            },
        }
    });

    $('#dataTableInfo tbody').on( 'click', 'tr', function () {
        // Con este código se obtiene el valor de la primer columna de la tabla,
        // con esto podremos evitar la generación de tanto html con el foreach.
        var code = $(this).closest('tr').find('td').eq(0).text();
        var code2 = $(this).closest('tr').find('td').eq(1).text();
        var code3 = $(this).closest('tr').find('td').eq(2).text();

        document.getElementById('code').value = code;
        document.getElementById('code2').value = code2;
        document.getElementById('code3').value = code3;

        // Este código selecciona y deselecciona el registro en el datatable.
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            $('#dataTableInfo tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });

};


var btnPoblarPaciente = document.getElementById("btnPoblarPaciente");
if(btnPoblarPaciente) {

	btnPoblarPaciente.onclick = function() 
    {
		var code = document.getElementById("code").value;
		var code2 = document.getElementById("code2").value;
		var code3 = document.getElementById("code3").value;

		document.getElementById("idPersona").value = code;
		document.getElementById("Persona_Nombre").value = code2;
		document.getElementById("Persona_Apellido").value = code3;

		$('#buscarPersona').modal('hide');
		$('body').removeClass('modal-open');
		$('.modal-backdrop').remove();

	}
}