Echo.channel('notifications')
    .listen('UserSessionChanged', (e) => {
        console.log(e);
        console.log(e.message);
        console.log(e.type);
        const NOTIFICATION_ELEMENT = document.getElementById('notification');

        NOTIFICATION_ELEMENT.innerText = e.message;

        NOTIFICATION_ELEMENT.classList.remove('invisible');
        NOTIFICATION_ELEMENT.classList.remove('alert-success');
        NOTIFICATION_ELEMENT.classList.remove('alert-danger');

        NOTIFICATION_ELEMENT.classList.add('alert-' + e.type);
    });
