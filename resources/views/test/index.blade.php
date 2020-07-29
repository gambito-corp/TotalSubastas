@extends('layouts.app')
@push('styles')
@endpush
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul id="users" class="list-unstyled overflow-auto text-info" style="height: 45vh"></ul>
            </div>
            <div class="col-md-9">
                <ul id="messages" class="list-unstyled overflow-auto" style="height: 45vh"></ul>
            </div>
        </div>
        <form action="">
            <div class="row">
                <input type="submit" class="btn btn-block btn-success" value="Pujar" id="send">
            </div>
        </form>
    </div>
@endsection
@push('scripts')
    <script>
        const usersElement = document.getElementById('users');
        const messagesElement = document.getElementById('messages');

        Echo.join('chat')
        .here((users) =>{
            users.forEach((user, index) =>{
                let element = document.createElement('li');
                element.setAttribute('id', user.id);
                element.innerText=user.name;
                usersElement.appendChild(element);
            });
        })
        .joining((user) =>{
            let element = document.createElement('li');
            element.setAttribute('id', user.id);
            element.innerText=user.name;
            usersElement.appendChild(element);
        })
        .leaving((user) =>{
            let element = document.getElementById(user.id);
            element.parentNode.removeChild(element);
        })
        .listen('MessageSent', (e) =>{
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
