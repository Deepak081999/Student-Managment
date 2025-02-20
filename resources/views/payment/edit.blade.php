@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Contactus Page</div>
    <div class="card-body">

        <form action="{{ url('payment/' .$payment->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")

            <input type="hidden" name="id" id="id" value="{{ $payment->id }}" />

            <!-- Dropdown for Enrollments -->
            <label>Enrollments</label></br>
            <select name="enrollment_id" class="form-control">
                <option value="">Select Enrollment</option>
                @foreach($enrollments as $enrollment)
                <option value="{{ $enrollment->id }}"
                    {{ $payment->enrollment_id == $enrollment->id ? 'selected' : '' }}>
                    {{ $enrollment->enroll_no }}
                </option>
                @endforeach
            </select></br>

            <!-- Start Date -->
            <label>paid_date</label></br>
            <input type="date" name="paid_date" id="paid_date" value="{{ $payment->paid_date}}"
                class="form-control"></br>

            <!-- Amount -->
            <label>Amount</label></br>
            <input type="text" name="amount" id="amount" value="{{ $payment->amount }}" class="form-control"
                readonly></br>

            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop