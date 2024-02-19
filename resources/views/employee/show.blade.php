<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$employee->name}}</h1>
    <a href="{{route('employee.edit',$employee->slug}}">edit</a>
    <form action="{{route('employee.delete',$employee->slug}}" method="POST">
        @csrf
        @method('DELETE')
        <button>delete</button>
    </form>
    <p>name:{{$employee->name}}</p>
    <p>age:{{$employee->age}}</p>
    <p>gender:{{$employee->gender}}</p>
    <p>phone_num:{{$employee->phone_num}}</p>
    <p>address:{{$employee->address}}</p>
</body>
</html>