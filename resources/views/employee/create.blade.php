<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('employee.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name">
        </div>
        
        <div>
            <label for="age">Age:</label>
            <input type="number" name="age">
        </div>

        <div>
            <label for="address">Address:</label>
            <input type="text" name="address">
        </div>
        
        <div>
            <label for="number">Phone number:</label>
            <input type="number" name="number">
        </div>
        
        <div>
            <label for="gender">Gender:</label>
            <select name="gender" id="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>
