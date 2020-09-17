<?php
//
//namespace App\Listeners;
//
//use App\Events\SessionUsuario;
//use Illuminate\Auth\Events\Login;
//use Illuminate\Queue\InteractsWithQueue;
//use Illuminate\Contracts\Queue\ShouldQueue;
//
//class UsuarioLogin
//{
//    /**
//     * Create the event listener.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        //
//    }
//
//    /**
//     * Handle the event.
//     *
//     * @param  object  $event
//     * @return void
//     */
//    public function handle(Login $event)
//    {
//        broadcast(new SessionUsuario("{$event->user->name} Se Conecto", 'success'));
//    }
//}
