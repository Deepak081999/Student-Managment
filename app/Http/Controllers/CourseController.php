<?php
namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CourseController extends Controller
{

    public function index(): View
    {
        $courses = Courses::all();
        return view('courses.index', compact('courses'));

    }

    public function create(): View
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Courses::create($input);
        return redirect('courses')->with('flash_message', 'teacher Addedd!');
    }

    public function show($id): VIew
    {
        $courses = Courses::find($id);
        return view('courses.show')->with('courses', $courses);
    }

    public function edit($id): View
    {
        $courses = Courses::find($id);
        return view('courses.edit')->with('courses', $courses);
    }

    public function update(Request $request, $id)
    {
        $courses = Courses::find($id);
        $input   = $request->all();
        $courses->update($input);
        return redirect('courses')->with('flash_message', 'courses Updated!');
    }

    public function destroy($id)
    {
        Courses::destroy($id);
        return redirect('courses')->with('flash_message', 'courses deleted!');
    }
}
