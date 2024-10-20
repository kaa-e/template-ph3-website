<?php

namespace App\Http\Controllers;
use App\Models\Quizzes;
use App\Models\Questions;
use App\Models\Choices;
use Illuminate\Http\Request;
use Tailwind\Question;

class QuizController extends Controller
{
    public function index(){
        $values = Quizzes::all();
        // dd($values);
        return view ('quizzes.quiz', compact('values'));
    }
    public function show($id){
        $quiz = Quizzes::with('questions.choices')->findOrFail($id);
        return view('quizzes.show', compact('quiz'));
    }
    public function edit($quizId, $questionId){
        $quiz = Quizzes::with('questions.choices')->findOrFail($quizId);
        $question = $quiz->questions()->findOrFail($questionId);
        return view('quizzes.edit', compact('quiz', 'question'));
    }
    public function update (Request $request, $quizId, $questionId){

        $validated = $request->validate([
            'text'=>'required|string|max:100',
        ]);
        $quiz = Quizzes::with('questions')->findOrFail($quizId);
        $question = $quiz->questions()->findOrFail($questionId);
        // $question = Questions::findOrFail($id); //上2行とこれのどちらでもうまくいく
        $question->text = $validated['text'];
        $question->save(); // 保存

        return redirect()->route('quizzes.show', $quizId)->with('message', '更新されました！');
    }

    public function destroy($quizId, $questionId){
        $quiz = Quizzes::with('questions.choices')->findOrFail($quizId);
        $question = $quiz->questions()->findOrFail($questionId);
        $question->delete();
        return redirect()->route('quizzes.show', $quizId)->with('message', '削除しました！');
    }

}
