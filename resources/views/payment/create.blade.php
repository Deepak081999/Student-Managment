@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Payment Page</div>
    <div class="card-body">

        <form action="{{ url('payment') }}" method="post">
            {!! csrf_field() !!}
            <label>Enrollments No </label></br>
            <select name="enrollment_id" id="enrollment_id" class="form-control">
                <option value="">Select an Enrollment</option>
                @foreach ($enrollment as $enroll)
                <option value="{{ $enroll->id }}">{{ $enroll->enroll_no }}</option>
                @endforeach
            </select></br>
            <label>Paid Date</label></br>
            <input type="date" name="paid_date" id="paid_date" class="form-control"></br>
            <label>Amount</label></br>
            <input type="number" name="amount" id="amount" class="form-control"></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop