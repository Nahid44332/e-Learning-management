<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
</head>
<style>
    body {
  font-family: sans-serif;
  background: rgb(223, 223, 223);
  display: flex;
  justify-content: center;
  height: 100vh;
  align-items: center;
}
.wrapper {
  width: 300px;
  box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.2),
    -10px -10px 20px rgba(255, 255, 255, 0.7);
  padding: 20px 40px;
  border-radius: 10px;
  text-align: center;
}
.wrapper .head {
  margin: 50px 0;
}
.wrapper .head h1 {
  font-size: 24px;
}
.wrapper .input-field {
  margin: 30px 0;
  box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.2),
    -10px -10px 20px rgba(255, 255, 255, 0.7);
  border-radius: 10px;
  padding: 10px 0;
  display: flex;
  align-items: center;
  padding-left: 20px;
  color: #aaa;
}
.input-field input {
  outline: none;
  border: none;
  background: transparent;
  margin-left: 10px;
  letter-spacing: 1px;
  font-size: 14px;
}
.btn {
  margin: 50px 0;
}
.btn button {
  width: 100%;
  padding: 7px 0;
  border: none;
  border-radius: 10px;
  box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.2),
    -10px -10px 20px rgba(255, 255, 255, 0.7);
  background: transparent;
  font-size: 16px;
  font-weight: 600;
  color: #aaa;
  cursor: pointer;
  transition: color 0.3s;
}
.btn button:hover {
  color: #000;
}
.footer {
  margin: 10px 0;
}
.footer span,
.footer span a {
  color: #aaa;
  font-size: 14px;
  text-decoration: none;
  transition: color 0.3s;
}
.footer span a:hover {
  color: #000;
}
</style>
<body>
    <div class="wrapper">
        <div class="head">
            <h1>Login Form</h1>
        </div>
      <form method="POST" action="{{ route('login') }}">
        @csrf
          <div class="input-field">
            <i class="fa-solid fa-envelope"></i>
            <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="Username" required>
        </div>
        <div class="input-field">
            <i class="fa-solid fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
        </div>

        <div class="btn">
            <button type="submit">Log In</button>
        </div>
      </form>

        <div class="footer">
            <span><a href="#">Forgot Password?</a> or <a href="#">Sign UP</a></span>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/72bcc874c6.js"></script>
</body>
</html>
