<?php
namespace App\Http\Controllers;

use App\Models\Teachers;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TeacherController extends Controller
{

    public function index(): View
    {
        $teachers = Teachers::all();
        return view('teachers.index', compact('teachers'));

    }

    public function create(): View
    {
        return view('teachers.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Teachers::create($input);
        return redirect('teachers')->with('flash_message', 'teacher Addedd!');
    }

    public function show($id): VIew
    {
        $teachers = Teachers::find($id);
        return view('teachers.show')->with('teachers', $teachers);
    }

    public function edit($id): View
    {
        $teachers = Teachers::find($id);
        return view('teachers.edit')->with('teachers', $teachers);
    }

    public function update(Request $request, $id)
    {
        $teachers = Teachers::find($id);
        $input    = $request->all();
        $teachers->update($input);
        return redirect('teachers')->with('flash_message', 'teachers Updated!');
    }

    public function destroy($id)
    {
        Teachers::destroy($id);
        return redirect('teachers')->with('flash_message', 'teachers deleted!');
    }
}
