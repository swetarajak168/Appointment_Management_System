<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
class UserController extends Controller
{
    //
    use ValidatesRequests;
    public function index()
    {
        $users = User::latest()->paginate(4);
       
        return view('users.index')->with('users', $users);
    }
    public function create()
    {
        return view('users.create');
    }
    public function store(UserRequest $request)
    {    
        $validated = $request->validated();
        // User::create($validated);
        User::create(  [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password'=>bcrypt($validated['password']),
            'status' => $validated['status'],
            'role' => $validated['role'],
        ]);
     
        return redirect()->route('user.index')->withSuccess( 'User was successfully added.');
    }
    public function show($id){
        $user = User::findOrFail($id);
        return view('users.show',['user'=>$user]);
    }

    public function edit($id)
    {     
        $user = User::findOrFail($id);
        return view('users.edit',[
            'user'=>$user,
        ]);
    }
    public function update(UserRequest $request, $id){

        $user = User::findOrFail($id);
        $user->update([
            'name' =>$request->name,
            'email' =>$request->email,
            'role' =>$request->role,
            'status' =>$request->status,         
        ]);    
        $doctor = Doctor::where('user_id',$id);
        if($doctor->exists()){
            $doctor->update([
                'fname' =>$request->name,
                'email' =>$request->email,
                       
            ]);
        } 
        return redirect()->route('user.index')->withSuccess( 'User was successfully updated.');
    }
    public function destroy($user){   
        // dd($user);
        $doctor = Doctor::where('user_id',$user);
        if($doctor->exists()){
            $doctor->delete();
        }       
        $user_del = User::findOrFail($user);
        $user_del->delete();
        return redirect()->route('user.index')->withSuccess( 'User was successfully deleted.');
    }
}
