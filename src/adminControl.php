<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="Stylesheet" href="design/style.css" />
    <link
        rel="Stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <script>
        function itemPage() {
          window.open("itemDisplay.php");
        }

        function userPage() {
          window.open("userDisplay.php");
        }

        function logOutPage() {
        	window.open("adminLogin.php");
        }
      </script>
	<title>Admin Background Control</title>
</head>
<body class="login-form" style="background-image: url("design/graphic/Sprite-BG-Admin");">
<div class="login-form">
    <div>
      	<a href="main.html"><img class="logo" src="design/graphic/Sprite-Logo.png"/></a>
    </div>
    <h2>Admin Control</h2>
    	<button onclick="itemPage()" style="margin-top: 10px;">Inventory Management</button>
    	<button onclick="userPage()" style="margin-top: 10px;">User Management</button>
    	<button onclick="logOutPage()" style="margin-top: 10px;">Log Out</button>
</div>
</body>
</html>
