<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserJoinController extends Controller
{
     public function store(Request $request, $id)
    {
        \Auth::user()->join($id);
        return redirect()->route('groups.show',[$id]);
    }

    public function destroy($id)
    {
        \Auth::user()->exit($id);
        return redirect()->back();
    }
}
