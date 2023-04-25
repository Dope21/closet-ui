<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/closet/style/main.css" />
    <link rel="stylesheet" href="/closet/style/login.css" />
    <title>login</title>
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
            <span class="form__link"><a href="/closet/register.php">register</a></span>
            <div class="form__button button-alt">
              <input type="submit" value="Login" />
            </div>
          </form>
        </div>
      </div>
    </main>
  </body>
</html>
