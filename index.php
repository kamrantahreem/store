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

 .navbar-expand-lg{
    z-index: 999999 !important;
 }
  .navbar-collapse {
    flex-grow: 1;
    justify-content: center !important;
  }
}
.bg{
    background-image: url(bg.jpeg);
    background-position: center;
    background-size: cover;
    height: 550px;
    background-blend-mode: multiply;
    background-color: rgba(0, 0, 0, 0.6);
}
.font{
    font-size: 80px !important;
    padding-bottom: 30px;
    padding-top: 10px;
}
.ani1 {
    animation: slideup  linear 1s;
}
@keyframes slideup {
    0% {
        transform: translateY(50px);
    }
   
    100%{
        transform: translateY(0);
    }
}
.ani2 {
    animation: bounce forwards ease-in-out 2s;
}
@keyframes bounce {
    0% {
       transform: translateY(30px);
    }
   
    100%{
        transform: translateY(0px);
    }
}
.ani3:hover{
transform: scale(1.1) !important;
transition: all ease-in-out 1s;
}
@media screen and (max-width:768px){
    .media{
       h1{
            font-size: 30px !important;
        }
    }
}
.flex{
    background-image: url(shoes.png);
    background-position: center;
    background-size: cover;
   height: 350px;
   background-clip: image;
}
.flex1{
    background-image: url(watch.png);
    background-position: center;
    background-size: cover;
   height: 350px;
}
.flex2{
    background-image: url(sunglas.png);
    background-position: center;
    background-size: cover;
   height: 250px;
}
.flex3{
    background-image: url(dress.png);
    background-position: center;
    background-size: cover;
    
   height: 450px;
}
.flex4{
    background-image: url(bag.png);
    background-position: center;
    background-size: cover;
   height: 350px;
}
.flex5{
   background-color: rgb(158, 158, 158);
   height: 350px;
   color: aliceblue;
   
}
.link{
    text-decoration: none !important;
}
.pose{
    background-image: url(pose.png);
    background-position: center;
    background-size: cover;
    height: 600px;
    background-color: rgba(0, 0, 0, 0.3);
    background-blend-mode: multiply;
}
.size{
    h6{
        font-size: 30px !important;
    }
    h1{
        font-size: 60px !important;
    }
    p{
        font-size: 20px !important;
    }
}
.hh{
    height: 300px !important;
}
.countdown div{
    border: 1px solid;
    font-size: 20px;
    padding: 10px;
    color: gray;
}
.v a{
    color: goldenrod !important;
}
.bgg{
    background-color: whitesmoke;
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

    <!-- Logo -->
    <a class="navbar-brand fs-3 bb" href="index.php">StoreOne</a>

    <!-- Icons + Toggler Container -->
    <div class="d-flex align-items-center ms-auto d-lg-none gap-3">
      <a href="login.php"><i class="fa-solid fa-circle-user fs-5"></i></a>
      <a href="cart.php"><i class="fa-solid fa-cart-shopping fs-5"></i></a>
       <a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket fs-5 color"></i></a>
       
        
      
      <!-- Toggler (always last) -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarNav" aria-controls="navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <div class="navbar-nav gap-3 justify-content-center w-100">
        <a class="nav-link active" href="index.php">Home</a>
        <a class="nav-link" href="shop.php">Shop</a>
          <a class="nav-link text-warning fw-semibold" href="sale.php">Sale</a>
        <a class="nav-link" href="about.php">About</a>
        <a class="nav-link" href="contact.php">Contact</a>
        
      </div>
      <!-- Icons for large screens -->
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
<div class="container-fluid bg">
    <div class="row d-flex text-center align-items-center h-100">
        <div class="col-md-2"></div>
     <div class="col-md-8 media" id="ani">
      <p class="text-light vis pb-3 fs-5 d-md-none"><span class="text-warning">Welcome </span><?php echo $_SESSION['email']; ?></p>
        <h6 class="text-warning ani1">New Collection 2025</h6>
        <h1 class="text-white font  fw-bold ani2">New Arrivals</h1>
        <a href="shop.php" ><button type="button" class="btn btn-light px-5 rounded-pill ani3">Shop Now</button></a>
     </div>
     <div class="col-md-2"></div>
</div>
</div>
<div class="contaiiner py-5">
    <div class="row g-4">
        <div class="col-md-4 d-flex flex-column gap-4">
           <div class="flex">
            <a href="shop.php" class="d-flex justify-content-center align-items-end h-100 link" ><button type="button" class="btn btn-light px-5 my-2 fs-5 ">Footwear</button></a>
           </div>
           <div class="flex1">
            <a href="shop.php" class="d-flex justify-content-center align-items-end h-100 link" ><button type="button" class="btn btn-light px-5 my-2 fs-5 ">Watches</button></a>
           </div>
        </div>
        <div class="col-md-4 d-flex flex-column gap-4">
            <div class="flex2">
                <a href="shop.php" class="d-flex justify-content-center align-items-end h-100 link" ><button type="button" class="btn btn-light px-5 my-2 fs-5 ">Sunglasses</button></a>
            </div>
            <div class="flex3">
                 <a href="shop.php" class="d-flex justify-content-center align-items-end h-100 link" ><button type="button" class="btn btn-light px-5 my-2 fs-5 ">Dresses</button></a>
            </div>
        </div>
        <div class="col-md-4 d-flex flex-column gap-4">
         <div class="flex4">
            <a href="shop.php" class="d-flex justify-content-center align-items-end h-100 link" ><button type="button" class="btn btn-light px-5 my-2 fs-5 ">Dresses</button></a>
         </div>
           <div class="flex5 d-flex justify-content-center flex-column align-items-center p-2">
            <h2>Sign up & get 20% off</h2>
            <p class="text-center py-3">Be the frist to know about the latest fashion news and get exclusive offers</p>
             <a href="login.php" ><button type="button" class="btn btn-dark px-5 my-2">Sign Up</button></a>
        </div>
    </div>
</div>
<div class="container my-5 text-center py-5">
    <div class="row">
        <h1>Featured Products</h1>
        <div class="col-md-12 py-5">
              <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

        
          <div class="carousel-item active">
            <div class="row justify-content-center g-3">
              <div class="col-md-4">
                <div class="card">
                      <img src="bag1.png" class="img-fluid object-fit-cover" alt="Guest 1">

                  <div class="card-body">
                    <p class="card-text fw-bold fs-5">Herschel Supply bag</p>
                    <span class="d-flex justify-content-around"><a href="cart.php"><i class="fa-solid fa-cart-shopping color"></i></a>&nbsp;<h6 class=" fw-bold">$75.00</h6></span>
                  </div>
                </div>
              </div>
             <div class="col-md-4">
                <div class="card ">
                      <img src="watch1.png" class="img-fluid object-fit-cover" alt="Guest 1">

                  <div class="card-body">
                    <p class="card-text fw-bold fs-5">Rolex Watch</p>
                    <span class="d-flex justify-content-around"><a href="cart.php"><i class="fa-solid fa-cart-shopping color"></i></a>&nbsp;<h6 class=" fw-bold">$125.00</h6></span>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                      <img src="jj.png" class="img-fluid object-fit-cover" alt="Guest 1">

                  <div class="card-body">
                    <p class="card-text fw-bold fs-5">Denim Jacket</p>
                   <span class="d-flex justify-content-around"><a href="cart.php"><i class="fa-solid fa-cart-shopping color"></i></a>&nbsp;<h6 class=" fw-bold">$15.00</h6></span>
                  </div>
                </div>
              </div>
            </div>
          </div>

       
          <div class="carousel-item">
            <div class="row justify-content-center g-3">
              <div class="col-md-4">
                <div class="card">
                      <img src="bag1.png" class="img-fluid object-fit-cover" alt="Guest 1">

                  <div class="card-body">
                    <p class="card-text fw-bold fs-5">Herschel Supply bag</p>
                    <span class="d-flex justify-content-around"><a href="cart.php"><i class="fa-solid fa-cart-shopping color"></i></a>&nbsp;<h6 class=" fw-bold">$75.00</h6></span>
                  </div>
                </div>
              </div>
             <div class="col-md-4">
                <div class="card ">
                      <img src="watch1.png" class="img-fluid object-fit-cover" alt="Guest 1">

                  <div class="card-body">
                    <p class="card-text fw-bold fs-5">Rolex Watch</p>
                    <span class="d-flex justify-content-around"><a href="cart.php"><i class="fa-solid fa-cart-shopping color"></i></a>&nbsp;<h6 class=" fw-bold">$125.00</h6></span>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                      <img src="jj.png" class="img-fluid object-fit-cover" alt="Guest 1">

                  <div class="card-body">
                    <p class="card-text fw-bold fs-5">Denim Jacket</p>
                   <span class="d-flex justify-content-around"><a href="cart.php"><i class="fa-solid fa-cart-shopping color"></i></a>&nbsp;<h6 class=" fw-bold">$15.00</h6></span>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 pose text-white d-flex justify-content-center align-items-center flex-column size">
            <h6>The Beauty</h6>
            <h1 class="py-3">Look Book</h1>
            <p><a href="shop.php" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">View Collection</a></p>
        </div>
        <div class="col-md-6 d-flex justify-content-center align-items-center flex-column">
            <img src="sun.png" class="img-fluid pb-4 hh" alt="...">
            <h6 class=" fs-5 pb-2">Gafas sol Hawkers one</h6>
            <p class="fw-bold"><del>$29.50</del> $15.90</p>
            <div class="countdown d-flex gap-4">
  <div><span id="days">69</span> days</div>
  <div><span id="hours">11</span> hrs</div>
  <div><span id="minutes">03</span> mins</div>
  <div><span id="seconds">31</span> secs</div>
</div>

        </div>
    </div>
</div>
<div class="container my-5 text-center py-5">
    <div class="row g-4 py-5">
        <h1>Our Blog</h1>
    <div class="col-md-4">
      <div class="blog-card h-100 shadow">
        <img src="blog-01.jpg.webp" class="img-fluid rounded-top" alt="Blog 1">
        <div class="p-3">
          <small class="text-muted d-block mb-2">Admin | Dec. 23, 2020 | 3 Comments</small>
          <h5 class="fw-bold">Black Friday Guide: Best Sales & Discount Codes</h5>
          <p class="text-muted">Duis ut velit gravida nibh bibendum commodo. Sus-pendisse pellentesque mattis augue id euismod. Inter-dum et malesuada fames</p>
          <div class="v">
             <a href="">Read More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 ">
      <div class="blog-card h-100 shadow">
        <img src="blog-02.jpg.webp" class="img-fluid rounded-top" alt="Blog 2">
        <div class="p-3">
          <small class="text-muted d-block mb-2">Editor | Jan. 10, 2021 | 5 Comments</small>
           <h5 class="fw-bold">Black Friday Guide: Best Sales & Discount Codes</h5>
          <p class="text-muted">Duis ut velit gravida nibh bibendum commodo. Sus-pendisse pellentesque mattis augue id euismod. Inter-dum et malesuada fames</p>
         <div class="v">
             <a href="">Read More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 ">
      <div class="blog-card h-100 shadow">
        <img src="blog-03.jpg.webp" class="img-fluid rounded-top" alt="Blog 3">
        <div class="p-3">
          <small class="text-muted d-block mb-2">Guest | Feb. 5, 2021 | 2 Comments</small>
           <h5 class="fw-bold">Black Friday Guide: Best Sales & Discount Codes</h5>
          <p class="text-muted">Duis ut velit gravida nibh bibendum commodo. Sus-pendisse pellentesque mattis augue id euismod. Inter-dum et malesuada fames</p>
         <div class="v">
             <a href="">Read More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<div class="container">
    <div class="row text-center g-0">
        <h1 class="fw-bold py-4">@ follow us on Instagram</h1>
         <div class="col-6 col-md-3">
      <a href="#" target="_blank">
        <img src="gallery-03.jpg.webp" class="img-fluid rounded insta-img" alt="Instagram 1">
      </a>
    </div>
    <div class="col-6 col-md-3">
      <a href="#" target="_blank">
        <img src="gallery-07.jpg.webp" class="img-fluid rounded insta-img" alt="Instagram 2">
      </a>
    </div>
    <div class="col-6 col-md-3">
      <a href="#" target="_blank">
        <img src="gallery-09.jpg.webp" class="img-fluid rounded insta-img" alt="Instagram 3">
      </a>
    </div>
    <div class="col-6 col-md-3">
      <a href="#" target="_blank">
        <img src="gallery-13.jpg.webp" class="img-fluid rounded insta-img" alt="Instagram 4">
      </a>
    </div>
  </div>
    </div>
</div>
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

<script>
    const countdown = {
  days: 69,
  hours: 11,
  minutes: 3,
  seconds: 31
};

function updateDisplay() {
  document.getElementById('days').textContent = countdown.days;
  document.getElementById('hours').textContent = String(countdown.hours).padStart(2, '0');
  document.getElementById('minutes').textContent = String(countdown.minutes).padStart(2, '0');
  document.getElementById('seconds').textContent = String(countdown.seconds).padStart(2, '0');
}

function tick() {
  if (countdown.seconds > 0) {
    countdown.seconds--;
  } else {
    countdown.seconds = 59;
    if (countdown.minutes > 0) {
      countdown.minutes--;
    } else {
      countdown.minutes = 59;
      if (countdown.hours > 0) {
        countdown.hours--;
      } else {
        countdown.hours = 23;
        if (countdown.days > 0) {
          countdown.days--;
        }
      }
    }
  }
  updateDisplay();
}

updateDisplay();
setInterval(tick, 1000);

</script>
<script>
  window.addEventListener('DOMContentLoaded', () => {
    document.getElementById('ani').classList.add('animate');
  });
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>