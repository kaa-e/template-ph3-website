<?php

namespace App\Http\Controllers;
use App\Models\Questions;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        // $questions=Questions::all();
        $questions=Questions::paginate(20);
        return view ('admin.admin', compact('questions'));
    }
    public function edit($id){
        $question = Questions::find($id);
        return view('admin.edit', compact('question'));
    }
    public function update (Request $request, $id){

        $validated = $request->validate([
            'text'=>'required|string|max:100',
        ]);
        $question = Questions::find($id);
        $question->text = $validated['text'];
        $question->save(); // 保存

        return redirect()->route('admin')->with('message', '更新されました！');
    }
}
