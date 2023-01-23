function copiar() {
    var copiado = document.getElementById('IdUnico').value;
    if (navigator.clipboard.writeText(copiado)) {
        document.getElementById("IdBotao").textContent = "Copiado!";
    }

    setInterval(function () {
        document.getElementById("IdBotao").textContent = "Copiar";
    }, 3000
    );

    console.log(copiado);
}
