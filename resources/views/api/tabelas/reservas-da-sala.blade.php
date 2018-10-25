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
                                <div class="flex flex-col leading-normal">
                                    <span class="font-bold">{{ $thisDayTimeReservations->first()->teachingClass->subject->initials }}</span>
                                    <span class="text-sm">{{ $thisDayTimeReservations->first()->teachingClass->professor->nickname }} - {{ $thisDayTimeReservations->first()->teachingClass->type->initials }}</span>
                                    <span class="text-sm text-red-dark"><a href="{{ route('teachingclasses.show', $thisDayTimeReservations->first()->teachingClass->id) }}" target="_blank">Turma {{ $thisDayTimeReservations->first()->teachingClass->id }}</a></span>
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