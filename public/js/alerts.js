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
            closeOnConfirm: true
        },
        function(){
            window.location = url;
        });

    return false;
}