<!-- <?php include 'purchaseHistory.php'?> -->
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

        <form action="" class="search-form">
          <input
            type="search"
            name=""
            placeholder="Search for..."
            id="search-box"
          />
          <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="login">
          <a href="
            <?php 
              session_start();
              if ($_SESSION['sess'] != "SESS"){
                echo "userLogin.php";
              } else {
                echo "userLogout.php";
              }
            ?>
          ">
            <?php 
              if ($_SESSION['sess'] != "SESS"){
                echo "Login";
              } else {
                echo "Logout";
              }
            ?>
          </a>
          <div id="login-btn" class="fas fa-user"></div>
        </div>
      </div>

      <div class="header-2">
        <nav class="navbar">
          <a href="#Books">Books</a>
          <a href="#About Us">About Us</a>
          <a href="#FAQ">FAQ</a>
        </nav>
      </div>
    </header>

    <!--books section-->
    <section class="books" id="Books">
      <br />
      <h1 class="heading">Books</h1>
      <div class="books-slider">
        <div class="wrapper">
          <?php 
            $sql = "SELECT * FROM booknew";
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

    <!--about us section-->
    <section class="aboutus" id="About Us">
      <br />
      <h1 class="heading">About Us</h1>
      <div class="amogus">
        <p>
          Welcome to  Bookzone, where the enchantment of reading comes alive. With a deep-rooted passion
          for literature, we embarked on a journey to create a haven for book lovers of all ages. Founded
          in 2023 by a group of students in Tamkang University,  Bookzone has blossomed into a cherished 
          destination for literary enthusiasts. Our mission is to ignite the love for books and provide 
          a curated collection that inspires, educates, and entertains. As ardent advocates of the written
          word, our knowledgeable booksellers are always ready to guide you through our extensive selection,
          ensuring you find the perfect literary companion. From bestsellers to hidden gems, we carefully 
          curate our shelves to offer an unparalleled range of genres, catering to diverse interests and tastes.
          We pride ourselves on our warm and welcoming atmosphere, where you can lose yourself in the pages of a 
          new adventure or join fellow book lovers for engaging author events and thought-provoking book clubs. 
          At  Bookzone, we believe that books have the power to transform lives, foster imagination, and connect communities. 
          We invite you to explore the magic of literature with us and embark on a journey of endless discovery.
        </p>
      </div>
    </section>

    <!--faq section-->
    <section class="FAQ" id="FAQ">
      <br />
      <h1 class="heading">FAQ</h1>
      <div class="que">
        <h3>Q1. How do I place an order?</h3>
        <br />
        <p>Ordering from our online bookstore is simple. Browse our collection by using the search bar or exploring our categories.
          Once you find a book you'd like to purchase, click on the "Add to Cart" button. Review the items in your cart, proceed to 
          checkout, and follow the prompts to provide your shipping and payment information. Once your order is confirmed, we'll take care of the rest!</p>
      </div>
      <br /><br />
      <div class="que">
        <h3>Q2. What payment methods do you accept?</h3>
        <br />
        <p>We accept major credit cards, including Visa, Mastercard, American Express, and Discover. We also offer the convenience of PayPal as a payment option during checkout.</p>
      </div>
      <br /><br />
      <div class="que">
        <h3>Q3. How long does shipping take?</h3>
        <br />
        <p>Shipping times vary based on your location and the shipping method selected. We strive to process and ship orders within 1-2 business days.
          Standard shipping within the United States usually takes 3-7 business days, while international shipping can take up to 2-4 weeks. During peak
          seasons or holidays, there may be slight delays, but we'll always do our best to ensure your order reaches you promptly.</p>
      </div>
       <br /><br />
      <div class="que">
        <h3>Q4. Can I track my order?</h3>
        <br />
        <p>Yes, absolutely! Once your order is shipped, you will receive a confirmation email with a tracking number. You can use this tracking number to
          monitor the progress of your shipment on our website or through the carrier's tracking portal.</p>
      </div>
      <br /><br />
      <div class="que">
        <h3>Q5. What if I receive a damaged or incorrect book?</h3>
        <br />
        <p>We take great care in packaging your order to ensure it arrives in pristine condition. However, if you receive a damaged or incorrect book, 
          please contact our customer support within 7 days of receiving your order. We'll work with you to resolve the issue and provide a replacement 
          or refund as necessary.</p>
      </div>
      <br /><br />
      <div class="que">
        <h3>Q6. Can I cancel or modify my order?</h3>
        <br />
        <p>We aim to process orders quickly, but if you need to cancel or modify your order, please contact us as soon as possible. If your order has not been shipped, 
          we'll do our best to accommodate your request. However, once an order is shipped, we cannot make changes or cancel it. In such cases, you may need to return 
          the item following our return policy.</p>
      </div>
      <br /><br />
      <div class="que">
        <h3>Q7.  What is your return policy?</h3>
        <br />
        <p>We want you to be completely satisfied with your purchase. If for any reason you are not happy with your order, please contact our customer support within 
          14 days of receiving your shipment. We will provide you with instructions for returning the item in its original condition. Once we receive the returned book,
          we'll issue a refund or offer store credit, depending on your preference.</p>
      </div>
      <br /><br />
      <div class="que">
        <h3>Q8. Can I request a book that is not listed on your website?</h3>
        <br />
        <p>Absolutely! If there's a specific book you're looking for and it's not listed on our website, you can submit a book request through our Social Media.
          We'll do our best to source the book for you and provide availability and pricing information.</p>
      </div>
      <br />
    </section>
  </body>
</html>
