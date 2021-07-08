<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=, initial-scale=1.0"> -->
    <link rel="stylesheet" href="{{ asset('frontend/login.style.css') }}">
    
    <title>Log in</title>
</head>

<body>
    <form action="{{route('login') }}" class="box" method="POST">
        @csrf

        <h1>Login</h1>
        <input type="text" name="username" placeholder="Username" @error('username') is-invalid @enderror>
        @error('username')
            <span class="invalid-feedback" role="alert" >
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="password" name="password" placeholder="Password">
        @error('password')
            <span class="invalid-feedback" role="alert" >
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <!-- Uzim qo'shdim-->
        {{-- <input type="checkbox" name="" id="remember">
        <label for="remember" class="p">Remember me?</label> --}}
        <!-- - -->

        <input type="submit" name="" value="Submit">

    </form>

</body>

</html>