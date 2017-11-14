<?php
if(!empty($Resultados ))  
{ 
    $outputhead = '';
    $outputbody = '';  
    $outputtail ='';

    $outputhead .= '<div class="table-responsive">
                    <table class="table table-condensed table-striped table-bordered table-hover">
                        <thead>
                            <th>Número de Identidad</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Condición</th>
                            <th>Ubicación</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                ';
                  
    foreach ($Resultados as $Resultado)    
    {   
    $outputbody .=  ' 
                
                            <tr>
                                <td>{{$Resultado->idPersona}}</td>
                                <td>{{$Resultado->Persona_Nombre}}</td>
                                <td>{{$Resultado->Persona_Apellido}}</td>
                                <td>{{$Resultado->condicion_llegada}}</td>
                                <td>{{$Resultado->ubicacion}}</td>
                                <td><a href="#">Actualizar</a><a href="#">Eliminar</a></td>
                            </tr>
                    ';
                
    }  

    $outputtail .= ' 
                        </tbody>
                    </table>
                </div>';
         
    echo $outputhead; 
    echo $outputbody; 
    echo $outputtail; 
 }  
 
 else  
 {  
    echo 'Datos no encontrados';  
 } 
 ?>  