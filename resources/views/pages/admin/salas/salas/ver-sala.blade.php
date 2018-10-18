@extends('layouts.admin')

@section('content-admin')
    <h2>Sala: {{ $classroom->name }}</h2>

    <a class="btn btn-default mb-5" href="{{ route('classroom.edit', $classroom->id) }}" role="button">
        <span class="glyphicon glyphicon-edit"></span>
        Editar Sala
    </a>

    <a class="btn btn-danger mb-5" href="#" onClick="createWarning('{{ route('classroom.destroy', $classroom->id) }}');return false;" role="button">
        <span class="glyphicon glyphicon-remove"></span>
        Remover Sala
    </a>


    <form>
        <div class="form-group">
            <label for="">Tipo de sala</label>
            <select class="form-control" disabled>
                <option>{{ $classroom->type->name }}</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Bloco</label>
            <select class="form-control" disabled>
                <option value="">{{ $classroom->block->name }}</option>
            </select>
        </div>
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" id="name" class="form-control" value="{{ $classroom->name }}" disabled>
        </div>
        <div class="form-group">
            <label for="initials">Abreviação</label>
            <input type="text" id="initials" class="form-control" value="{{ $classroom->initials }}" disabled>
        </div>
        <div class="form-group">
            <label for="capacity">Capacidade</label>
            <input type="text" id="capacity" class="form-control" value="{{ $classroom->capacity }}" disabled>
        </div>
    </form>


    {{--TODO: Dinamizar Horários da Sala--}}
    <h2>Horarios da sala</h2>
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
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">FIS APLIC COMP</span>
                        <span class="text-sm">ALLYSSON M - U</span>
                        <span class="text-sm text-red-dark">LAB FÍSIC</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
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
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">FIS APLIC COMP</span>
                        <span class="text-sm">ALLYSSON M - U</span>
                        <span class="text-sm text-red-dark">LAB FÍSIC</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                    </div>
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
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
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
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">FIS APLIC COMP</span>
                        <span class="text-sm">ALLYSSON M - U</span>
                        <span class="text-sm text-red-dark">LAB FÍSIC</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
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
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
            </tr>

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
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">FIS APLIC COMP</span>
                        <span class="text-sm">ALLYSSON M - U</span>
                        <span class="text-sm text-red-dark">LAB FÍSIC</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
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
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">FIS APLIC COMP</span>
                        <span class="text-sm">ALLYSSON M - U</span>
                        <span class="text-sm text-red-dark">LAB FÍSIC</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                    </div>
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
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
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
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">FIS APLIC COMP</span>
                        <span class="text-sm">ALLYSSON M - U</span>
                        <span class="text-sm text-red-dark">LAB FÍSIC</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
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
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
            </tr>

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
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">FIS APLIC COMP</span>
                        <span class="text-sm">ALLYSSON M - U</span>
                        <span class="text-sm text-red-dark">LAB FÍSIC</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
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
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">FIS APLIC COMP</span>
                        <span class="text-sm">ALLYSSON M - U</span>
                        <span class="text-sm text-red-dark">LAB FÍSIC</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                    </div>
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
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
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
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">FIS APLIC COMP</span>
                        <span class="text-sm">ALLYSSON M - U</span>
                        <span class="text-sm text-red-dark">LAB FÍSIC</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
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
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
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
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">FIS APLIC COMP</span>
                        <span class="text-sm">ALLYSSON M - U</span>
                        <span class="text-sm text-red-dark">LAB FÍSIC</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
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
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
                <td>
                    <div class="flex flex-col leading-normal">
                        <span class="font-bold">PORT INSTR</span>
                        <span class="text-sm">JAEL - U</span>
                        <span class="text-sm text-red-dark">Sala 17</span>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection