function confirmaEliminaP(perId) {
    let r=confirm("Tem a certeza que quer eliminar o registo #"+ perId +"?");
    if (r == true) {
        window.location.href = "eliminar_percursos.php?id="+perId;
    }
}

function confirmaEliminaC(perId) {
    let r=confirm("Tem a certeza que quer eliminar o registo #"+ perId +"?");
    if (r == true) {
        window.location.href = "eliminar_calendario.php?id="+perId;
    }
}

function confirmaEliminaM(perId) {
    let r=confirm("Tem a certeza que quer eliminar o registo #"+ perId +"?");
    if (r == true) {
        window.location.href = "eliminar_marcas.php?id="+perId;
    }
}