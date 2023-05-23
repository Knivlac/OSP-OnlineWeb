# OSP-OnlineWeb 🔰

🏫 This is a school project for our Open Source class. 💻

Frontend

The goal of our project is to create a simple website, an online bookstore website which will feature a simple landing page that will display a catalogue of books to the users. There will also be "About Us" and "FAQ" sections for the bookstore. Guests and User of the website will be able to browse through the list of products, but only user will be able to purchase, so a login function page will be created. 

In the System adminstrator's side, the administrator's role is to manage product changes from price changes to adding and removing items on sale. Optionally, if we have enough time, we will add a checkout function for the user in form of a cart function and keeping the purchase history in the backend.

Database

For the database side, user and admin information will be recorded for the login. The data comprised in user table will include username and login_hash for user login, while the admin table will include admin_id and login_hash for admin login. There will also be another table for products. The data in the book table only include data used for product display such as the book's ISBN, book cover image file name, book title, author, genre, price, and description. Further functionalities are likely to be left out due to inadequate time.

Backend

The backend will be utilizing the php and javascript language and also sql using the sqlite or mysql syntax to do the communication between the database and the webpage itself. It will be ultilized to add, edit, and remove item on display, manage the login system, and add and remove users login access. The admin will have access to all of this function without needed to login to the database itself. The admin just only need to do it from the adminControl page which has all the function included.