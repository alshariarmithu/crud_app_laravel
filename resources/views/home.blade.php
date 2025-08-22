<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App</title>
    <style>
        .reg {
            border: 1px solid black;
            margin-top: 20px;
            margin-bottom: 20px;
            padding: 20px;
            width: 300px;
        }

        .reg input {
            display: block;
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
        }

        .reg button {
            padding: 8px 12px;
        }

        .logout {
            padding: 10px;
            border: 1px solid orange;
            background-color: orange;
            border-radius: 12px;
            color: white;
        }

        .log {
            border: 1px solid black;
            margin-top: 20px;
            margin-bottom: 20px;
            padding: 20px;
            width: 300px;
        }

        .log input {
            display: block;
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
        }

        .log button {
            padding: 8px 12px;
        }
    </style>
</head>

<body>
    @auth
        <p>Logged IN</p>
        <form action="/logout" method="POST">
            @csrf
            <button class="logout">Logout</button>
        </form>
    @else
        <div class="reg">
            <h2>Register Form</h2>
            <form action="/register" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Register</button>
            </form>
        </div>
        <div class="log">
            <h2>Login Form</h2>
            <form action="/login" method="POST">
                @csrf
                <input type="text" name="loginname" placeholder="Name" required>
                <input type="password" name="loginpassword" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    @endauth
</body>

</html>
