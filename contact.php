<?php
session_start();
if(!isset($_SESSION['email'])){
    header("location: login.php");
    exit;
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Store One</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *{
            box-sizing: border-box;
            font-family: 'Times New Roman', Times, serif;
            
          
        }
        .fa-brands{
            color: gray;
            font-size: 13px;
            
           
        }
       
        .fa-brands:hover{
            color: black;
        }
        .color{
            color: black;
        }
       @media (max-width: 991px) {
 
  #navbarNav .navbar-nav {
    text-align: center;
    width: 100%;
  }

 
  .navbar-collapse {
    flex-grow: 1;
    justify-content: center !important;
  }
}
.bgg{
    background-color: whitesmoke;
}
.text{
    color: black;
}
.contact-info i {
      color: gray;
      margin-right: 10px;
    }
    .form-control, .form-label {
      font-size: 0.9rem;
    }
    .text{
    color: black;
}
@media screen and (max-width:991px) {
  .fa-solid{
    color: black;
  }
}
@media screen and (max-width:425px) {
  .bb{ font-size: 30px !important;

  }
 
}
@media screen and (max-width:320px) {
  .fa-solid{
    color: black;
    font-size: 14px !important; 
  }
}
    </style>
  </head>
  <body>

<nav class="navbar bg-light py-2">
  <div class="container d-flex justify-content-between align-items-center">

    <!-- Social Icons -->
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://pk.linkedin.com/"><i class="fa-brands fa-linkedin"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://x.com/"><i class="fa-brands fa-x-twitter"></i></a>
      </li>
    </ul>

    <!-- Text Section -->
    <div class="d-flex align-items-center">
      <p class="m-0 me-3 text-success">Free shipping for orders over $100</p>
    </div>

  </div>
</nav>

<nav class="navbar navbar-expand-lg bg-body-secondary py-3 sticky-top">
  <div class="container">

   
    <a class="navbar-brand fs-3 bb" href="index.php">StoreOne</a>

    <div class="d-flex align-items-center ms-auto d-lg-none gap-3">
      <a href="login.php"><i class="fa-solid fa-circle-user fs-5"></i></a>
      <a href="cart.php"><i class="fa-solid fa-cart-shopping fs-5"></i></a>
       <a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket fs-5 color"></i></a>
       
        
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarNav" aria-controls="navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <div class="navbar-nav gap-3 justify-content-center w-100">
        <a class="nav-link active" href="index.php">Home</a>
        <a class="nav-link" href="shop.php">Shop</a>
        <a class="nav-link text-warning fw-semibold" href="sale.php">Sale</a>
        <a class="nav-link" href="about.php">About</a>
        <a class="nav-link" href="contact.php">Contact</a>
        
      </div>
  
      <div class="d-none d-lg-flex align-items-center gap-4 ms-auto">
       <p class="text-success small"><?php echo $_SESSION['email']; ?></p>
        <a href="login.php"><i class="fa-solid fa-circle-user fs-5 color"></i></a>
        <a href="cart.php"><i class="fa-solid fa-cart-shopping fs-5 color"></i></a>
        <a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket fs-5 color"></i></a>
        <a href="admin.php"><i class="fa-solid fa-toolbox fs-5 color"></i></a>
      </div>
    </div>

  </div>
</nav>

<section class="py-5">
  <div class="container">
    <div class="row g-5">

    
      <div class="col-md-6">
        <h2 class="mb-4">Get in Touch</h2>
        <form action="submit.php" method="post">
          <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Your Email" required>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea name="message" id="message" rows="5" class="form-control" placeholder="Your Message" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">Send Message</button>
        </form>
      </div>

      
      <div class="col-md-6 contact-info">
        <h2 class="mb-4">Store Info</h2>
        <ul class="list-unstyled">
          <li class="mb-3"><i class="fas fa-map-marker-alt"></i>123 Market St, Multan, Punjab, Pakistan</li>
          <li class="mb-3"><i class="fas fa-phone-alt"></i>+92 300 1234567</li>
          <li class="mb-3"><i class="fas fa-envelope"></i>support@storeone.com</li>
        </ul>
        <div class="ratio ratio-4x3">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.123456789!2d71.524918!3d30.157456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393c5f123456789%3A0xabcdef123456789!2sMultan%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1600000000000" 
            style="border:0;" allowfullscreen="" loading="lazy">
          </iframe>
        </div>
      </div>

    </div>
  </div>
</section>
<footer class="bgg pt-5 pb-4 container-fluid">
    <div class="row gy-4 gx-0">

      
      <div class="col-md-3 p-0">
        <h4 class="text-uppercase fw-bold">Store<span class="one">One</span></h4>
        <p class="small">Your one-stop shop for fashion, accessories, and lifestyle essentials — delivered with care.</p>
        <div class="mt-3">
          <a href="#" class="text me-3 fs-5"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text me-3 fs-5"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text fs-5"><i class="fab fa-youtube"></i></a>
        </div>
      </div>

      <div class="col-md-3 p-0">
        <h5 class="text-uppercase mb-3">Customer Care</h5>
        <ul class="list-unstyled small">
          <li><a href="#" class="text-dark text-decoration-none">Shipping & Returns</a></li>
          <li><a href="#" class="text-dark text-decoration-none">FAQs</a></li>
          <li><a href="#" class="text-dark text-decoration-none">Track Order</a></li>
          <li><a href="#" class="text-dark text-decoration-none">Size Guide</a></li>
          <li><a href="#" class="text-dark text-decoration-none">Contact Support</a></li>
        </ul>
      </div>

    
      <div class="col-md-3 p-0">
        <h5 class="text-uppercase mb-3">Shop Categories</h5>
        <ul class="list-unstyled small">
          <li><a href="#" class="text-dark text-decoration-none">Men</a></li>
          <li><a href="#" class="text-dark text-decoration-none">Women</a></li>
          <li><a href="#" class="text-dark text-decoration-none">Accessories</a></li>
          <li><a href="#" class="text-dark text-decoration-none">Sale</a></li>
        </ul>
      </div>

   
      <div class="col-md-3">
        <h5 class="text-uppercase mb-3">Store Info</h5>
        <ul class="list-unstyled small">
          <li class="mb-2">
            <i class="fas fa-map-marker-alt me-2 text"></i>
            123 Market St, Multan, Punjab, Pakistan
          </li>
          <li class="mb-2">
            <i class="fas fa-phone-alt me-2 text"></i>
            +92 300 1234567
          </li>
          <li>
            <i class="fas fa-envelope me-2 text"></i>
            support@storeone.com
          </li>
        </ul>
      </div>

    </div>
 

 
  <div class=" pt-5">
    <p class="text-center small">© All Rights Reserved. Designed and Created by Tahreem</p>
  </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>