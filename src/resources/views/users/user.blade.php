@foreach($users as $user)
    {{$user -> id}}
    {{$user -> name}}
    {{$user -> email}}
@endforeach