<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <form>
        <h1>Login</h1>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <input type="submit" value="Submit">
      </form>
    </div>
  </body>
</html>
