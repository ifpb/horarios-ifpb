$(document).on('click', '.remove-res', function(e) {
    e.preventDefault();
    let reservationId = $(this).attr('reservation-id')

    reservationToRemove = $('.reservation-' + reservationId);

    swal({
        title: "Tem certeza disto?",
        text: "Esta ação é irreversível e pode causar danos irreparáveis!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Sim, desejo continuar!",
        cancelButtonText: "Cancelar",
    }).then(result => {
        if(result.value) {
            reservationToRemove.fadeOut();

            $.get(`/admin/salas/reservas/${reservationId}/remover`).fail(function() {
                reservationToRemove.parent().append('<span class="text-sm text-red-dark mt-2">Houve um erro para remover a reserva! (Atualize e tente novamente)</span>');
            });
        }
    });
    //
    // loadingStatus = '<img src="/svg/loading.svg" class="loading" style="width:40px; height:40px;" title="Carregando!" />';
    // reservationToRemove.parent().append(loadingStatus);

});