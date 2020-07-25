@extends('layouts.admin')
@section('title')
@section('header')
    <h1 class="m-0 text-dark">{{is_null($user->id)? 'Crear' : 'Editar'}} Usuario</h1>
@endsection
@push('style')


@endpush
@section('content')
    @if($vista=='create')
        @livewire('admin.form.user.create')
    @else

        @livewire('admin.form.user.update', ['user' => $user])
    @endif
@endsection

@push('scripts')


@endpush
