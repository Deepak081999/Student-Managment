<?php
namespace App\Http\Controllers;

use App\Models\Enrollments;
use Illuminate\View\View;

class EnrollmentController extends Controller
{
    public function index(): View
    {
        $enrollments = Enrollments::all();
        return view('enrollments.index', compact('enrollments'));
    }
}
