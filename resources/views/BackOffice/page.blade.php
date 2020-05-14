@extends('BackOffice.layouts.layout')
@section('title-pre', 'TotalSubastas')
@section('title')
@section('css')
@section('fuentes')
@section('content_header', 'Panel De Control')
@section('BreadCrumbs')

@section('contenido')
<h1>Hola Mundooooo</h1>
@endsection

@section('RSB-Title', 'Menu de Soporte')
@section('RSB-SubTitle', 'Menu de apoyo para funciones de rederizado')
@section('RSB-Menu')
    <ul>
        <li>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <input type="submit" value="Cerrar Sesion">
            </form>
        </li>
    </ul>
@endsection
@section('frase_footer', 'Diseñado Para Ti')
@section('plugins')
@section('js')


@endsection


