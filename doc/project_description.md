# Project Description 🗨️🤓☝️ 

Document 🗒️: Project Goal, Functions, and Software Architecture


Update 19/05/2023 16:50 - Reducing project scope due to time constraint

1. Project Goal 🏹:

The goal of our project is to develop a simple online book shop website that provides users with a convenient platform to browse and purchase products. For this project, the products featured on the website will only be books. The website will have a user-friendly interface with a landing page displaying a catalogue of books. Additionally, the website will incorporate a login system for both users and administrators. 

The primary objectives of the project are as follows:
- Provide users with the ability to browse through the inventory of products.
- Implement a secure login functionality for users and administrators.
- Enable administrators to manage the website, including maintaining web server services, managing prices, and adding/removing items.
- Implement a cart function for users, allowing them to add products for purchase, and keeping a record of purchase history. (Uncertain)

Note: This is not a real E-commerce website. No real transactions will be involved.


2. Functionality Scope 🔎:

This website will have seperate set of features and functions for regular users and administrators.

2.1 User Functions 👤:
- Registration: Users will have the option to register on the website by providing necessary details. This information will be stored securely in the database.
- Login: Registered users can log in to the website using their login info. This will grant them access to additional features such as adding items to the cart and viewing purchase history.
- Product Browsing: Users will be able to browse through the catalogue of products available on the website. The products will be displayed with relevant information such as name, type, and price.
- Cart Function (Uncertain): Users will have the ability to add products to their cart for purchase. They can add multiple items and manage the quantities before proceeding to the checkout process.
- Purchase History (Uncertain): Users will have access to their purchase history, which will display details of previous orders and transactions.

2.2 Administrator Functions 🖥️:
- Login: Administrators will have a separate login interface to access the admin panel. This login functionality will provide additional security for administrative actions.
- Website Management: Administrators will have the authority to manage various aspects of the website, including the ability to add, update, or remove products from the catalogue and other actions.
- User Management: Administrators will be responsible for managing user accounts, including the ability to view user information and perform necessary actions such as resetting passwords or deactivating accounts.
- Order Management (Uncertain): Administrators will have access to order information, allowing them to track and manage user purchases.


3. Software Architecture 🏛️:

The software architecture of the website consists of three main the frontend, the backend, and the database.

3.1 Frontend:

The frontend component will be responsible for creating an intuitive and user-friendly interface for both users and administrators. It will utilize HTML, CSS, and JavaScript to develop the website's visual layout and functionality. 

3.2 Backend:

The backend component will handle the server-side processing of the website. It will primarily be built using PHP. The backend will communicate with the frontend to provide requested data and perform necessary operations. It will handle various functionalities of the website.

3.3 Database:

The database component will store and organize the data required for the website's functionality. It will be implemented using a relational database management system SQLite (or MySQL, not yet finalized). The database will consist of several tables, including the following:

- Users Table: This table will store user information such as user ID, name, and password (stored securely using login hash).
- Products Table: This table will contain product details, including book ID, book name, genre, and so forth.
- Cart Table (uncertain): This table will store the user's selected products in the cart.
- Purchases Table (uncertain): This table will record details about user purchases, including the user ID, product ID, purchase date, and other relevant details.
