<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('notificacion', function ($user) {
    return $user != null;
});

Broadcast::channel('chat', function ($user) {
    if ($user != null){
        return [
            'id' => $user->id,
            'name' => $user->name
        ];
    }
});

Broadcast::channel('subasta.{id}', function ($user, $id) {
    if ($user != null){
        return [
            'id' => $user->id,
            'name' => $user->name
        ];
    }
});

Broadcast::channel('contador.{id}', function ($user, $id) {
    if ($user != null){
        return [
            'id' => $user->id,
            'name' => $user->name
        ];
    }
});

Broadcast::channel('datos.{id}', function ($user, $id) {
    if ($user != null){
        return [
            'id' => $user->id,
            'name' => $user->name
        ];
    }
});

Broadcast::channel('mensaje.{id}', function ($user, $id) {
    if ($user != null){
        return [
            'id' => $user->id,
            'name' => $user->name
        ];
    }
});

Broadcast::channel('ranking.{id}', function ($user, $id) {
    if ($user != null){
        return [
            'id' => $user->id,
            'name' => $user->name
        ];
    }
});
