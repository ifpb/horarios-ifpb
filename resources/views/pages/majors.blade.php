@extends('layouts.app')

@section('content')
    <h1>Cursos</h1>

    <div class="categories">
        <a href="#" >Geral</a>
        <a href="#" >Integrado</a>
        <a href="#" >Mestrado</a>
        <a href="#" >Subsequente</a>
        <a href="#" >Superior</a>
    </div>

    <input type="text" placeholder="Digite algo para filtrar" class="search-input-filter">

    <table class="majors">
        <thead>
            <tr>
                <th>Curso</th>
                <th>Abreviação</th>
                <th>Períodos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="#">Redes de Computadores</a></td>
                <td>CST REDES</td>
                <td>7</td>
            </tr>

            <tr>
                <td><a href="#">Redes de Computadores</a></td>
                <td>CST REDES</td>
                <td>7</td>
            </tr>

            <tr>
                <td><a href="#">Redes de Computadores</a></td>
                <td>CST REDES</td>
                <td>7</td>
            </tr>

            <tr>
                <td><a href="#">Redes de Computadores</a></td>
                <td>CST REDES</td>
                <td>7</td>
            </tr>

            <tr>
                <td><a href="#">Redes de Computadores</a></td>
                <td>CST REDES</td>
                <td>7</td>
            </tr>
        </tbody>
    </table>
@endsection
