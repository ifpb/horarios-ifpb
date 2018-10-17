@extends('layouts.admin')

@section('content-admin')
    <h2>Laboratório 06</h2>

    <a class="btn btn-default mb-5" href="#" onClick="createWarning('#');return false;" role="button">
        <span class="glyphicon glyphicon-minus"></span>
        Remover Sala
    </a>

    <form>
        <div class="form-group">
            <label for="">Tipo de sala</label>
            <select class="form-control" disabled>
                <option value="">Sala</option>
                <option value="">Laboratório</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control" value="Laboratório 06" disabled>
        </div>
        <div class="form-group">
            <label for="">Abreviação</label>
            <input type="text" class="form-control" value="LAB 06" disabled>
        </div>
        <div class="form-group">
            <label for="">Capacidade</label>
            <input type="text" class="form-control" value="20" disabled>
        </div>
    </form>

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