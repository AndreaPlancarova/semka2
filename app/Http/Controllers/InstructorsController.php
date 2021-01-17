<?php


namespace App\Http\Controllers;

use Aginev\Datagrid\Datagrid;
use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorsController extends Controller
{
    public function __construct()
    {
        //$this->authorizeResource(Instructor::class, 'instructor');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = Instructor::all();

        $grid = new Datagrid($users, $request->get('f',[]));
        $grid->setColumn('name', 'Full name')
            ->setColumn('photo', 'Photo')
            ->setColumn('age', 'Age')
            ->setColumn('description', 'Des');
//            ->setActionColumn([
//                'wrapper' => function($value, $row){
//                    return '<a href="'.route('user.edit', [$row->id]) . '"title ="Edit" class="btn btn-sn btn-primary">Edit</a>
//                        <a href="'. route('user.delete', $row->id) . '"title ="Delete" data-method="DELETE" class="btn btn-sn btn-danger" data-confirm="Are you sure?">Delete</a>';
//                }
//            ]);
        $data = Instructor::all();
       // return Instructor::all();
//        return view('instructor.index', [
//        'data' => $data
//        ]);
        return Instructor::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create()
//    {
//        return view('instructor.create', [
//            'action' => route('instructor.store'),
//            'method' => 'post'
//        ]);
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {
//        // tu je validacia
//        $request->validate([
//            'name' => 'required',
//            'email' => 'required|email|unique:users,email,',
//            'password' => 'required|min:6|confirmed'
//        ]);
//        $user = User::create($request->all());
//        $user->save();
//        return redirect()->route('user.index');
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  int  $id_instructor
//     * @return \Illuminate\Http\Response
//     */
//    public function show(int $id_instructor)
//    {
//        //
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
//     */
//    public function edit(Instructor $instructor)
//    {
//        $instructor->password = "";
//        return view('instructor.edit', [
//            'action' => route('user.update', $instructor->id_instructor),
//            'method' => 'put',
//            'model' =>$instructor
//        ]);
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  int  $id
//     * @return \Illuminate\Http\RedirectResponse
//     */
//    public function update(Request $request, Instructor $instructor)
//    {
//        //pridat alerty ze uzivatel bol pridany
//        // tu je validacia
//        $request->validate([
//            'name' => 'required',
//            //'email' => 'required|email|unique:users,email,' . $user->id,
//            //'password' => 'required|min:6|confirmed'
//        ]);
//        $instructor->update($request->all());
//        return redirect()->route('instructor.index');
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\RedirectResponse
//     */
//    public function destroy(Instructor $instructor)
//    {
//        $instructor->delete();
//        return redirect()->route('instructor.index');
//    }

//    public function redirectToIndex()
//    {
//        header("Location:http://localhost/semka2/public/instructor");
//        die();
//    }

}
