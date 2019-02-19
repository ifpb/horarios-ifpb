@extends('layouts.app')

@section('title', 'Cursos')

@section('content')
    <h1>Cursos</h1>

    <div class="categories" data-tabgroup="tabgroup">
        @foreach($educationLevels as $educationLevel)
            <a href="#tab{{ $educationLevel->id }}" title="Cursos da categoria {{ $educationLevel->name }}">{{ $educationLevel->name }}</a>
        @endforeach
    </div>

    <input type="text" placeholder="Digite algo para filtrar" class="search-input-filter">

    <div class="tabgroup">
        @foreach($educationLevels as $educationLevel)
            <div id="tab{{ $educationLevel->id }}">
                <table class="courses tableFront">
                    <thead>
                        <tr>
                            <th>Curso</th>
                            <th>Abreviação</th>
                            <th>Períodos</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($educationLevel->courses as $course)
                            <tr>
                                <td><a href="{{ $course->url() }}" title="{{ $course->name }}">{{ $course->name }}</a></td>
                                <td>{{ $course->initials }}</td>
                                <td>{{ $course->periods }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endforeach
    </div>
@endsection

@section('additional-css-js')
    <script type="text/javascript">
        jQuery(document).ready(function() {
            dT = $('.courses').DataTable({
                retrieve: true
            })

            $('.search-input-filter').keyup(function () {
                dT.search($(this).val()).draw();
            })

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