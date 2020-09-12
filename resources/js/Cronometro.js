var TiempoRestante = 5;
var CuentaRegresiva = true;


console.log(TiempoRestante, cuentaRegresiva, 'Dentro de La Funcion');

function imprimir() {
    console.log(TiempoRestante);
}

function regresiva() {
    TiempoRestante--;
    // Hace el cambio de cuenta regresiva a progresiva cuando el contador toca 0
    if(TiempoRestante <= 0) {
        CuentaRegresiva = false;
    }
}

function progresiva() {
    TiempoRestante++;
    // Hace el cambio de cuenta progresiva a regresiva cuando el contador toca 5
    if(TiempoRestante >= 5) {
        CuentaRegresiva = true;
    }
}

function inicializarConteo() {
    imprimir();

    // Hace la cuenta regresiva o progresiva dependiendo del parametro
    if(CuentaRegresiva == true) {
        regresiva();
    } else {
        progresiva();
    }

    var TimeOut = setTimeout(() => {
        inicializarConteo();
    }, 1000); // Actualiza el tiempo cada segundo, se puede modificar para manejarlo por milisegundos
}
console.log("Inicializando...");
inicializarConteo();
