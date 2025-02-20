@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">payment Page</div>
    <div class="card-body">


        <div class="card-body">
            <h5 class="card-title">Enroll No: {{ $payment->enrollment->enroll_no }}</h5>
            <p class="card-text">Amount Paid: {{ $payment->amount }}</p>
            <p class="card-text">Paid Date: {{ $payment->paid_date }}</p>
        </div>

        </hr>

    </div>
</div>
@endsection