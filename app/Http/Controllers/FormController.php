<?php


namespace App\Http\Controllers;

use App\Models\Questions;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FormController
{
    public function forms(Request $request){
        $id = Auth::id();
        $questions = User::find($id);
        $forms = Questionforms::all();
//        dd($forms);

        return view('form', ['forms'=>$forms]);
    }



    public function view_create_from(){
        return view('create_form');
    }


    public function Createform(Request $request){
        $id = Auth::id();
        $permission = Roles::find(1);

        if($permission->user_id != $id){
            echo '<h1 style="margin-left: 50%"> you have not permissions  </h1>';


        }else {
            $question = $request->input('question');
            $answer1 = $request->input('answer1');
            $answer2 = $request->input('answer2');
            $answer3 = $request->input('answer3');
            $answer4 = $request->input('answer4');
            $correct = $request->input('correct');
           $form = new Questionforms();
            $form->question = $question;
            $form->answera = $answer1;
            $form->answerb = $answer2;
            $form->answerc = $answer3;
            $form->answerd = $answer4;
            $form->user_id = $id;
            $form->correct = $correct;
            $form->save();
        }


        return redirect('form');
    }
}
