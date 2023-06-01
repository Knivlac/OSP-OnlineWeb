<!DOCTYPE html>
<html lang="en">
  <html>
    <head>
      <link rel="Stylesheet" href="design/style.css" />
      <link
        rel="Stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      />
    </head>

    <body class="signUp-form">
      <form action="userSignUp.php" method="post" class="signUp-form">
        <h2>SIGN UP</h2>

        <label>First Name</label><br />
        <input type="text" name="firstName" placeholder="First Name" /><br />

        <label>Last Name</label><br />
        <input type="text" name="lastName" placeholder="Last Name" /><br />

        <label>Email</label><br />
        <input type="text" name="email" placeholder="Email" /><br />

        <label>Username</label><br />
        <input type="text" name="userName" placeholder="Username" /><br />

        <label>Password</label><br />
        <input
          type="password"
          name="userPassword"
          placeholder="Password"
        /><br />
        <label>Re-Enter Password</label><br />
        <input
          type="password"
          name="userPasswordRE"
          placeholder="Password"
        /><br />
        <?php if (isset($_GET['error'])) { 
          ?>
     		<p class="error" style="font-size:small; text-align: center"><?php echo $_GET['error']; ?></p>
        <?php } ?> 
        <?php if (isset($_GET['success'])) { ?>
          <p class="error" style="font-size:small; text-align: center"><?php echo $_GET['success']; ?></p>
        <?php } ?>

        <div>
          <a href="main.php"
            ><img class="logo" src="design/graphic/Sprite-Logo.png"
          /></a>
        </div>

        <button type="submit">SIGN UP</button>
      </form>
    </body>
  </html>
</html>
