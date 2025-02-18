<?php
namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StudentController extends Controller
{
    public function index(): View
    {
        // Fetch all students from the database
        $students = Student::all();

        // Pass the students variable to the view
        return view('student.index', compact('students'));

        // return view('students.index')->with('students', $students);
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Student::create($input);
        return redirect('students')->with('flash_message', 'Student Addedd!');
    }

    public function show($id): VIew
    {
        $student = Student::find($id);
        return view('student.show')->with('students', $student);
    }

    public function edit($id): View
    {
        $student = Student::find($id);
        return view('student.edit')->with('students', $student);
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $input   = $request->all();
        $student->update($input);
        return redirect('students')->with('flash_message', 'student Updated!');
    }

    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('students')->with('flash_message', 'Student deleted!');
    }
}