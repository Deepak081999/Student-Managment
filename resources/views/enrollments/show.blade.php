@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">enrollments Page</div>
    <div class="card-body">


        <div class="card-body">
            <h5 class="card-title">Enrollment No: {{ $enrollments->enroll_no }}</h5>
            <p class="card-text">Batch: {{ $enrollments->batch ? $enrollments->batch->name : 'N/A' }}</p>
            <p class="card-text">Student: {{ $enrollments->student ? $enrollments->student->name : 'N/A' }}</p>
            <p class="card-text">Join Date: {{ $enrollments->join_date }}</p>
            <p class="card-text">Fee: {{ $enrollments->fee }}</p>
        </div>

        </hr>

    </div>
</div>
@endsection