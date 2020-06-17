@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Usuarios</div>

                    <div class="card-body">


                        <ul id="users">

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
    <script>
        window.axios.get('/api/users')
        .then((response) => {
            const USERS_ELEMENT = document.getElementById('users');

            let users = response.data;

            users.forEach((user, index) =>{
                let element = document.createElement('li');

                element.setAttribute('id', user.id);
                element.innerText = user.name;

                USERS_ELEMENT.appendChild(element);
            })
        });
    </script>

    <script>
        const USERS_ELEMENT = document.getElementById('users');
        Echo.channel('users')
            .listen('User.UserCreated', (e)=>{
                
                let element = document.createElement('li');
                element.setAttribute('id', e.user.id);
                element.innerText = e.user.name;
                USERS_ELEMENT.appendChild(element);
            })
            .listen('User.UserUpdated', (e)=>{
                
                let element = document.getElementById(e.user.id);
                element.innerText = e.user.name;
            })
            .listen('User.UserDeleted', (e)=>{
                
                let element = document.getElementById(e.user.id);
                element.parentNode.removeChild(element);
            });
    </script>
@endpush

