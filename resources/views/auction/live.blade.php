@extends('layouts.app')
@section('content')
<div class="container">
    @livewire('subastas.live.index')
</div>
@endsection
@push('scripts')
    <script>
        const usersElement = document.getElementById('users');
        const messagesElement = document.getElementById('messages');

        Echo.join('chat')
        .here((users) =>{
            let cuenta = users.length;
            let element = document.getElementById('users');
            element.innerText=cuenta;
            usersElement.appendChild(element);
        })
        .joining((user) =>{
            let cuenta = users.length;
            let element = document.getElementById('users');
            element.innerText=cuenta;
            usersElement.appendChild(element);
        })
        .leaving((user) =>{
            var element = document.getElementById(user);
            element.parentNode.removeChild(element);
            let cuenta = users.length;
            var element = document.getElementById('users');
            element.innerText=cuenta;
            usersElement.appendChild(element);
        })
        .listen('scroll', (e) =>{
            let element = document.createElement('li');

            element.setAttribute('id', e.user.id);
            element.innerText = e.user.name + ' : ' + e.message;

            messagesElement.appendChild(element);
        });
    </script>
    <script>
        const sendElement = document.getElementById('send');
        const messageElement = document.getElementById('messages');

        sendElement.addEventListener('click', (e)=>{
            e.preventDefault();
            window.axios.post('/test/message', {
                message: '100'
            });
        })
    </script>
@endpush
