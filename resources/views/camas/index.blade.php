@extends('layouts/template')
@section('title','Camas')
@section('contenido')
    <main>
        <div class="justify-content-center container-sm py-4 w-50">
            @if(isset($mensaje))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>¡Genial!</strong> {{$mensaje}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <div class="float-start">Listado de Camas</div>
                    <div class="float-end"><a href="{{url('cama/create')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Crear Cama</a> </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Usuario Crea</th>
                            <th scope="col">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datosCamas as $datos)
                            <tr>
                                <td>{{$datos->id}}</td>
                                <td>{{$datos->nombre}}</td>
                                <td>{{$datos->usuarioCrea->email}}</td>
                                <td>aca ira un boton</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
