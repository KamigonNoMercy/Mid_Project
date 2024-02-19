<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Employee lists</h1>
    <a href="{{ route('employee.create') }}">Create new employee</a>
    <ul>
        @foreach ($employees as $employee)
            <li>
                name: {{ $employee->name }}, gender: {{ $employee->gender }}, age: {{ $employee->age }}
                <a href="{{ route('employee.show', $employee->slug) }}">View Details</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
