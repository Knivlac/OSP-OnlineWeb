<?php

error_reporting(E_ALL ^ E_WARNING); 

$con = mysqli_connect("localhost","root","","bookzone");

$title = $_GET['title'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book Zone</title>
    <link rel="Stylesheet" href="design/style.css" />
    <link
      rel="Stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
  </head>
  <body>
    <script src="design/script.js"></script>
    <header class="header">
      <div class="header-1">
        <div class="logo">
          <img src="design/graphic/Sprite-Logo.png" />
        </div>
        <h2>Showing Search Result</h2>
      </div>
    </header>

    <!--books section-->
    <section class="books" id="Books">
      <br />
      <h1 class="heading">Books</h1>
      <div class="books-slider">
        <div class="wrapper">
          <?php 
            $sql = "SELECT * FROM booknew WHERE title LIKE '%$title%'";
            $query = mysqli_query($con,$sql);
            $row = mysqli_num_rows($query);

            for ($i=0; $i < $row; $i++) { 
            $result = mysqli_fetch_array($query);
            $ISBN = $result['ISBN'];
            $title = $result['title'];
            $author = $result['author'];
            $price = $result['price'];
            $genre = $result['genre'];
            $description = $result['description'];
            $cover = $result['cover'];
          ?>
          <div class="box">
            <img src="design/graphic/<?php echo $cover ?>" />
            <div class="content">
              <h3><?php echo $title ?></h3>
              <br />
              <div class="details">
                <span>Author: <?php echo $author ?></span><br />
                <span>Genre: <?php echo $genre ?></span><br />
                <span>ISBN: <?php echo $ISBN ?></span><br />
                <span>Price: <?php echo $price ?> NTD</span><br /><br /><br />
                <p><?php echo $description ?></p>
              </div>
              <a href="#" class="btn">Purchase</a>
            </div>
          </div>
          <br /><br /><br />
        <?php } ?>
        </div>
      </div>
    </section>
  </body>
</html>
