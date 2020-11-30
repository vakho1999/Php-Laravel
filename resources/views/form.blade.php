<form style="margin-left: 50%; background-color: #689aff" class="quiz-question" method="post" action="{{route('result')}}">
    @csrf
    @foreach($forms as $form)
        <ul class="multiple-choice-list" >

            <div class="quiz-explanation">{{$form->question}} -> სწორი პასუხია:
            </div>

            <li><label for="answer"><input type="radio" name="{{$form->id}}" value="{{$form->answer1}}">{{$form->answer1}}</label> <i class="fa fa-check fa-lg answer"></i></li>
            <li><label for="answer"><input type="radio" name="{{$form->id}}" value="{{$form->answer2}}">{{$form->answer2}}</label></li>
            <li><label for="answer"><input type="radio" name="{{$form->id}}" value="{{$form->answer3}}">{{$form->answer3}}</label></li>
            <li><label for="answer"><input type="radio" name="{{$form->id}}" value="{{$form->answer4}}">{{$form->answer4}}</label></li>
        </ul>
    @endforeach


    <button type="submit" class="btnCheckAnswer" data-answer="1" value="send">შემოწმება</button>
</form>



