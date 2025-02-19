@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Enrollments Page</div>
    <div class="card-body">

        <form action="{{ url('enrollments') }}" method="post">
            {!! csrf_field() !!}
            <label>Enroll No </label></br>
            <input type="text" name="enroll_no" id="enroll_no" class="form-control"></br>
            <label>Batch</label></br>
            <select name="batch_id" id="batch_id" class="form-control">
                <option value="">Select a Course</option>
                @foreach($batch as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select></br>

            <label>Student</label></br>
            <select name="student_id" id="student_id" class="form-control">
                <option value="">Select a Course</option>
                @foreach($stud as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select></br>
            <label>Join Date</label></br>
            <input type="date" name="join_date" id="join_date" class="form-control"></br>
            <label>fee</label></br>
            <input type="text" name="fee" id="fee" class="form-control"></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop