@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Contactus Page</div>
    <div class="card-body">

        <form action="{{ url('batches/' .$batches->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$batches->id}}" id="id" />
            <label>Batch Name</label></br>
            <input type="text" name="name" id="name" value="{{$batches->name}}" class="form-control"></br>
            <label>Coures Name</label></br>
            <input type="text" name="course" id="course_id" value="{{$batches->course_id}}" class="form-control"></br>
            <label>start_date</label></br>
            <input type="date" name="start_date" id="start_date" value="{{$batches->start_date}}"
                class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop
