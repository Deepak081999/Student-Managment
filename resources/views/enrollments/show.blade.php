@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">enrollments Page</div>
    <div class="card-body">


        <div class="card-body">
            <h5 class="card-title">Name : {{ $enrollments->enroll_no }}</h5>
            <p class="card-text"> Course: {{ $enrollments->batch_id }}</p>
            <p class="card-text">Start Date : {{ $enrollments->student }}</p>
            <p class="card-text">Start Date : {{ $enrollments->join_date}}</p>
            <p class="card-text">Start Date : {{ $enrollments->fee }}</p>
        </div>

        </hr>

    </div>
</div>
@endsection
