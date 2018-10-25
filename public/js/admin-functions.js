$(document).ready(function() {
    iniciarDatatables();

    // Opcional: Scroll automatico até o conteúdo
    // let viewSelect = $('.content-admin');
    //
    // if (viewSelect.length) {
    //     $("html, body").animate({scrollTop: viewSelect.offset().top - 50}, 300);
    // }
});

function createWarning(url, title, text) {
    if (!title)
        title = "Você tem certeza?"

    if (!text)
        text = "Esta ação é irreversível e pode causar danos irreparáveis!"

    swal({
        title: title,
        text: text,
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Sim, desejo continuar!",
        cancelButtonText: "Cancelar",
    }).then(result => {
        if(result.value) window.location = url;
    });

    return false;
}

function iniciarDatatables() {
    let tableSelect = $('.dataTable')

    if(tableSelect.length) {
        tableSelect.DataTable({
            "order": [[ 0, 'desc' ]],
            "language": {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                },
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                }
            }
        });
    }
}