function deleteProduct(routeUrl, idProduct){

    if (confirm('Deseja confirmar a exclusao?')){
        $.ajax({
            url: routeUrl,
            method: 'DELETE',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:{
                id: idProduct
            },
            beforeSend: function(){
                $.blockUI({
                    message: 'Carregando...',
                    timeout: 6000
                });
            },
        }).done(function (data){
            $.unblockUI();
            console.log(data);
        }).fail(function(data){
            $.unblockUI();
            alert('Não foi possível excluir!'); 
        });
    }
}