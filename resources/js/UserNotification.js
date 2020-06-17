Echo.private('notificacion')
    .listen('SessionUsuario', (e) => {
        console.log(e);
        console.log(e.mensaje);
        console.log(e.clase);
        const elementdiv = document.getElementById('notification');

        elementdiv.innerText = e.mensaje;

        elementdiv.classList.remove('invisible');
        elementdiv.classList.remove('alert-success');
        elementdiv.classList.remove('alert-danger');

        elementdiv.classList.add('alert-' + e.clase);
    });
