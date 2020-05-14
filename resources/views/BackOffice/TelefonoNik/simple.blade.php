@extends('BackOffice.layouts.layout')
@section('title-pre', 'TotalSubastas')
@section('title', ' -  '.$data->nombre)
@section('css')
@section('fuentes')
@section('content_header', 'Panel De Control')
@section('BreadCrumbs')

@section('contenido')
<h2>Perfil del Rol {{ $data->nombre }}</h2>

@endsection

@section('frase_footer', 'Diseñado Para Ti')
@section('plugins')
@section('js')


