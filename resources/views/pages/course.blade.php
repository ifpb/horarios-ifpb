@extends('layouts.app')

@section('content')
    <h1>{{ $course->name }}</h1>
    {{--<h2 class="mt-2">1º periodo</h2>--}}

    <div class="categories" data-tabgroup="tabgroup">
        @for($x=1; $x<=$course->periods; $x++)
            <a href="#tab{{ $x }}" title="{{ $x }} período">{{ $x }}</a>
        @endfor
    </div>

    <div class="tabgroup">
        @for($x = 1; $x <= $course->periods; $x++)
            <div id="tab{{ $x }}">
                @include('partials.table-days-times-by-course-period', ['days' => $days, 'times' => $times, 'dayTimeReservations' => $reservationsPeriod[$x]])
            </div>
        @endfor
    </div>

@endsection

@section('additional-css-js')
    <script type="text/javascript">
        jQuery(document).ready(function() {
            $('.tabgroup > div').hide();
            $('.tabgroup > div:first-of-type').show();

            $('.categories a:first-of-type').addClass('active')
            $('.categories a').click(function(e){
                e.preventDefault();

                let $this = $(this),
                    tabgroup = '.' + $this.parents('.categories').data('tabgroup'),
                    others = $this.siblings(),
                    target = $this.attr('href')

                others.removeClass('active')
                $this.addClass('active')

                $(tabgroup).children('div').hide()
                $(target).show()
            });
        });
    </script>
@endsection