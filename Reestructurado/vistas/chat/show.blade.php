@extends('layouts.app')
@section('content')
    @php

        $data2 = ['hola'=> 1, 'adios' => 2,];
    @endphp
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Subasta Online
                    </div>
                    <div class="card-body">
                        <p class="h1">Pagina de la subasta</p>
                        <div class="container">
                            <div class="row p-2">
                                <div class="col-4">
                                    <div class="container-fluid">
                                        <div class="row text-left">
                                            <div class="col-12">
                                                <p class="h5">Usuarios Conectados</p>
                                                <ul id="users" class="list-unstyled overflow-auto" style="height: 22vh">
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                                <ul id="messages" class="list-unstyled overflow-auto" style="height: 45vh">
                                                    @forelse($data as $dat)
                                                        <li>
                                                            {{$dat->users->name}}: {{$dat->message}} <br>
                                                        </li>
                                                    @empty
                                                        toadvia nadie pujo
                                                    @endforelse
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-3">
                                <div class="col-12">
                                    <form>
                                        <input type="hidden" id="message" value="100">
                                        <button id="send" class="btn btn-success btn-block" type="submit"> Pujar {{$puja}} Soles</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        // var usersElement = $('#users')[0];
        // var messagesElement = $('#messages')[0];
        const userElement = document.getElementById('users')
        const messagesElement = document.getElementById('messages')

        Echo.join('chat')
            .here((users)=>{
                users.forEach((user, index) =>{
                    // var element = $("<li id='"+user.id+"'></li>").text(user.name);
                    // $("#users").append(element);
                    let element = document.createElement('li');
                    element.setAttribute('id', user.id);
                    element.innerText = user.name;
                    userElement.appendChild(element);
                });
            })
            .joining((user)=>{
                // var element = $("<li id='"+user.id+"'></li>").text(user.name);
                // $("#users").append(element);
                let element = document.createElement('li');
                element.setAttribute('id', user.id);
                element.innerText = user.name;
                userElement.appendChild(element);
            })
            .leaving((user)=>{
                // $('#'+user.id).remove();
                let element = document.getElementById(user.id);
                element.parentNode.removeChild(element);
            })
            .listen('MessageSent', (e)=>{
                let element = document.createElement('li');
                element.setAttribute('id', e.user.id);
                element.innerText = e.user.name +': '+ e.message;
                messagesElement.appendChild(element);
            });
    </script>
    <script>
        const sendElement = document.getElementById('send');
        const messageElement = document.getElementById('message');
        sendElement.addEventListener('click', (e)=>{
            e.preventDefault();
            window.axios.post('/chat/message', {
                message: messageElement.value
            });
            // messageElement.value = '';
        });
    </script>
@endpush

