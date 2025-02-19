<?php
namespace App\Http\Controllers;

use App\Models\Batches;
use App\Models\Enrollments;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EnrollmentController extends Controller
{
    public function index(): View
    {
        $enrollments = Enrollments::with(['batch', 'student'])->get();
        return view('enrollments.index', compact('enrollments'));
    }
    public function create(): View
    {
        $batch = Batches::all();
        $stud  = Student::all();
        return view('enrollments.create', compact('batch', 'stud'));
    }
    public function store(Request $request)
    {
        $input = $request->all();
        Enrollments::create($input);
        return redirect('enrollments')->with('flash_message', 'teacher Addedd!');
    }
    public function show($id): VIew
    {
        $enrollments = Enrollments::with(['batch', 'student'])->find($id);

        if (! $enrollments) {
            return redirect('batches')->with('error', 'Enrollment not found!');
        }

        return view('enrollments.show')->with('enrollments', $enrollments);

    }
    public function edit($id): View
    {
        $enrollments = Enrollments::with(['batch', 'student'])->find($id);
        $batches     = Batches::all(); // Fetch all batches
        $students    = Student::all(); // Fetch all students

        if (! $enrollments) {
            return redirect('enrollments')->with('error', 'Enrollment not found!');
        }

        return view('enrollments.edit', compact('enrollments', 'batches', 'students'));
    }

    public function update(Request $request, $id)
    {
        $enrollments = Enrollments::find($id);

        if (! $enrollments) {
            return redirect('enrollments')->with('error', 'Enrollment not found!');
        }

        $input = $request->all();
        $enrollments->update($input);

        return redirect('enrollments')->with('flash_message', 'Enrollment Updated!');

    }

    public function destroy($id)
    {
        Enrollments::destroy($id);
        return redirect('enrollments')->with('flash_message', 'enrollments deleted!');
    }

}