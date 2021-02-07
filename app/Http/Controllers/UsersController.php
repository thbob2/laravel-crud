<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\Users\UpdateProfileRequest;
class UsersController extends Controller
{
    //
    public function index(){
        return view('users.index')->with('users',User::all());
    }
    public function edit(){

        return view('users.edit')->with('user',auth()->user());

    }

    public function update(UpdateProfileRequest $request){
        $user = auth()->user();
        $user->update([
            'name' => $request->name,
            'about' =>  $request->about,
        ]);

        session()->flash('success','Your Profile has been update successfully');
        return redirect()->back();

    }





    public function makeAdmin(User $user){
        $user->role = 'admin' ;

        $user->save();

        session()->flash('success', $user->name.' is now an administrator');
        return  redirect(route('users.index'));
    }

}

