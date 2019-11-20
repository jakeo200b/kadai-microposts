<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    //
    public function store(Request $request, $micropostId){
        \Auth::user()->favorate($micropostId);
        return back();
    }
    
    public function destroy($micropostId){
        \Auth::user()->unfavorate($micropostId);
        return back();
    }
}
