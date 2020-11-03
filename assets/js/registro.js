$(document).ready(function() {

    $("#btnLoginDos").click(function(e) {
        e.preventDefault();

        var user = $("#inputUserd").val().trim();
        var pass = $("#inputPasswordd").val().trim();
        var name = $("#inputNombred").val().trim();
        var correo = $("#inputCorreod").val().trim();

        console.log(user + " " + pass + " " + name + " " + correo);

        insertarDato();
    });


    async function insertarDato() {
        const datos = new FormData(document.getElementById('formularior'));

        await fetch('assets/data/register.php', {
            method: 'POST',
            body: datos
        })

        .then(response => response.json())
            .then(response => {
                //console.log(response.data);
                if (response.dato == 'ok') {
                    location.href = "index.html"
                } else {
                    alert("Datos Incorrectos")
                }
            })
            .catch(err => {
                console.log(err);
            });
    }
});