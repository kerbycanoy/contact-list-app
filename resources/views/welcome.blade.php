<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact List App</title>
    <!-- Styles -->
    <style>
        /* Global Styles */
        header {
            background-color: #007bff;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 20px;
        }
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .flex {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Button Styles */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 16px;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        /* Margin between buttons */
        .mr-4 {
            margin-right: 10px; /* Adjust the margin as needed */
        }

        .ml-4 {
            margin-left: 10px; /* Adjust the margin as needed */
        }
    </style>
</head>
<body>
    <header>
        <h1>Contact List App</h1>
        <p>A simple and efficient way to manage your contacts.</p>
    </header>
    <div class="flex">
        <a href="{{ route('login') }}" class="btn mr-4">Log in</a>
        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="btn ml-4">Register</a>
        @endif
    </div>
</body>
</html>
