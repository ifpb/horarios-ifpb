@extends('layouts.admin')

@section('content-admin')
    <h2>Turma: {{ $teachingClass->subject->name }} - {{ $teachingClass->professor->nickname }}</h2>

    <a class="btn btn-default mb-5" href="{{ route('teachingclasses.edit', $teachingClass->id) }}" role="button">
        <span class="glyphicon glyphicon-edit"></span>
        Editar Turma
    </a>

    <a class="btn btn-danger mb-5" href="#" onClick="createWarning('{{ route('teachingclasses.destroy', $teachingClass->id) }}');return false;" role="button">
        <span class="glyphicon glyphicon-remove"></span>
        Remover Turma
    </a>

    {{--TODO: Mudar este link para a reserva de sala--}}
    <a class="btn btn-default mb-5" href="{{ route('teachingclasses.edit', $teachingClass->id) }}" role="button">
        <span class="glyphicon glyphicon-plus"></span>
        Reservar uma sala
    </a>

    <form>
        <div class="form-group">
            <label for="">Disciplina</label>
            <select class="form-control" disabled>
                <option value="">{{ $teachingClass->subject->name }}</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Professor</label>
            <select class="form-control" disabled>
                <option value="">{{ $teachingClass->professor->nickname }}</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Identificação</label>
            <select class="form-control" disabled>
                <option value="">{{ $teachingClass->type->name }}</option>
            </select>
        </div>
    </form>

    {{--TODO: Dinamizar Salas Reservadas--}}
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