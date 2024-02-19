<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit {{$employee->name}}</h1>
    <form action="{{ route('employee.update', $employee->slug) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{$employee->name}}">
        </div>
        
        <div>
            <label for="age">Age:</label>
            <input type="number" name="age" value="{{$employee->age}}">
        </div>

        <div>
            <label for="address">Address:</label>
            <input type="text" name="address" value="{{$employee->address}}">
        </div>
        
        <div>
            <label for="number">Phone number:</label>
            <input type="number" name="number" value="{{$employee->phone_num}}">
        </div>
        
        <div>
            <label for="gender">Gender:</label>
            <select name="gender" id="gender">
                <option value="Male" {{ $employee->gender == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ $employee->gender == 'Female' ? 'selected' : '' }}>Female</option>
            </select>
        </div>
        
        <button type="submit">Update</button>
    </form>
</body>
</html>
