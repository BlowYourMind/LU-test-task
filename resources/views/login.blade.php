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
        <h1 class="login-register-heading">Log in</h1>

        <form class="login-register-form" method="POST" action="/login">
            @csrf
            <div class="">
                <label class="login-register-label" for="email">
                    Username
                </label>
                <input class="login-register-input" type="text" name="username" id="username" value="{{old('username')}}" required>
                @error('username')
                <p class="error">{{$message}}</p>
                @enderror
            </div>

            <div>
                <label class="login-register-label" for="password">
                    Password
                </label>

                <input class="login-register-input" type="password" name="password" id="password" value="{{old('password')}}" required>
                @error('password')
                <p>{{$message}}</p>
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
