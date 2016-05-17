<script>
    var $modal = $('#modalProductos');

    $('.btnReferencia').click(function (e) {
        e.preventDefault();
        $("#response-modalProductos").html("<p>Buscando...</p>");

        var row = $(this).parents('li');
        var id = row.data('id');
        var tipo = row.data('tipo');
        console.log(tipo);
        var etapa = row.data('etapa');
        var form = $('#formReferencia');
        var url = form.attr('action').replace(':VALUE_ID', 'referencia_id='+id);
        var data = form.serialize();

        $.post(url, data, function (result) {
            /* [0] imagen componentes [1] productos id [2] imagen referencia [3] nombre referencia*/
            $msg = result.split("|");
             if ($msg[1] == 1)
                {
                    $url_image_product = "forkamix";
                }
                if ($msg[1] == 2)
                {
                    $url_image_product = "nutrikimia";
                }
                if ($msg[1] == 3)
                {
                    $url_image_product = "nitroeffi";
                }
                if ($msg[1] == 4)
                {
                    $url_image_product = "simples";
                }
            $url = 'images/referencias/' + $url_image_product + "/" + $msg[2];
            $urlComp = 'images/referencias/componentes/' + $url_image_product + "/" + $msg[1];
            $('#modalProductos #img_referencia').html("<img src ='" + $url +".png' alt='' />"  );
             $('#modalProductos #img_referencia_componentes').html("<h3 class='etapa-" + etapa + "'>"+ $msg[3]+" </h3> <img src ='" + $urlComp +".png' alt='' />"  );

            
        }).fail(function (result) {
            console.log(result);
        
        });
    });
</script>
