/**
 * Autor: Lucas Forchino
 * Web: http://www.tutorialjquery.com
 
 *
 */
$(document).ready(function(){ //cuando el html fue cargado iniciar

    //añado la posibilidad de editar al presionar sobre edit
    $('.edit').live('click',function(){
        //this = es el elemento sobre el que se hizo click en este caso el link
        //obtengo el id que guardamos en data-id
        var id=$(this).attr('data-id');
        //preparo los parametros
        params={};
        params.id=id;
        params.action="editUsuario";
        $('#popupbox').load('index.php', params,function(){
            $('#block').show();
            $('#popupbox').show();
        })

    })
    //Leer Parametros URL
    function getQueryVariable(variable)
    {
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}
    //añado la posibilidad de editar al presionar sobre edit
    $('.editHijos').live('click',function(){
        //this = es el elemento sobre el que se hizo click en este caso el link
        //obtengo el id que guardamos en data-id
        var id=$(this).attr('data-id');
        //preparo los parametros
        params={};
        params.id=id;
        params.idUser=getQueryVariable("id");
        params.action="editHijos";
        $('#popupbox').load('index.php', params,function(){
            $('#block').show();
            $('#popupbox').show();
        })

    })

    //Borrar usuarios
    $('.deleteHijos').live('click',function(){
        //obtengo el id que guardamos en data-id
        var id=$(this).attr('data-id');
        //preparo los parametros
        params={};
        params.id=id;
        params.action="deleteHijos";
        $('#popupbox').load('index.php', params,function(){
            $('#content').load('index.php',{action:"refreshGrid"});
        })

    })
    //Borrar Hijos
    $('.delete').live('click',function(){
        //obtengo el id que guardamos en data-id
        var id=$(this).attr('data-id');
        //preparo los parametros
        params={};
        params.id=id;
        params.action="deleteUsuario";
        $('#popupbox').load('index.php', params,function(){
            $('#content').load('index.php',{action:"refreshGrid"});
        })

    })

    $('#new').live('click',function(){
        params={};
        params.action="newUsuario";
        $('#popupbox').load('index.php', params,function(){
            $('#block').show();
            $('#popupbox').show();
        })
    })
    $('#newHijos').live('click',function(){
        params={};
        params.idUser=getQueryVariable("id");
        params.action="newHijos";
        $('#popupbox').load('index.php', params,function(){
            $('#block').show();
            $('#popupbox').show();
        })
    })


    $('#usuario').live('submit',function(){
        var params={};
        params.action='saveUsuario';
        params.id=$('#id').val();
        params.nombre=$('#nombre').val();
        params.identificacion=$('#identificacion').val();
        params.email=$('#email').val();
        params.telefono=$('#telefono').val();
        $.post('index.php',params,function(){
            $('#block').hide();
            $('#popupbox').hide();
            $('#content').load('index.php',{action:"refreshGrid"});
        })
        return false;
    })

     $('#hijos').live('submit',function(){
        var params={};
        params.action='saveHijos';
        params.idHijo=$('#idHijo').val();
        params.idUsuario=$('#idUsuario').val();
        params.nombreHijo=$('#nombreHijo').val();
        params.fechaNacimiento=$('#fecha').val();
        params.ciudad=$('#ciudad').val();
        $.post('index.php',params,function(){
            $('#block').hide();
            $('#popupbox').hide();
            $('#content').load('index.php',{action:"refreshGridHijos", idPadre:params.idUsuario});
        })
        return false;
    })


    // boton cancelar, uso live en lugar de bind para que tome cualquier boton
    // nuevo que pueda aparecer
    $('#cancel').live('click',function(){
        $('#block').hide();
        $('#popupbox').hide();
    })


})

NS={};
