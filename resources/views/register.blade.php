<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css"/>

</head>
<body>
<section class="section1">
    <main>
        <h1 class="login-register-heading">Register</h1>

        <form class="login-register-form" method="POST" action="/createUser">
            @csrf
            <div>
                <label for="name" class="login-register-label">
                    Name
                </label>
                <input class="login-register-input" type="text" name="name" id="name" value="{{old('name')}}"
                       required>
                @error('name')
                <p class="error">{{$message}}</p>
                @enderror
            </div>

            <div>
                <label for="username" class="login-register-label">
                    Username
                </label>
                <input class="login-register-input" type="text" name="username" id="username" value="{{old('username')}}"
                       required>
                @error('username')
                <p class="error">{{$message}}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="login-register-label">
                    Email
                </label>
                <input  class="login-register-input" type="text" name="email" id="email" value="{{old('email')}}"
                        required>
                @error('email')
                <p class="error">{{$message}}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="login-register-label">
                    Password
                </label>

                <input class="login-register-input" type="password" name="password" id="password" value="{{old('password')}}"
                       required>
                @error('password')
                <p class="error">{{$message}}</p>
                @enderror
            </div>

            <div>
                <button type="submit">submit</button>
            </div>
        </form>
    </main>
</section>
</body>
</html>
