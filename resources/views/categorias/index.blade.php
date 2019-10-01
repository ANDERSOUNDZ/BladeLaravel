@extends('layouts.app')

{{-- con seccion podemos envir diferentes elementos a la pantalla principal, se podria decir que es una manera de decirlo , una aplicacion deuna sola pagina ya que tosdo se ejecuta en el index y comparte todo en las diferentes llamadas --}}

@section('titulo')
    Categorias
@endsection

@section('contenido')

    @include('categorias.partes.lista')
    
@endsection