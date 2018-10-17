@extends('layouts.admin')

@section('content-admin')
    <h2>Redes de Computadores - José Quaresma Filho</h2>

    <a class="btn btn-default mb-5" href="#" onClick="createWarning('#');return false;" role="button">
        <span class="glyphicon glyphicon-minus"></span>
        Remover Turma
    </a>

    <form>
        <div class="form-group">
            <label for="">Disciplina</label>
            <select class="form-control" disabled>
                <option value="">Redes de Computadores</option>
                <option value="">Design de Interiores</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Professor</label>
            <select class="form-control" disabled>
                <option value="">José Quaresma Filho</option>
                <option value="">Luiz Carlos Chaves</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Identificação</label>
            <select class="form-control" disabled>
                <option value="">U</option>
                <option value="">A</option>
                <option value="">B</option>
            </select>
        </div>
    </form>

    <hr>
    <h2 class="mb-3">Salas Reservadas</h2>

    <div class="flex justify-between">
        <h2 class="mt-5">Lab 02</h2>
        <a href="/admin/turmas/ver" class="btn btn-danger mt-3" target="_blank">Remover reserva de sala</a>
    </div>

    <div class="schedule-scroller">
        <table class="schedule">
            <thead>
            <tr>
                <th>Horário</th>
                <th>Segunda</th>
                <th>Terça</th>
                <th>Quarta</th>
                <th>Quinta</th>
                <th>Sexta</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">M1</span>
                        <span class="text-sm">07:00 - 07:50</span>
                    </div>
                </td>
                <td>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">X</span>
                    </div>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">M2</span>
                        <span class="text-sm">07:00 - 07:50</span>
                    </div>
                </td>
                <td>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">X</span>
                    </div>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">M3</span>
                        <span class="text-sm">07:00 - 07:50</span>
                    </div>
                </td>
                <td>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">X</span>
                    </div>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">M4</span>
                        <span class="text-sm">07:00 - 07:50</span>
                    </div>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">M5</span>
                        <span class="text-sm">07:00 - 07:50</span>
                    </div>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">M6</span>
                        <span class="text-sm">07:00 - 07:50</span>
                    </div>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="flex justify-between">
        <h2 class="mt-5">Lab 02</h2>
        <a href="/admin/turmas/ver" class="btn btn-danger mt-3" target="_blank">Remover reserva de sala</a>
    </div>

    <div class="schedule-scroller">
        <table class="schedule">
            <thead>
            <tr>
                <th>Horário</th>
                <th>Segunda</th>
                <th>Terça</th>
                <th>Quarta</th>
                <th>Quinta</th>
                <th>Sexta</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">M1</span>
                        <span class="text-sm">07:00 - 07:50</span>
                    </div>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">M2</span>
                        <span class="text-sm">07:00 - 07:50</span>
                    </div>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">M3</span>
                        <span class="text-sm">07:00 - 07:50</span>
                    </div>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">X</span>
                    </div>
                </td>
                <td>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">M4</span>
                        <span class="text-sm">07:00 - 07:50</span>
                    </div>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">X</span>
                    </div>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">M5</span>
                        <span class="text-sm">07:00 - 07:50</span>
                    </div>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">X</span>
                    </div>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">M6</span>
                        <span class="text-sm">07:00 - 07:50</span>
                    </div>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection