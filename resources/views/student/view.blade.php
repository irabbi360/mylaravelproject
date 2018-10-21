@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Student name: {{ $student->name }}</div>

                <div class="card-body">
                    <p>Email: {{ $student->email }}</p>
                    <p>Phone Number: {{ $student->phone_number }}</p>
                    <p>Class: {{ $student->class }}</p>
                    <p>Create at: {{ $student->created_at }}</p>
                </div>
                <p><a href="{{ url('students') }}">Back to students</a> </p>
            </div>
        </div>
    </div>
</div>
@endsection
