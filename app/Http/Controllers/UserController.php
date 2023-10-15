<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
class UserController extends Controller
{
    //
    use ValidatesRequests;
    public function index()
    {
        $users = User::get();
       
        return view('users.index')->with('users', $users);
    }
    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {
        //dd($request->all());

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'role'=> 'required',
            'status'=>'required',
         ]);
        //$request->validate($rules);
        User::create($validated);
        
        return redirect('/dashboard/user')->withSuccess( 'User was successfully updated.');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit',[
            'user'=>$user,
        ]);
    }
    public function update(Request $request, $id){
        //dd($request->all());

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|unique|email',
            'password' => 'required|min:8',
            'role'=> 'required',
            'status'=>'required',
         ]);
        $user = User::where('id',$id)->first();
        $user->update($validated);
        
       // $user->save();
        return redirect('/dashboard/user')->withSuccess( 'User was successfully updated.');
    }


    public function destroy($id){
        $user = User::where('id',$id)->first();
        $user->delete();
        return redirect('/dashboard/user')->withSuccess( 'User was successfully deleted.');
    }
}
