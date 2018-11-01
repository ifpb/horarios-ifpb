@extends('layouts.admin')

@section('content-admin')
    <h2>Reservar Sala</h2>

    @include('partials.list-errors-form')

    <form method="POST" action="{{ route('classroomreservations.store') }}">
        @csrf

        <div class="form-group {!! $errors->has('teaching_class_id') ? 'has-error' : '' !!}">
            <label for="teachingclasses">Turma:</label>
            <select id="teachingclasses" name="teaching_class_id" class="form-control">
                @foreach($teachingClasses as $teachingClass)
                    <option value="{{ $teachingClass->id }}" @if(old('teaching_class_id') == $teachingClass->id) selected @endif>{{ $teachingClass->subject->name . ' - ' . $teachingClass->professor->nickname }}</option>
                @endforeach
            </select>
            <a href="#" id="see_teachingclass" class="btn btn-default mt-3" target="_blank">Ver detalhes desta turma</a>
        </div>

        <div class="form-group {!! $errors->has('block_id') ? 'has-error' : '' !!}">
            <label for="blocks">Selecione um bloco:</label>
            <select id="blocks" name="block_id" class="form-control">
                @foreach($blocks as $block)
                    <option value="{{ $block->id }}" @if(old('block_id') == $block->id) selected @endif>{{ $block->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group {!! $errors->has('classroom_id') ? 'has-error' : '' !!}">
            <label for="">Selecione uma sala para visualizar horário:</label>
            <select id="classrooms" name="classroom_id" class="form-control">
            </select>
        </div>

        <div class="tables">

        </div>

        <button type="submit" class="btn btn-primary mt-5">Adicionar Reserva</button>
    </form>
@endsection

@section('custom-js')
    {{--TODO: Colocar isto num arquivo JS--}}
    <script type="text/javascript">
        $(document).ready(function() {
            let classroom = $('#classrooms')
            let blocks = $('#blocks')
            let teachingClass = $('#teachingclasses')

            loadBlockClassrooms(blocks.val())
            updateTeachingClassButton(teachingClass.val());

            classroom.on('change', function() {
                loadReservationTable(classroom.val(), teachingClass.val())
            })

            blocks.on('change', function() {
                loadBlockClassrooms(blocks.val())
            })

            teachingClass.on('change', function() {
                loadReservationTable(classroom.val(), teachingClass.val())
                updateTeachingClassButton(teachingClass.val());
            });

            $(document).on('change', ':checkbox', function() {
                if(this.checked) {
                    let time = this.getAttribute('data-time');
                    let day = this.getAttribute('data-day');

                    $.get(`/api/info/reserva-de-sala/disponibilidade-professor/${teachingClass.val()}/${day}/${time}`, result => {
                        if(!result) {
                            let status = $('.reserve-status-' + time + '-' + day)
                            status.show()
                            status.html('O professor está ocupado neste horário')
                        }
                    })
                }
            });
        })

        function loadReservationTable(classroom, teachingclass, div = '.tables') {
            div = $(div)
            div.hide()
            $.get(`/api/tabelas/reserva-de-sala/${classroom}/${teachingclass}`, data => {
                div.html(data)
                div.show()
            })
        }

        function loadBlockClassrooms(block, select = '#classrooms') {
            select = $(select)
            select.html('')
            classroom_selected = {{ old('classroom_id') }}
            $.get('/api/info/salas-do-bloco/' + block, salas => {
                $.each(salas, (i, sala) => {
                    if(sala.id == classroom_selected)
                        select.append(`<option value=${sala.id} selected>${sala.name}</option>`)
                    else
                        select.append(`<option value=${sala.id}>${sala.name}</option>`)
                })
                select.trigger('change');
            })

        }

        function updateTeachingClassButton(id) {
            $('#see_teachingclass').attr('href', `/admin/turmas/${id}/ver`);
        }
    </script>
@endsection