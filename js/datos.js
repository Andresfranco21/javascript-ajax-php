var btn = document.getElementById("boton_consultar");

if (btn) {
    btn.addEventListener('click', () => {
        var genero = document.getElementById("genero").value;
        $.ajax({
            url: "recibido.php",
            method: "POST",
            data: { peticion: genero },
        }).done(function (res) {
            var result = JSON.parse(res);
            console.log(result);
        });
    });

}