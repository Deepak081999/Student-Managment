<?php
namespace App\Http\Controllers;

use App;
use App\Models\Payment;

class ReportController extends Controller
{

    public function report1($pid)
    {

        $payment = Payment::find($pid);

        if (! $payment) {
            return redirect()->back()->with('error', 'Payment not found.');
        }

        $pdf = App::make('dompdf.wrapper');

        $print = "<div style='margin:20px; padding:20px;'>";
        $print .= "<h1 align='center'>Payment Receipt</h1>";
        $print .= "<hr/>";
        $print .= "<p> Receipt No: <b>{$pid}</b> </p>";
        $print .= "<p> Date: <b>{$payment->paid_date}</b></p>";
        $print .= "<p> Enrollment No: <b>{$payment->enrollment->enroll_no}</b></p>";
        $print .= "<p> Student Name: <b>{$payment->enrollment->student->name}</b></p>";
        $print .= "<hr/>";

        $print .= "<table style='width: 100%; border-collapse: collapse;' border='1'>";
        $print .= "<tr>";
        $print .= "<th>Description</th>";
        $print .= "<th>Amount</th>";
        $print .= "</tr>";
        $print .= "<tr>";
        $print .= "<td><h3>{$payment->enrollment->batch->name}</h3></td>";
        $print .= "<td><h3>{$payment->amount}</h3></td>";
        $print .= "</tr>";
        $print .= "</table>";

        $print .= "<hr/>";
        // $print .= "<p>Printed By: <b>"  "</b></p>";
        $print .= "<p>Printed Date: <b>" . date('Y-m-d') . "</b></p>";
        $print .= "</div>";

        $pdf->loadHTML($print);

        return $pdf->stream('Payment_Receipt.pdf');
    }
}