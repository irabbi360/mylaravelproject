@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Laravel Tutorial</div>

                <div class="card-body">
                    <h1>File Copy/Past/Move, Delete Tutorial Part 22</h1>
                    <a href="{{ url('filecopy') }}">Copy/Move File</a>  ||  <a href="{{ url('filedelete') }}">Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
