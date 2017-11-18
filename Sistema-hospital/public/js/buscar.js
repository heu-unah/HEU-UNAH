$(document).ready(function(){
    $("#kwd_search").keyup(function(){
        if( $(this).val() != "")
        {
            $("#tabla > tbody > tr").hide();
            
            $("#tabla td:contains-ci('" + $(this).val() + "')").parent("tr").show();
           
        }
        else
        {
            $("#tabla tbody>tr").show();
            
        }
    });


    $("#kw_search").keyup(function(){
        if( $(this).val() != "")
        {
            $("#tablaM > tbody > tr").hide();
            
            $("#tablaM td:contains-ci('" + $(this).val() + "')").parent("tr").show();
           
        }
        else
        {
            $("#tablaM tbody>tr").show();
            
        }
    });

    $("#k_search").keyup(function(){
        if( $(this).val() != "")
        {
            $("#tabla2 > tbody > tr").hide();
            
            $("#tabla2 td:contains-ci('" + $(this).val() + "')").parent("tr").show();
           
        }
        else
        {
            $("#tabla2 tbody>tr").show();
            
        }
    });





    
});

$.extend($.expr[":"], 
{
    "contains-ci": function(elem, i, match, array) 
    {
        return (elem.textContent || elem.innerText || $(elem).text() || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
});
