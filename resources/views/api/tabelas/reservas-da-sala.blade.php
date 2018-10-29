<div class="sala">
    <h2>{{ $classroom->name }}</h2>
    <div class="schedule-scroller">
        <table class="schedule">
            <thead>
            <tr>
                <th>Horário</th>
                @foreach($days as $day)
                    <th>{{ $day->name }}</th>
                @endforeach
            </tr>
            </thead>
            <tbody>
            @foreach($times as $time)
                <tr>
                    <td>
                        <div class="flex flex-col leading-normal">
                            <span class="font-bold">{{ $time->name }}</span>
                            <span class="text-sm">{{ $time->starts }} - {{ $time->ends }}</span>
                        </div>
                    </td>

                    @foreach($days as $day)
                        @php ($thisDayTimeReservations = $dayTimeReservations[$time->id][$day->id])
                        <td>
                            @if(!$thisDayTimeReservations->isEmpty())
                                @php ($thisDayTimeReservation = $thisDayTimeReservations->first())
                                <div class="flex flex-col leading-normal reservation-{{ $thisDayTimeReservation->id }}">
                                    <span class="font-bold">{{ $thisDayTimeReservation->teachingClass->subject->initials }}</span>
                                    <span class="text-sm">{{ $thisDayTimeReservation->teachingClass->professor->nickname }} - {{ $thisDayTimeReservation->teachingClass->type->initials }}</span>
                                    <span class="text-sm text-red-dark"><a href="{{ route('teachingclasses.show', $thisDayTimeReservation->teachingClass->id) }}" target="_blank">Turma {{ $thisDayTimeReservation->teachingClass->id }}</a></span>
                                    <span class="text-sm"><a class="text-red-dark hover:text-red-darker remove-res" reservation-id="{{ $thisDayTimeReservation->id }}" href="#">Remover Reserva</a></span>
                                </div>
                            @endif
                        </td>
                    @endforeach


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>