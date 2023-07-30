@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{{-- Inside create.blade.php --}}
@if(session('success_msg'))
    <div class="alert alert-success">
        {{ session('success_msg') }}
    </div>
@endif

{{-- Inside edit.blade.php --}}
@if(session('success_msg'))
    <div class="alert alert-success">
        {{ session('success_msg') }}
    </div>
@endif
@if(session('success_msg'))
    <div class="alert alert-success">
        {{ session('success_msg') }}
    </div>
@endif
