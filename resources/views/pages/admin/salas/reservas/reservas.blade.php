@extends('layouts.admin')

@section('content-admin')
    <h2>Reserva de Salas</h2>

    <div class="flex mb-5 justify-between">
        <a class="btn btn-default" href="{{ route('classroomreservations.create') }}" role="button">
            <span class="glyphicon glyphicon-plus"></span>
            Reservar Sala
        </a>
    </div>

    <div class="form-group">
        <label for="blocks">Selecione um bloco:</label>
        <select id="blocks" name="block" class="form-control">
            @foreach($blocks as $block)
                <option value="{{ $block->id }}">{{ $block->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="">Selecione uma sala para visualizar horário:</label>
        <select id="classrooms" name="classroom" class="form-control">
            @foreach($blocks[0]->classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
            @endforeach
        </select>
    </div>

    <hr>

    <div class="tables">

    </div>
@endsection

@section('custom-js')
    <script type="text/javascript">
        $(document).ready(function() {
            let classroom = $('#classrooms')
            let blocks = $('#blocks')

            classroom.on('change', function() {
                loadReservationTable(classroom.val())
            })

            blocks.on('change', function() {
                loadBlockClassrooms(blocks.val())
            })

            loadReservationTable(classroom.val())
        })

        function loadReservationTable(classroom, div = '.tables') {
            div = $(div)
            div.hide()
            $.get('/api/tabelas/reservas-da-sala/' + classroom, data => {
                div.html(data)
                div.show()
            })
        }

        function loadBlockClassrooms(block, select = '#classrooms') {
            select = $(select)
            select.html('')
            $.get('/api/info/salas-do-bloco/' + block, salas => {
                $.each(salas, (i, sala) => {
                    select.append(`<option value=${sala.id}>${sala.name}</option>`)
                })
                select.trigger('change');
            })

        }
    </script>
@endsection