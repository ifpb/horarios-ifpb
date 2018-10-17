@if(session()->has('message'))
    <div class="alert @if(session()->has('alert_class')) {{ session('alert_class') }} @endif" role="alert">
        {{ session('message') }}
    </div>
@endif