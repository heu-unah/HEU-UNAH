$(document).ready(function(){



    $('#tablaM').DataTable({
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

    $('#tabla2').DataTable({
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

    $('#tabla2 tbody').on( 'click', 'tr', function () {

        // Con este código se obtiene el valor de la primer columna de la tabla,
        // con esto podremos evitar la generación de tanto html con el foreach.
        var code22 = $(this).closest('tr').find('td').eq(0).text();
        var code23 = $(this).closest('tr').find('td').eq(1).text();
        var code34 = $(this).closest('tr').find('td').eq(2).text();

        document.getElementById('code22').value = code22;
        document.getElementById('code23').value = code23;
        document.getElementById('code34').value = code34;

        // Este código selecciona y deselecciona el registro en el datatable.
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            $('#tabla2 tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });

    $('#tablaM tbody').on( 'click', 'tr', function () {

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
            $('#tablaM tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });

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

    var btnPaciente = document.getElementById("btnPaciente");
    if(btnPaciente) {


        btnPaciente.onclick = function() 
        {
        
        
            var code = document.getElementById("code").value;
            var code2 = document.getElementById("code2").value;
            var code3 = document.getElementById("code3").value;

            document.getElementById("idPaciente").value = code;
            document.getElementById("Paciente_Nombre").value = code2;
            document.getElementById("Paciente_Apellido").value = code3;

            $('#buscarPacientes').modal('hide');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').remove();
        
        }
    
    
    }

    var btnPaciente = document.getElementById("btnEmpleado");
    if(btnPaciente) {


        btnPaciente.onclick = function() 
        {
        
        
            var code22 = document.getElementById("code22").value;
            var code23 = document.getElementById("code23").value;
            var code34 = document.getElementById("code34").value;

            document.getElementById("idEmpleado").value = code22;
            document.getElementById("Empleado_Nombre").value = code23;
            document.getElementById("Empleado_Apellido").value = code34;

            $('#buscarEmpleado').modal('hide');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').remove();
        
        }
    
    
    }


});