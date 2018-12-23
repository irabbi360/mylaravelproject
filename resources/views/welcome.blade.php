@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Laravel Tutorial</div>

                <div class="card-body">
                    <h1>Cookies Tutorial Part 20</h1>
                    <a href="{{ url('setCookie') }}">Set Cookie</a> || <a href="{{ url('getCookie') }}">Get Cookie</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
