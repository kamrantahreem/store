PHP E-commerce Store

A fully functional web-based store built with PHP and MySQL. This application provides a complete shopping experience, from browsing a diverse product catalog to secure checkout and order confirmation.

🌟 Features

Product Management: Dynamic product fetching (fetchproducts.php) and detailed views (fetchbyid.php).

Shopping Cart: robust cart system allowing users to add, view, and manage items (cart.php, view_cart.php).

User Authentication: Secure login and logout functionality for customers (login.php, logout.php).

Order Workflow: Integrated payment processing (payment.php) and success confirmation (success.php).

Admin Panel: Specialized administrative interface for managing store operations (admin.php).

Content Pages: Includes dedicated About, Contact, and Blog sections to engage customers.

🛠️ Tech Stack

Backend: PHP

Database: MySQL

Frontend: HTML5, CSS3, JavaScript

Dependency Management: Composer

📂 Project Structure



├── admin.php        # Administrative dashboard

├── shop.php         # Main product listing page

├── cart.php         # Cart logic and processing

├── connect.php      # Database connection settings

├── payment.php      # Checkout and payment gateway integration

├── success.php      # Post-purchase confirmation page

└── vendor/          # PHP dependencies (managed by Composer)

⚙️ Setup & Installation

Clone the repository:

git clone https://github.com/kamrantahreem/store.git

Database Configuration:

Create a MySQL database for the project.

Configure your credentials in connect.php.

Import the database schema (if provided as an .sql file) via phpMyAdmin.

Install Dependencies:

Ensure you have Composer installed.

Run:


composer install

Local Hosting:

Place the project folder in your local server's root directory (e.g., www for WAMP or htdocs for XAMPP).

Access the store at http://localhost/store/index.php.

🛍️ Product Categories

The store is designed to handle various fashion and lifestyle items, including:

Apparel: Dresses, Jackets, etc.

Accessories: Watches, Sunglasses, Bags.

Footwear: Sneakers and formal shoes.
