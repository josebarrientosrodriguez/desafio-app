@extends('layouts/template')
@section('title','Pacientes')
@section('contenido')
    <main>
        <div class="d-flex justify-content-center container-sm py-4">
            <div class="card w-50">
                <div class="card-header">
                    <div class="float-start">Listado de Pacientes</div>
                    <div class="float-end"><a href="{{url('pacientes/create')}}" class="btn btn-primary">Crear paciente</a> </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
