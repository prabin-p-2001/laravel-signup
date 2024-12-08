<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('./css/style.css')}}">
    <title>Document</title>
</head>
<body>
<div class="blob"></div>

<div class="wraper">
  <form>
    <h2>Login</h2>
    <div class="input-box">
      <input type="email" required>
      <label>Email</lable>
    </div>

    <div class="input-box">
      <input type="password" required>
      <label>Password</lable>
    </div>

    <div class="remember-forgot">
      <label><input type="checkbox">
        remember me </label>
      <a href="#">forgot password?</a>
    </div>

    <button>Login</button>

    <div class="register-link">
      <p>don't have an account?
        <a href="#">register</a>
      </p>
    </div>

  </form>
</div>
</body>
</html>