<h1>Edit # {{ $student->name }} info</h1>
@if(Session::has('message'))
    <p>{{ Session::get('message') }}</p>
@endif
<form action="{{ url('update', $student->id) }}" method="post">
    @csrf
    Name:<br>
    <input type="text" name="name" value="{{ $student->name }}" class="{{ $errors->has('name') ? ' is-invalid' : '' }}">
    @if ($errors->has('name'))
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
    @endif
    <br>
    Email:<br>
    <input type="text" name="email" value="{{ $student->email }}" class="{{ $errors->has('email') ? ' is-invalid' : '' }}">
    @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
    @endif
    <br><br>
    <input type="submit" value="Update">
</form>