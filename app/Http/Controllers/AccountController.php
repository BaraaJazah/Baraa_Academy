<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Doctrine\Inflector\Rules\English\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{


    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'class' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'class' => $request->class,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('addmessage' , "The Student Added Successfully : )");
    }

    public function storeTeacher(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'class' => 0,
            'email' => $request->email,
            'admin' => 1 ,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('addmessage' , "The Teacher Added Successfully : )");

    }


    public function updateAccount(Request $request , $id){

        if(!$request->file('photo')){
            $path = Auth::user()->path ;

        }else{
            $request->validate([
                'photo' => ['image','mimes:jpg,png,jpeg,gif,svg','max:2048'],
            ]);

            if(Auth::user()->path != "users/photo.png"){
                Storage::disk('beraa')->delete(Auth::user()->path);
            }
            $path =$request->file('photo')->store("users",'beraa');
        }

        if(!$request->name && !$request->surname ){
            $name = Auth::user()->name ;
            $surname = Auth::user()->surname ;
        }else{
            $request->validate([
                'name' =>    ['required','string', 'max:255'],
                'surname' => ['required','string', 'max:255'],
            ]);
            $name = $request->name ;
            $surname = $request->surname ;
        }

        if(!$request->class){
            $class = Auth::user()->class;
        }else{
            $class = $request->class ;
        }

        $user = User::find($id);
        $user->update([
            'name'     => $name ,
            'surname'  => $surname ,
            'path'     => $path ,
            'class'    => $class ,
        ]);
        return redirect()->back()->with('update' , "The Acount Updated Successfully : )");


    }


    public function changePassword(Request $request , $id){

        $request->validate([
            'currentPassword' => ['required','string', 'max:255'],
            'newPassword'     => ['required','string', 'max:255'],
        ]);
        $user = User::find($id);
        if(Hash::check($request->currentPassword, $user->password)) {
            $user->update([
                'password' => Hash::make($request->newPassword)
            ]);
            return redirect()->back()->with('update' , "The Password Updated Successfully : )");

        }else{
            return redirect::back()->withErrors("Current Password Is Flase");
        }
    }

    public function destroy($id){

        User::destroy($id);
        return redirect()->back()->with('deletesuccess' , "The Account Deleted Successfully : )");
    }


    public function destroyFromAdmin($id){

        User::destroy($id);
        $users = DB::table('users')->where('admin' , 0)->orderBy('class')->get();

        if(view()->exists('en.superAdmin.components.student_data')){
            return view('en.superAdmin.components.student_data' , compact('users'));
        }else{
            return view('error');
        }
    }



    public function destroyTeacherFromAdmin($id){

        User::destroy($id);
        $users = DB::table('users')->where('admin' , 1)->orderBy('class')->get();

        if(view()->exists('en.superAdmin.components.student_data')){
            return view('en.superAdmin.components.teacher_data' , compact('users'));
        }else{
            return view('error');
        }
    }





    public function destroyMessgae($id){

        return redirect()->back()->with('deleteId' , $id);

    }


}
