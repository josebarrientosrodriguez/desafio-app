@extends('layouts/template')
@section('title','Pacientes')
@section('contenido')
<main>
    <div class="container-sm py-4">
        <form action="{{url('pacientes')}}" method="post">
            @csrf
        </form>


    </div>
</main>
