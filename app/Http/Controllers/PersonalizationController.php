<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
class PersonalizationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('personalization');
    }
    public function updateBG(){
        if(auth()->user()->background!='bg2.jpg'){
            unlink(public_path()."/bg/".auth()->user()->background);
        }
        $allowed = array('jpg','png');
        if(Input::hasFile('background')){
            $fname=$_FILES['background']['name'];
            $ext=pathinfo($fname,PATHINFO_EXTENSION);
            if(!in_array($ext,$allowed)){
                return redirect()->back()->with('error','Extension not allowed');
            }
            $_FILES['background']['name']=uniqid().".".$ext;
            $full_path=public_path()."/bg/".$_FILES['background']['name'];
            move_uploaded_file($_FILES['background']['tmp_name'],$full_path);
            $user=Auth::user();
            $user->background=$_FILES['background']['name'];
            $user->save();
            return redirect()->back()->with('message','Background uploaded');
        }


        return redirect()->back()->with('error','Background was not updated!');
    }

    public function resetBG(){
        if(auth()->user()->background!='bg2.jpg'){
            unlink(public_path()."/bg/".auth()->user()->background);
            auth()->user()->background='bg2.jpg';
            auth()->user()->save();
            return redirect()->back()->with('message','Background resetted.');
        }
        return redirect()->back()->with('error','You already have default background.');
    }

    public function updateAvatar(){

        $allowed = array('jpg','png');
        if(Input::hasFile('avatar')){
            $fname=$_FILES['avatar']['name'];
            $ext=pathinfo($fname,PATHINFO_EXTENSION);
            if(!in_array($ext,$allowed)){
                return redirect()->back()->with('error','Extension not allowed');
            }
            $_FILES['avatar']['name']=uniqid().".".$ext;
            $full_path=public_path()."/avatars/".$_FILES['avatar']['name'];
            move_uploaded_file($_FILES['avatar']['tmp_name'],$full_path);
            $user=Auth::user();
            $user->avatar=$_FILES['avatar']['name'];
            $user->save();
            return redirect()->back()->with('message','Avatar uploaded');
        }


        return redirect()->back()->with('error','Avatar was not updated!');
    }
}
