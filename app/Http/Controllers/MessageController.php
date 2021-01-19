<?php


namespace App\Http\Controllers;


use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends \Illuminate\Routing\Controller
{
    public function __construct()
    {
       $this->middleware('web');
//        $this->authorizeResource(Instructor::class, 'instructor');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::all();

        return view('message.index', [
            'messages' => $messages
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('message.create', [
            'action' => route('message.store'),
            'method' => 'post'
        ]);
    }

    public function messages() {
        $message = Message::all();
        return $this->json($message);
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
        $message = new Message();
        $id = auth()->user()->getAuthIdentifier();
        $message->id = $id;
        $message->email = User::find($id)->email;
        $message->description = $request->description;
        $message->save();

        return redirect()->route('message');
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
        $message = Message::find($id);
        return view('message.edit', [
            'action' => route('message.update', $message->id),
            'method' => 'put',
            'model' =>$message
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
        $message = Message::find($id);
        $message->update($request->all());
        return redirect()->route('message');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = Message::find($id);
        $message->delete();
        return redirect()->route('message');
    }
}
