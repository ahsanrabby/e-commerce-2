<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="{{asset('login2/style.css')}}">
</head>

<body>
<section>

    <div class="login-box">
        <form action="{{route('login')}}" method="post">
            @csrf
            <h2>Login</h2>
            <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="email" name="email" required>
                <label for="">Email</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="key"></ion-icon></span>
                <input type="password" name="password" required>
                <label for="">Password</label>
            </div>
            <div class="remember-forgot">
                <label for=""><input type="checkbox"> Remember me </label>
                <a href=""> Forgot Password</a>
            </div>
            <button type="submit">Login</button>
            <div class="register-link">
                <p>Dont have an account?<a href=""> Register</a></p>
            </div>

        </form>
    </div>
</section>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
