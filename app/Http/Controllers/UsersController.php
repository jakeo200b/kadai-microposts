<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

use App\User;


class UsersController extends Controller
{
    //
    public function index()
    {
        $users = User::orderBy('id','desc')->paginate(10);
        
        $userid = \Auth::id();
        
        
        
        return view('users.index',[
            'users'=>$users,
            'userid'=>$userid,
            
        ]);
    }
    
    
    public function show($id)
    {
        $user = User::find($id);
        $microposts = $user->microposts()->orderBy('created_at', 'desc')->paginate(19);
        
        $data = [
            'user'=> $user,
            'microposts'=>$micropsts,
        ];
        
        $data += $this->counts($user);
        
        
        return view('users.show',[
            'user'=>$user,
        ]);
    }
    
}
