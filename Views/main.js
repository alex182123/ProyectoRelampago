$("#btnregistrar").on("click", function () {
    const urlParams = new URLSearchParams(window.location.search);
    const id = urlParams.get('ID');
    const carac = urlParams.get('Carac');
    const idea1 = urlParams.get('Idea1');
    const idea2 = urlParams.get('idea2');
    const idea3 = urlParams.get('idea3');
    // Obtener valores de los inputs
    const aspecto1 = $("#Aspecto1").val();
    const aspecto2 = $("#Aspecto2").val();
    const aspecto3 = $("#Aspecto3").val();

    // Obtener valores de los selects
    const politico = $("#AspecPolitico").val();
    const economico = $("#AspecEconomico").val();
    const social = $("#AspecSocial").val();
    const tecnologico = $("#AspecTecno").val();
    const ecologico = $("#AspecEcologico").val();
    const legal = $("#AspecLegal").val();
    $.ajax({
        type: "POST",
        url: "../Class/Database/Insertar.php",
        data: {
            id: id,
            carac: carac,
            idea1: idea1,
            idea2: idea2,
            idea3: idea3,
            aspecto1: aspecto1,
            aspecto2: aspecto2,
            aspecto3: aspecto3,
            politico: politico,
            economico: economico,
            social: social,
            tecnologico: tecnologico,
            ecologico: ecologico,
            legal: legal,
            Caracteristicas: '1'
        },
        success: function (response) {
            const urlParams = new URLSearchParams(window.location.search);
            const id = urlParams.get('ID');
            Swal.fire({
                icon: 'success',
                title: 'Registro Exitoso!',
                showConfirmButton: false
            })
            setTimeout(function () {
                window.location.href = "Index.php?ID=" + id;
            }, 3000);
        },
        error: function (xhr, status, error) {
            console.log(xhr);
        }
    });
    // Ahora puedes hacer lo que quieras con los valores de las variables
});

function VerDetalles(ID){
    $.ajax({
        type: "POST",
        url: "../Class/Database/Consultas.php",
        data: {
            ID: ID,
            ConsultarDetalles: '1'
        },
        success: function (response) {
            $('#modbody').html(response);
        },
        error: function (xhr, status, error) {
            console.log(xhr);
        }
    });
}