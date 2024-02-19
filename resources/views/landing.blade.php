<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Karyawan</title>
    <link rel="stylesheet" href="{{ asset("/style/style.css") }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <nav class="navbar">
            <ul class="nav_links">    
                <li class="btn"><a href="#">Home</a></li>
            </ul>
            <ul class="nav_links">
                <li class="btn"><a href="{{ route('login') }}" target="_blank">Login</a></li>
                <li class="btn"><a href="{{ route('register') }}" target="_blank">Sign Up</a></li>
            </ul>
        </nav>
        <header class="header">
            <div class="header_content">
                <h1>Effortlessly manage data</h1>
                <p>Simplify company data</p>
                <a href="employee" target="_blank" class="btn get-started">Get Started</a>
            </div>
            <div>
                <img src="{{ asset("/images/business.png") }}" alt="">
            </div>
        </header>
    </div>
</body>
</html>
