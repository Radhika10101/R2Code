<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="EduPress - Online Learning Platform">
  <title>Login/ Register</title>
  <link rel="stylesheet" href="https://unpkg.com/@tabler/icons-webfont@2.47.0/tabler-icons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Exo:wght@600&family=Jost:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <?php include('navbar.php'); ?>

<div class="auth-container" role="main">
  <form class="auth-form-wrapper" aria-labelledby="login-heading">
    <h2 id="login-heading" class="auth-heading">Login</h2>
    <div class="auth-form">
      <label for="login-email" class="visually-hidden">Email or username</label>
      <input
        type="text"
        id="login-email"
        placeholder="Email or username*"
        class="auth-input"
        required
        aria-required="true"
      />

      <div class="password-field">
        <label for="login-password" class="visually-hidden">Password</label>
        <input
          type="password"
          id="login-password"
          placeholder="Password*"
          class="auth-input"
          required
          aria-required="true"
        />
        <button type="button" class="password-toggle" aria-label="Toggle password visibility" onclick="togglePassword('login-password')">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">
    <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7 7 0 0 0-2.79.588l.77.771A6 6 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755q-.247.248-.517.486z"/>
    <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829"/>
    <path d="M3.35 5.47q-.27.24-.518.487A13 13 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7 7 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12z"/>
  </svg>
</button>
      </div>

      <label class="remember-me">
        <input type="checkbox" id="remember-me" />
        <span>Remember me</span>
      </label>

      <button type="submit" class="auth-button">Login</button>
      <a href="#" class="forgot-password">Lost your password?</a>
    </div>
  </form>

  <form class="auth-form-wrapper" aria-labelledby="register-heading">
    <h2 id="register-heading" class="auth-heading">Register</h2>
    <div class="auth-form">
      <label for="register-email" class="visually-hidden">Email</label>
      <input
        type="email"
        id="register-email"
        placeholder="Email*"
        class="auth-input"
        required
        aria-required="true"
      />

      <label for="register-username" class="visually-hidden">Username</label>
      <input
        type="text"
        id="register-username"
        placeholder="Username*"
        class="auth-input"
        required
        aria-required="true"
      />

      <div class="password-field">
        <label for="register-password" class="visually-hidden">Password</label>
        <input
          type="password"
          id="register-password"
          placeholder="Password*"
          class="auth-input"
          required
          aria-required="true"
        />
        <button type="button" class="password-toggle" aria-label="Toggle password visibility" onclick="togglePassword('register-password', this)">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">
            <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7 7 0 0 0-2.79.588l.77.771A6 6 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755q-.247.248-.517.486z"/>
            <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829"/>
            <path d="M3.35 5.47q-.27.24-.518.487A13 13 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7 7 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12z"/>
          </svg>
        </button>
      </div>

      <div class="password-field">
        <label for="confirm-password" class="visually-hidden">Confirm Password</label>
        <input
          type="password"
          id="confirm-password"
          placeholder="Confirm Password*"
          class="auth-input"
          required
          aria-required="true"
        />
        <button type="button" class="password-toggle" aria-label="Toggle password visibility" onclick="togglePassword('confirm-password', this)">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">
            <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7 7 0 0 0-2.79.588l.77.771A6 6 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755q-.247.248-.517.486z"/>
            <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829"/>
            <path d="M3.35 5.47q-.27.24-.518.487A13 13 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7 7 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12z"/>
          </svg>
        </button>
      </div>

      <button type="submit" class="auth-button">Register</button>
    </div>
  </form>
</div>

<script>
function togglePassword(inputId) {
  var input = document.getElementById(inputId);
  var toggleButton = input.nextElementSibling; // Dapatkan tombol di sebelah input

  if (input.type === "password") {
    input.type = "text";
    toggleButton.innerHTML = `
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
      </svg>
    `;
  } else {
    input.type = "password";
    toggleButton.innerHTML = `
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">
        <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7 7 0 0 0-2.79.588l.77.771A6 6 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755q-.247.248-.517.486z"/>
        <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829"/>
        <path d="M3.35 5.47q-.27.24-.518.487A13 13 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7 7 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12z"/>
      </svg>
    `;
  }
}   
</script>


</body>
</html>


<style>
  .auth-container {
    display: flex;
    margin: 60px 0 0;
    align-items: flex-start;
    gap: 30px;
    justify-content: center;
    flex-wrap: wrap;
    padding: 0 20px;
    min-height: calc(100vh - 400px);
  }

  .auth-form-wrapper {
    border-radius: 20px;
    background-color: #fff;
    border: 1px solid #eaeaea;
    display: flex;
    min-width: 240px;
    padding: 30px;
    flex-direction: column;
    width: 630px;
  }

  .auth-heading {
    width: 100%;
    color: var(--Black, #000);
    text-transform: capitalize;
    font: 600 32px/1.2 Exo, sans-serif;
  }

  .auth-form {
    display: flex;
    margin-top: 30px;
    width: 100%;
    flex-direction: column;
    font: 400 18px Jost, sans-serif;
  }

  .auth-input {
    border-radius: 8px;
    border: 1px solid #9d9d9d;
    min-height: 48px;
    width: 100%;
    padding: 11px 16px;
    margin-bottom: 20px;
    font: 18px Jost, sans-serif;
  }

  .password-field {
    position: relative;
    margin-bottom: 20px;
  }

  .password-toggle {
  position: absolute;
  right: 5px;
  top: 36%;
  transform: translateY(-50%);
  color: #9d9d9d;
  cursor: pointer;
  background: none;
  border: none;
  padding: 6px;
  transition: color 0.3s ease;
  display: flex;
  align-items: center; /* Memastikan ikon sejajar vertikal dengan teks */
  justify-content: center; /* Memastikan ikon berada di tengah horizontal */
  height: 100%; /* Mengisi tinggi parent */
}

.password-toggle:hover {
  color: #ff782d;
}

.password-toggle svg {
  width: 24px;
  height: 24px;
}
  .remember-me {
    display: flex;
    align-items: center;
    gap: 4px;
    color: var(--Dark_gray, #555);
    margin-bottom: 20px;
  }

  .auth-button {
    border-radius: 24px;
    background-color: #ff782d;
    min-height: 48px;
    width: 100%;
    padding: 11px 24px;
    color: #fff;
    border: none;
    cursor: pointer;
    text-transform: capitalize;
    font: 500 18px Jost, sans-serif;
  }

  .forgot-password {
    color: var(--Black, #000);
    margin-top: 20px;
    text-decoration: none;
  }

  .visually-hidden {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    border: 0;
  }
</style>

<?php include 'footer.php'; ?>
</body>
</html>
