@extends('home')

<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
@section('content')

@show
<h1>Employee Info</h1>

<table class="table">
    <tr>
        <th scope="col">>id</th>
        <th scope="col">>name</th>
        <th scope="col">>surname</th>
        <th scope="col">>position</th>
        <th scope="col">>phone</th>
        <th scope="col">>status</th>
        <th scope="col">>edit</th>
    </tr>
    @foreach($employees as $employee)
        <tr>
            <td scope="row">{{$employee->id}}</td>
            <td scope="row">{{$employee->name}}</td>
            <td scope="row">{{$employee->username}}</td>
            <td scope="row">{{$employee->position}}</td>
            <td scope="row">{{$employee->phone}}</td>
            @if($employee->is_hired == true)
                <td scope="row">is_hired</td>
            @else
                <td scope="row">is_not_hired</td>
            @endif
            <td scope="row"><a href="{{url('edit', $employee->id)}}">update</a></td>
        </tr>

    @endforeach

</table>

</body>
</html>
