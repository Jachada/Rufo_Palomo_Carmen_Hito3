@extends('layouts.master')
@section('title','Inicio')
@section('content')

<div class="row m-2">
    <div class="card col-3">
        <div class="card-header text-center">
            NOMBRE
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>Correo:</b> correo@iespoligonosur.org</li>
            <li class="list-group-item"><b>Fecha:</b> 00/00/0000</li>
            <li class="list-group-item"><b>Teléfono:</b> 000000000</li>
        </ul>
    </div>
    <div class="col-9">
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Buscador" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Titulo</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Aula</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Comentarios</th>
                </tr>
            </thead>
            <tr>
                <td>.</td>
                <td>.</td>
                <td>.</td>
                <td>.</td>
                <td class="row">
                    <div class="col-10">
                        .
                    </div>
                    <div class="col-1">
                        <button>+</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>.</td>
                <td>.</td>
                <td>.</td>
                <td>.</td>
                <td class="row">
                    <div class="col-10">
                        .
                    </div>
                    <div class="col-1">
                        <button>+</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>.</td>
                <td>.</td>
                <td>.</td>
                <td>.</td>
                <td class="row">
                    <div class="col-10">
                        .
                    </div>
                    <div class="col-1">
                        <button>+</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>.</td>
                <td>.</td>
                <td>.</td>
                <td>.</td>
                <td class="row">
                    <div class="col-10">
                        .
                    </div>
                    <div class="col-1">
                        <button>+</button>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>

@endsection