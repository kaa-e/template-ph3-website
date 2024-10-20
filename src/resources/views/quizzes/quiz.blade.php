@foreach($values as $value)
    {{$value -> id}}
    <a href="{{ route('quizzes.show', ['id' => $value->id]) }}">{{$value -> name}}</a><br>
@endforeach