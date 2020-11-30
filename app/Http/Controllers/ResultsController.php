<?php


namespace App\Http\Controllers;


use App\Models\Questionforms;

class ResultsController
{

    public function results(Request  $request){
        $id = Auth::id();
        $forms = Questionforms::all();
        $counter = 0;
        foreach ($forms as $form){
            $answer = $request->input($form->id);
            if ($answer == $form->correct){
                $counter++;
            }
        }
        echo "<h1 style='margin-left: 50%; color: aqua'> სწორი პასუხების რაოდენობა: $counter</h1>";

    }

}
