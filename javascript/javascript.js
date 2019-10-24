function editarTitulo(elemento) {
    elemento.style.display = "none";
    var campoinput = document.getElementsByName("title");
    campoinput[1].style.display = "block";
    campoinput[1].focus();
}

function guardarTitulo(elemento) {
    elemento.style.display = "none";
    var campoinput = document.getElementsByName("title");
    campoinput[0].style.display = "block";
    campoinput[0].innerHTML = elemento.value;
}

function editarDuracion(elemento) {
    elemento.style.display = "none";
    var campoinput = document.getElementsByName("duration");
    campoinput[1].style.display = "block";
    campoinput[1].focus();
}

function guardarDuracion(elemento) {
    elemento.style.display = "none";
    var campoinput = document.getElementsByName("duration");
    campoinput[0].style.display = "block";
    campoinput[0].innerHTML = elemento.value;
}

function addActor() {
    $capa = document.getElementsByClassName("capaAdd");
    $capa[0].style.display = "block";
}

function addDirector() {
    $capa = document.getElementsByClassName("capaAdd");
    $capa[1].style.display = "block";
}