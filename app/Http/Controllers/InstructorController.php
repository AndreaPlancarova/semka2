<?php

namespace App\Http\Controllers;

use Aginev\Datagrid\Datagrid;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\In;

class InstructorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
//       $this->middleware('web');
//        $this->authorizeResource(Instructor::class, 'instructor');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $instructors = Instructor::all();

        return view('instructor.index', [
            'instructors' => $instructors
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('instructor.create', [
            'action' => route('instructor.store'),
            'method' => 'post'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $request->validate([
//            'name' => 'required'
//        ]);

//        $instructor = new Instructor();
//        $instructor->id = 6;
//        $instructor->name = $request->name;
//        $instructor->email = $request->email;
//        $instructor->age = $request->age;

        $instructor = Instructor::create($request->all());
        $instructor->save();

        return redirect()->route('instructor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instructor = Instructor::find($id);
        return view('instructor.edit', [
//            'action' => route('instructor.update', $instructor->id),
            'action' => route('instructor.update', $instructor->id),
            'method' => 'put',
            'model' =>$instructor
        ]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'age' => 'min:2'
        ]);
        $instructor = Instructor::find($id);
        $instructor->update($request->all());
        return redirect()->route('instructor');

    }

    public function instructors() {
        $instructor = Instructor::all();
        return $this->json($instructor);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instructor = Instructor::find($id);
        $instructor->delete();
        return redirect()->route('instructor');
    }
}
