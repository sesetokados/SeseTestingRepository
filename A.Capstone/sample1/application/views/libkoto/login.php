<!DOCTYPE html>
<html>
<head>
  <title>San Beda University Login</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="left-side">
    <div class="logo-background">
      <img src="LibKo'To Assets/san beda logo.png" alt="San Beda University Logo" class="logo">
    </div>
  </div>
  <div class="right-side">
    <div class="container">
      <h2>Log In</h2>
      <p class="description">Enter your account credentials using your SBU Employee Email</p>
      <form action="login.html" method="post">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required>
        </div>
      
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
        </div>
      
        <button type="submit">Log In</button>
      </form>
      
    </div>
  </div>
</body>
</html>
