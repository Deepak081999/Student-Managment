<?php
namespace App\Http\Controllers;

use App\Models\Enrollments;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PaymentController extends Controller
{

    public function index(): View
    {
        $payment = Payment::with('enrollment')->get();
        // $payment = Payment::all(); // Eager load course details
        return view('payment.index', compact('payment'));
    }

    public function create(): View
    {

        $enrollment = Enrollments::all(); // Fetch all payment
        return view('payment.create', compact('enrollment'));
    }
    public function store(Request $request)
    {
        $input = $request->all();
        Payment::create($input);
        return redirect('payment')->with('flash_message', 'Payment Addedd!');
    }
    public function show($id): VIew
    {
        $payment = Payment::with('enrollment')->find($id);

        if (! $payment) {
            return redirect('payment')->with('error', 'Payment not found!');
        }

        return view('payment.show', compact('payment'));
    }
    public function edit($id): View
    {
        $payment     = Payment::find($id);
        $enrollments = Enrollments::all();
        return view('payment.edit', compact('payment', 'enrollments'));

        // return view('payment.edit')->with('payment', $payment, $enrollment);
    }

    public function update(Request $request, $id)
    {
        $payment = Payment::find($id);
        $input   = $request->all();
        $payment->update($input);
        return redirect('payment')->with('flash_message', 'payment Updated!');
    }

    public function destroy($id)
    {
        payment::destroy($id);
        return redirect('payment')->with('flash_message', 'payment deleted!');
    }
}