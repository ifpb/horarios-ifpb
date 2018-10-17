@extends('layouts.admin')

@section('content-admin')
    <h2>Reserva de Salas</h2>

    <div class="flex mb-5 justify-between">
        <a class="btn btn-default" href="/admin/salas/reservas/adicionar" role="button">
            <span class="glyphicon glyphicon-plus"></span>
            Reservar Sala
        </a>
    </div>

    <div class="form-group">
        <label for="">Selecione uma sala para visualizar horário:</label>
        <select class="form-control">
            <option value="">Sala 1</option>
            <option value="">Sala 2</option>
            <option value="">Sala 3</option>
            <option value="">Sala 4</option>
            <option value="">Sala 5</option>
            <option value="">Sala 6</option>
            <option value="">Lab 04</option>
            <option value="">Lab 06</option>
            <option value="">Lab 08</option>
        </select>
    </div>

    <div class="form-group">
        <label for="">Selecione um turno:</label>
        <select class="form-control">
            <option value="">Manhã</option>
            <option value="">Tarde</option>
            <option value="">Noite</option>
        </select>
    </div>

    <hr>

    <div class="sala">
        <h2>Sala 1</h2>
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
                            <span class="text-sm text-red-dark"><a href="#" target="_blank">Turma 1135</a></span>
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
                            <span class="font-bold">PORT INSTR</span>
                            <span class="text-sm">JAEL - U</span>
                            <span class="text-sm text-red-dark"><a href="#" target="_blank">Turma 1135</a></span>
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
                            <span class="font-bold">PORT INSTR</span>
                            <span class="text-sm">JAEL - U</span>
                            <span class="text-sm text-red-dark"><a href="#" target="_blank">Turma 1135</a></span>
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
    </div>

@endsection