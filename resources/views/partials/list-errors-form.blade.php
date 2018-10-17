@if($errors->any())
    <div class="alert alert-danger leading-normal" role="alert">
        <ul class="list-reset">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif