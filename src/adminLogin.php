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

    <body class="login-form">
      <form class="login-form" action="adminLogin.inc.php" method="post">
        <h2>LOG IN</h2>
        <label>Admin ID</label><br />
        <input type="text" name="adminID" placeholder="ID" /><br />

        <label>Password</label><br />
        <input
          type="password"
          name="adminPassword"
          placeholder="Password"
        /><br />
        <button name="loginSubmit" type="submit">LOGIN</button>

        <?php if (isset($_GET['error'])) { 
          ?>
     		<p class="error" style="font-size:small; text-align: center"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

        <div>
          <a href="main.html"
            ><img class="logo" src="design/graphic/Sprite-Logo.png"
          /></a>
        </div>
      </form>
    </body>
  </html>
</html>
