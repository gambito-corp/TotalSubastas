@extends('layouts.app')
@section('content')
@livewire('subasta.subasta-form')
@endsection
@push('scripts')
{{--    <script>--}}
{{--        // var usersElement = $('#users')[0];--}}
{{--        // var messagesElement = $('#messages')[0];--}}
{{--        const userElement = document.getElementById('users')--}}
{{--        const messagesElement = document.getElementById('messages')--}}

{{--        Echo.join('chat')--}}
{{--            .here((users)=>{--}}
{{--                users.forEach((user, index) =>{--}}
{{--                    // var element = $("<li id='"+user.id+"'></li>").text(user.name);--}}
{{--                    // $("#users").append(element);--}}
{{--                    let element = document.createElement('li');--}}
{{--                    element.setAttribute('id', user.id);--}}
{{--                    element.innerText = user.name;--}}
{{--                    userElement.appendChild(element);--}}
{{--                });--}}
{{--            })--}}
{{--            .joining((user)=>{--}}
{{--                // var element = $("<li id='"+user.id+"'></li>").text(user.name);--}}
{{--                // $("#users").append(element);--}}
{{--                let element = document.createElement('li');--}}
{{--                element.setAttribute('id', user.id);--}}
{{--                element.innerText = user.name;--}}
{{--                userElement.appendChild(element);--}}
{{--            })--}}
{{--            .leaving((user)=>{--}}
{{--                // $('#'+user.id).remove();--}}
{{--                let element = document.getElementById(user.id);--}}
{{--                element.parentNode.removeChild(element);--}}
{{--            })--}}
{{--            .listen('MessageSent', (e)=>{--}}
{{--                let element = document.createElement('li');--}}
{{--                element.setAttribute('id', e.user.id);--}}
{{--                element.innerText = e.user.name +': '+ e.message;--}}
{{--                messagesElement.appendChild(element);--}}
{{--            });--}}
{{--    </script>--}}
{{--    <script>--}}
{{--        const sendElement = document.getElementById('send');--}}
{{--        const messageElement = document.getElementById('message');--}}
{{--        sendElement.addEventListener('click', (e)=>{--}}
{{--            e.preventDefault();--}}
{{--            window.axios.post('/chat/message', {--}}
{{--                message: messageElement.value--}}
{{--            });--}}
{{--            // messageElement.value = '';--}}
{{--        });--}}
{{--    </script>--}}
@endpush

