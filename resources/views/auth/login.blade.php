<!-- resources/views/auth/login.blade.php -->

<form method="POST" action="/auth/login">
    {!! csrf_field() !!}

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
    <div>
        <a href="/auth/facebook">login with facebook</a>
    </div>
    <div>
        <a href="/auth/google">login with google</a>
    </div>
    <h1>This the the login page</h1>
</form>

