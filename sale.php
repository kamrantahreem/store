<?php
session_start();
if(!isset($_SESSION['email'])){
    header("location: login.php");
    exit;
}

?>
<?php
include "connect.php";
$result = mysqli_query($conn, "SELECT * FROM store LIMIT 1");

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
.bg{
    background-image: url(bg.jpeg);
    background-position: center;
    background-size: cover;
    height: 250px;
    background-blend-mode: multiply;
    background-color: rgba(0, 0, 0, 0.6);
}
.font{
    font-size: 50px !important;
    padding-bottom: 30px;
    padding-top: 10px;
}
.bgg{
    background-color: whitesmoke;
}
.text{
    color: black;
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
<div class="container-fluid bg">
    <div class="row d-flex text-center align-items-center h-100">
        <div class="col-md-2"></div>
     <div class="col-md-8 media" id="ani">
        <h6 class="text-warning ani1">Up to 70% OFF</h6>
        <h1 class="text-white font  fw-bold ani2">Winter Sale</h1>
       
     <div class="col-md-2"></div>
</div>
</div>
</div>
<section class="py-5 bg-light">
  <div class="container d-flex justify-content-between align-items-center">
    <h2 class="fw-bold w-100 text-center">Sale</h2>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <div class="row" id="productGrid">
    
     <?php while($p = mysqli_fetch_assoc($result)){ ?>
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm">

            <img src="<?= $p['image'] ?>" class="card-img-top" alt="Product Image" style="height:300px; object-fit:cover;">

            <div class="card-body text-center">
              <h5 class="card-title">
                <?= $p['title'] ?>
                <a href="fetchbyid.php?id=<?= $p['id'] ?>">
                  <i class="fa-solid fa-info-circle small text-primary"></i>
                </a>
              </h5>

              <p class="card-text text-muted" style="font-size: 14px; height: 55px; overflow:hidden;">
                <?= $p['description'] ?>
              </p>

              <div class="d-flex justify-content-between align-items-center px-3">
               <a href="cart.php?action=add&id=<?= $p['id']; ?>" class="text-dark">
                  <i class="fa-solid fa-cart-shopping"></i>
                </a>
                <h6 class="fw-bold mb-0">$<?= $p['price'] ?></h6>
              </div>
            </div>

          </div>
        </div>
      <?php } ?>
     
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
<script>

  const sortSelect = document.getElementById('sortSelect');
  const productGrid = document.getElementById('productGrid');

  sortSelect.addEventListener('change', () => {
    let products = Array.from(productGrid.getElementsByClassName('product-card'));
    let option = sortSelect.value;

    products.sort((a, b) => {
      let priceA = parseFloat(a.dataset.price);
      let priceB = parseFloat(b.dataset.price);
      let nameA = a.dataset.name.toLowerCase();
      let nameB = b.dataset.name.toLowerCase();

      if(option === 'priceLow') return priceA - priceB;
      if(option === 'priceHigh') return priceB - priceA;
      if(option === 'nameAZ') return nameA.localeCompare(nameB);
      if(option === 'nameZA') return nameB.localeCompare(nameA);
      return 0;
    });

    
    products.forEach(p => productGrid.appendChild(p));
  });
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>