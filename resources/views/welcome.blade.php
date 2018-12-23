@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Laravel Tutorial</div>

                <div class="card-body">
                    <h1>Cache Tutorial Part 21</h1>
                    <a href="{{ url('setCache') }}">Set Cache</a> || <a href="{{ url('getCache') }}">Get Cache</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
