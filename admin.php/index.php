<?php
include "connect.php";
session_start();

// If admin is NOT logged in, redirect to admin login page
if(!isset($_SESSION['admin_email'])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Store Admin Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
   
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: #eef1f5;
    }

    .dashboard {
      display: flex;
      min-height: 100vh;
    }


    .sidebar {
      width: 240px;
      background: #1e1f26;
      color: #fff;
      padding: 25px 20px;
      position: fixed;
      height: 100vh;
      box-shadow: 4px 0px 15px rgba(0, 0, 0, 0.2);
    }

    .sidebar h2 {
      margin-bottom: 30px;
      text-align: center;
      font-weight: 600;
      letter-spacing: 1px;
      font-size: 22px;
    }

    .sidebar ul {
      list-style: none;
      padding: 0;
    }

    .sidebar ul li {
      margin: 18px 0;
    }

    .sidebar ul li a {
      color: #cfd2d6;
      text-decoration: none;
      padding: 12px 15px;
      display: block;
      border-radius: 8px;
      font-size: 15px;
      transition: .3s ease;
    }

    .sidebar ul li a:hover {
      background: #343746;
      color: #fff;
    }

    .main {
      flex: 1;
      padding: 20px 40px;
      margin-left: 240px;
    }

   
    .topbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
      padding: 15px 25px;
      border-radius: 12px;
      margin-bottom: 25px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }

    .topbar h1 {
      margin: 0;
      font-size: 24px;
      font-weight: 600;
    }

    .profile {
      background: #6777ef;
      padding: 10px 15px;
      border-radius: 30px;
      color: #fff;
      font-weight: 500;
      font-size: 14px;
      box-shadow: 0 3px 10px rgba(103, 119, 239, .3);
    }

    
    .cards {
      display: flex;
      gap: 25px;
      margin-bottom: 35px;
    }

    .card {
      flex: 1;
      background: #fff;
      padding: 25px;
      text-align: center;
      border-radius: 14px;
      box-shadow: 0px 4px 18px rgba(0,0,0,0.1);
      transition: 0.3s;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0px 6px 20px rgba(0,0,0,0.15);
    }

    .card h3 {
      margin-bottom: 10px;
      color: #444;
      font-size: 18px;
      font-weight: 600;
    }

    .card p {
      font-size: 28px;
      font-weight: 700;
      color: #6777ef;
      margin: 0;
    }

   
    .table-section {
      background: #fff;
      padding: 25px;
      border-radius: 14px;
      box-shadow: 0px 4px 18px rgba(0,0,0,0.1);
    }

    .table-section h2 {
      margin-bottom: 15px;
      font-size: 20px;
      font-weight: 600;
      color: #333;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    thead {
      background: #6777ef;
      color: #fff;
    }

    th, td {
      padding: 12px 14px;
      text-align: left;
      border-bottom: 1px solid #eee;
      font-size: 15px;
    }

    tbody tr:hover {
      background: #f3f4ff;
      transition: .2s;
    }


    @media (max-width: 900px) {
      .cards {
        flex-direction: column;
      }
      .sidebar {
        position: relative;
        width: 100%;
        height: auto;
      }
      .main {
        margin-left: 0;
        padding: 20px;
      }
    }
  </style>
</head>

<body>
  <div class="dashboard">

   
    <aside class="sidebar">
      <h2>Admin Panel</h2>

      <ul>
        <li><a href="index.php">Dashboard</a></li>
        <li><a href="products.php">Add Products</a></li>
        <li><a href="manage_products.php">Manage Products</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </aside>

   
    <main class="main">

     
      <header class="topbar">
        <h1>Dashboard <span>  <a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket fs-5 text-dark"></i></a></span></h1>
        
        <div class="profile">Admin | Store</div>
      </header>

     
      <section class="cards">
        <div class="card">
          <h3>Products</h3>
          <p>3</p>
        </div>

        <div class="card">
          <h3>Orders</h3>
          <p>3</p>
        </div>

        <div class="card">
          <h3>Users</h3>
          <p>3</p>
        </div>
      </section>

      
      <section class="table-section">
        <h2>Recent Orders</h2>

        <table>
          <thead>
            <tr>
              <th>#</th>
              <th>Customer</th>
              <th>Product</th>
              <th>Status</th>
            </tr>
          </thead>

          <tbody>
            <tr><td>1</td><td>Ali</td><td>Shoes</td><td>Delivered</td></tr>
            <tr><td>2</td><td>Sara</td><td>Bag</td><td>Pending</td></tr>
          </tbody>
        </table>
      </section>

    </main>

  </div>
</body>
</html>
