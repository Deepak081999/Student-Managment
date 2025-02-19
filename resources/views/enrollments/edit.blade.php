@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Contactus Page</div>
    <div class="card-body">

        <form action="{{ url('enrollments/' .$enrollments->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{ $enrollments->id }}" />

            <label>Enroll No</label>
            <input type="text" name="enroll_no" id="enroll_no" value="{{ $enrollments->enroll_no }}"
                class="form-control" />

            <label>Batch</label>
            <select name="batch_id" id="batch_id" class="form-control">
                <option value="">Select Batch</option>
                @foreach($batches as $batch)
                <option value="{{ $batch->id }}" {{ $enrollments->batch_id == $batch->id ? 'selected' : '' }}>
                    {{ $batch->name }}
                </option>
                @endforeach
            </select>

            <label>Student</label>
            <select name="student_id" id="student_id" class="form-control">
                <option value="">Select Student</option>
                @foreach($students as $student)
                <option value="{{ $student->id }}" {{ $enrollments->student_id == $student->id ? 'selected' : '' }}>
                    {{ $student->name }}
                </option>
                @endforeach
            </select>

            <label>Join Date</label>
            <input type="date" name="join_date" id="join_date" value="{{ $enrollments->join_date }}"
                class="form-control" />

            <label>Fee</label>
            <input type="text" name="fee" id="fee" value="{{ $enrollments->fee }}" class="form-control" />
            <br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop