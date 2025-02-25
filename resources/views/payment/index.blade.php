@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>payment Application</h2>
    </div>
    <div class="card-body">
        <a href="{{ url('/payment/create') }}" class="btn btn-success btn-sm" title="Add New payment">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
        <br />
        <br />
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Enrollment no</th>
                        <th>Paid Date </th>
                        <th>Amount</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>


                <tbody>
                    @foreach($payment as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->enrollment ? $item->enrollment->enroll_no : 'N/A' }}</td>
                        <td>{{ $item->paid_date }}</td>
                        <td>{{ $item->amount }}</td>

                        <td>
                            <a href="{{ url('/payment'.'/' . $item->id) }}" title="View payment"><button
                                    class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                    View</button></a>
                            <a href="{{ url('/payment'.'/' . $item->id . '/edit') }}" title="Edit payment"><button
                                    class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                        aria-hidden="true"></i>
                                    Edit</button></a>

                            <form method="POST" action="{{ url('/payment' . '/' . $item->id) }}" accept-charset="UTF-8"
                                style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete payment"
                                    onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                                        aria-hidden="true"></i> Delete</button>
                            </form>
                            <a href="{{ url('/report1'.'/' . $item->id)  }}" title="print payment"><button
                                    class="btn btn-success"><i class="fa fa-print"
                                        aria-hidden="true">Print</i></button></a>
                            <!-- Route::get('report/report1/{pid}',[reportcontroller::Class,report1]); -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection