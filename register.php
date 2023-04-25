<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/closet/style/main.css" />
    <link rel="stylesheet" href="/closet/style/login.css" />
    <title>Register</title>
  </head>
  <body>
    <main class="main">
      <div class="container">
        <div class="form">
          <h1 class="form__title">Welcome To Closet</h1>
          <form action="/" method="POST">
            <div class="form__inputs">
              <label for="username">Username</label>
              <input type="text" name="username" id="username" />
            </div>
            <div class="form__inputs">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" />
            </div>
            <div class="form__inputs">
              <label for="confirm">Confirm Password</label>
              <input type="password" name="confirm" id="confirm" />
            </div>
            <div class="form__inputs">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" />
            </div>
            <div class="form__button button-alt">
              <input type="submit" value="Resigter" />
            </div>
          </form>
        </div>
      </div>
    </main>
  </body>
</html>
