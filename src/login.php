<!DOCTYPE html>
<html lang="en">
  <html>
    <head>
      <link rel="Stylesheet" href="design/style.css" />
      <link
        rel="Stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      />
      <script>
        function signUpPage() {
          window.open("signUp.php");
        }
      </script>
    </head>

    <body class="login-form">
      <form action="userLogin.php" method="post" class="login-form">
        <h1></h1>
        <h2>LOG IN</h2>
        <label>User Name</label><br />
        
        <input type="text" name="userName" placeholder="User Name" /><br />

        <label>Password</label><br />
        <input
          type="password"
          name="userPassword"
          placeholder="Password"
        /><br />
        <button name="loginSubmit" type="submit">LOGIN </button>

        <?php if (isset($_GET['error'])) { 
          ?>
     		<p class="error" style="font-size:small; text-align: center"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

        <hr />

        <h2>Not a member?</h2>

        <button name="signup" onclick="signUpPage()">SIGN UP</button>

        <div>
          <a href="main.php"
            ><img class="logo" src="design/graphic/Sprite-Logo.png"
          /></a>
        </div>

        <a class="adminLogin" href="adminLogin.php">Admin Login</a>
      </form>
    </body>
  </html>
</html>
