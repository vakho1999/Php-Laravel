<form style="margin-left: 50%; background-color: #689aff" method="post" , action="{{route('create_form')}}">
    @csrf
    <label for="question">question</label><br>
    <input type="text" id="question" name="question"><br>

    <label for="answer1">პასუხი1 :</label><br>
    <input type="text" id="answer1" name="answer1"><br>

    <label for="answer2">პასუხი2 :</label><br>
    <input type="text" id="answer2" name="answer2"><br>

    <label for="answer3">პასუხი3 :</label><br>
    <input type="text" id="answer3" name="answer3"><br>

    <label for="answer4">პასუხი4 :</label><br>
    <input type="text" id="answer4" name="answer4"><br>

    <label for="correct">სწორი პასუხი :</label><br>
    <input type="text" id="correct" name="correct"><br>

    <button type="submit">დამატება</button>
</form>
