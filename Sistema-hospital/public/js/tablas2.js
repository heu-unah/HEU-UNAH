$(document).ready(function(){
    $('#tablaHab').DataTable({
        searching: false,
        paging: true,
        info:false,
        language: {
            lengthMenu: 'Mostrar _MENU_ registros',
            paginate: {
            first:      "Primero",
            previous:   "Anterior",
            next:       "Siguiente",
            last:       "&Uacute;ltimo"
            },
        }
    });

    $('#tablaHab tbody').on( 'click', 'tr', function () {

        // Con este código se obtiene el valor de la primer columna de la tabla,
        // con esto podremos evitar la generación de tanto html con el foreach.
        var hab = $(this).closest('tr').find('td').eq(0).text();
        var hab1 = $(this).closest('tr').find('td').eq(1).text();

        document.getElementById('hab').value = hab;
        document.getElementById('hab1').value = hab1;

        // Este código selecciona y deselecciona el registro en el datatable.
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            $('#tablaH tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });

    var Ficha = document.getElementById("Ficha");
    if(Ficha) {


        Ficha.onclick = function() 
        {

        
        
            var code = document.getElementById("code").value;
            var code2 = document.getElementById("code2").value;
            var code3 = document.getElementById("code3").value;

            document.getElementById("idFicha").value = code;
            document.getElementById("Persona_Nombre").value = code2;
            document.getElementById("Persona_Apellido").value = code3;

            $('#buscarFicha').modal('hide');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').remove();
    
        }
    }

    var Hab = document.getElementById("Hab");
    if(Hab) {


        Hab.onclick = function() 
        {

        
        
            var hab = document.getElementById("hab").value;
            var hab1 = document.getElementById("hab1").value;

            document.getElementById("idHabitacion").value = hab;
            document.getElementById("habitacion_numero").value = hab1;


            $('#buscarhabitacion').modal('hide');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').remove();
    
        }
    }

});
