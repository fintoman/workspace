<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/style.css" />
    <title>change profile</title>
  </head>
  <body>
    <div class="nav">
      <div class="right-links">
        <a href="logout.php"><button class="btn">Log out</button></a>
      </div>
    </div>
    <div class="container">
      <div class="box form-box">
        <header>Change</header>
        <form action="" method="post">
          <div class="field input">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required />
          </div>
          <div class="field input">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" required />
          </div>
          <div class="field input">
            <label for="age">Age</label>
            <input type="number" name="age" id="age" required />
          </div>

          <div class="field input">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required />
          </div>

          <div class="field">
            <input
              type="submit"
              class="btn"
              name="submit"
              value="Change"
              required
            />
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
