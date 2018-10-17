@extends('layouts.admin')

@section('content-admin')
    <h2>Reservar Sala</h2>

    <form>
        <div class="form-group">
            <label for="">Turma</label>
            <select class="form-control">
                <option value="">Adiminstração de Sistemas Abertos - Elionildo</option>
                <option value="">Redes Sem Fio - Zé Filho</option>
            </select>
            <a href="/admin/turmas/ver" class="btn btn-default mt-3" target="_blank">Ver detalhes desta turma</a>
        </div>
        <div class="form-group">
            <label for="">Sala:</label>
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

        <div class="sala reserva">
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
                            <div class="flex justify-center">
                                <input type="checkbox" id="m1-seg" value="m1-seg">
                                <label for="m1-seg"></label>
                            </div>
                        </td>
                        <td>
                            <div class="flex flex-col leading-normal">
                                <span class="font-bold">PORT INSTR</span>
                                <span class="text-sm">JAEL - U</span>
                                <span class="text-sm text-red-dark"><a href="#" target="_blank">Turma 1135</a></span>
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-center">
                                <input type="checkbox" id="m1-seg" value="m1-seg">
                                <label for="m1-seg"></label>
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-center">
                                <input type="checkbox" id="m1-seg" value="m1-seg">
                                <label for="m1-seg"></label>
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-center">
                                <input type="checkbox" id="m1-seg" value="m1-seg">
                                <label for="m1-seg"></label>
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
                            <div class="flex justify-center">
                                <input type="checkbox" id="m1-seg" value="m1-seg">
                                <label for="m1-seg"></label>
                            </div>
                        </td>
                        <td>
                            <div class="flex flex-col leading-normal">
                                <span class="font-bold">PORT INSTR</span>
                                <span class="text-sm">JAEL - U</span>
                                <span class="text-sm text-red-dark"><a href="#" target="_blank">Turma 1135</a></span>
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-center">
                                <input type="checkbox" id="m1-seg" value="m1-seg">
                                <label for="m1-seg"></label>
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-center">
                                <input type="checkbox" id="m1-seg" value="m1-seg">
                                <label for="m1-seg"></label>
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-center">
                                <input type="checkbox" id="m1-seg" value="m1-seg">
                                <label for="m1-seg"></label>
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
                            <div class="flex justify-center">
                                <input type="checkbox" id="m1-seg" value="m1-seg">
                                <label for="m1-seg"></label>
                            </div>
                        </td>
                        <td>
                            <div class="flex flex-col leading-normal">
                                <span class="font-bold">PORT INSTR</span>
                                <span class="text-sm">JAEL - U</span>
                                <span class="text-sm text-red-dark"><a href="#" target="_blank">Turma 1135</a></span>
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-center">
                                <input type="checkbox" id="m1-seg" value="m1-seg">
                                <label for="m1-seg"></label>
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-center">
                                <input type="checkbox" id="m1-seg" value="m1-seg">
                                <label for="m1-seg"></label>
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-center">
                                <input type="checkbox" id="m1-seg" value="m1-seg">
                                <label for="m1-seg"></label>
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
                            <div class="flex justify-center">
                                <input type="checkbox" id="m1-seg" value="m1-seg">
                                <label for="m1-seg"></label>
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-center">
                                <input type="checkbox" id="m1-seg" value="m1-seg">
                                <label for="m1-seg"></label>
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-center">
                                <input type="checkbox" id="m1-seg" value="m1-seg">
                                <label for="m1-seg"></label>
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-center">
                                <input type="checkbox" id="m1-seg" value="m1-seg">
                                <label for="m1-seg"></label>
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-center">
                                <input type="checkbox" id="m1-seg" value="m1-seg">
                                <label for="m1-seg"></label>
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
                            <div class="flex justify-center">
                                <input type="checkbox" id="m1-seg" value="m1-seg">
                                <label for="m1-seg"></label>
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-center">
                                <input type="checkbox" id="m1-seg" value="m1-seg">
                                <label for="m1-seg"></label>
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-center">
                                <input type="checkbox" id="m1-seg" value="m1-seg">
                                <label for="m1-seg"></label>
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-center">
                                <input type="checkbox" id="m1-seg" value="m1-seg">
                                <label for="m1-seg"></label>
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-center">
                                <input type="checkbox" id="m1-seg" value="m1-seg">
                                <label for="m1-seg"></label>
                            </div>
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
                            <div class="flex justify-center">
                                <input type="checkbox" id="m1-seg" value="m1-seg">
                                <label for="m1-seg"></label>
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-center">
                                <input type="checkbox" id="m1-seg" value="m1-seg">
                                <label for="m1-seg"></label>
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-center">
                                <input type="checkbox" id="m1-seg" value="m1-seg">
                                <label for="m1-seg"></label>
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-center">
                                <input type="checkbox" id="m1-seg" value="m1-seg">
                                <label for="m1-seg"></label>
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-center">
                                <input type="checkbox" id="m1-seg" value="m1-seg">
                                <label for="m1-seg"></label>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-5">Adicionar Reserva</button>
    </form>
@endsection