<?php
namespace App\Http\Controllers;

use App\Models\Batches;
use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BatchController extends Controller
{

    public function index(): View
    {
        $batches = Batches::with('course')->get(); // Eager load course details
        return view('batches.index', compact('batches'));
    }

    public function create(): View
    {

        $courses = Courses::all(); // Fetch all courses
        return view('batches.create', compact('courses'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Batches::create($input);
        return redirect('batches')->with('flash_message', 'teacher Addedd!');
    }

    public function show($id): VIew
    {
        $batches = Batches::find($id);
        return view('batches.show')->with('batches', $batches);
    }

    public function edit($id): View
    {
        $batches = Batches::find($id);
        return view('batches.edit')->with('batches', $batches);
    }

    public function update(Request $request, $id)
    {
        $batches = Batches::find($id);
        $input   = $request->all();
        $batches->update($input);
        return redirect('batches')->with('flash_message', 'batches Updated!');
    }

    public function destroy($id)
    {
        Batches::destroy($id);
        return redirect('batches')->with('flash_message', 'batches deleted!');
    }
}
