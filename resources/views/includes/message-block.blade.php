@if(count($errors))
    <div class="row animated slideInDown">
        <div class="alert alert-danger col-lg-12">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
@if(Session::has('message'))
    <div class="row animated tada">
        <div class="alert alert-success col-lg-12">
            {{ Session::get('message') }}
        </div>
    </div>
@endif