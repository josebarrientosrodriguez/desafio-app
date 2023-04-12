@extends('layouts/template')
@section('title','Crear Cama')
@section('contenido')
    <main>
        <div class="justify-content-center container-sm py-4 w-50">
            <form action="{{url('cama')}}" method="post">
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>¡Error!</strong>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @csrf
                <div class="card">
                    <div class="card-header">
                        Agregar Cama
                    </div>
                    <div class="card-body">
                        <div class="mb3 row">
                            <label class="col-sm-2 col-form-label">Nombre:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="txt_nombre" id="txt_nombre" value="{{old('txt_nombre')}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" id="btn_guardar" name="btn_guardar" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
