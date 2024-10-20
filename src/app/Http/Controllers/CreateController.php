<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Create;

class CreateController extends Controller
{
    //
    public function create(){
        return view ('admin.create');
    }

    public function store (Request $request){
        $create = Create::create([
            'text' => $request ->text
        ]);
        $validated = $request->validate([
            'text'=>'required|string|max:100',
        ]);
        $create = Create::create($validated);
        $request->session()->flash('message', '保存しました');
        return back();
    }
}
