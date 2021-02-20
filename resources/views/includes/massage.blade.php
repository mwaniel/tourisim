@if (count($errors) > 0 )
                @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{$error}}</p>
                @endforeach
            @endif
@if (session()->has('massage'))
<p class="alert alert-success">{{session('massage')}}</p>
@endif
