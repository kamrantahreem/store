<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login | Signup</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      
    }


    .con{
        height: 100vh;
    }
        
    .container {
   
      background: lightgray;
      overflow: hidden;
      color: black;
      position: relative;
         display: flex;
         flex-wrap: wrap;
         flex-direction: column;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      height: 100vh;
    
    }

    .tabs {
      display: flex;
      justify-content: space-around;
      background: black;
    }
@media screen and (max-width:320px) {
    .form{
            width: 309px !important;
    }
}
    .tabs button {
      flex: 1;
      padding: 12px;
      background: transparent;
      border: none;
      font-weight: 900;
      color: white;
      cursor: pointer;
      transition: 0.3s;
    }

    .tabs button.active {
      background: whitesmoke;
      color: black;
    }

    .form {
      padding: 25px;
      display: none;
    }

    .form.active {
      display: block;
          width: 366px;
      animation: slideIn 0.6s ease;
    }

    @keyframes slideIn {
      from {opacity: 0; transform: translateY(20px);}
      to {opacity: 1; transform: translateY(0);}
    }

    .form h2 {
      text-align: center;
      margin-bottom: 15px;
      color: black;
    }

    .form input {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border-radius: 8px;
      border: none;
      outline: none;
    }

    .form button {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 8px;
      background:black;
      color: white;
      font-weight: bold;
      margin-top: 10px;
      cursor: pointer;
      transition: 0.3s;
    }

    .form button:hover {
      background: lightslategray;
     
    }

    .form p {
      text-align: center;
      margin-top: 10px;
      font-size: 14px;
    }

    .form a {
      color:black;
      text-decoration: none;
      font-weight: bold;
    }
  </style>
</head>
<body>
 <div class="con">
     <div class="container">

   <form method="post">
     <div id="loginForm" class="form active">
      <h2>Login</h2>
      <input type="email" name="email" placeholder="Email" required />
      <input type="password" name="password" placeholder="Password" required />
      <?php
session_start();
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $query = "SELECT * FROM admins WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $admin = mysqli_fetch_assoc($result);

        if ($password == $admin['password']) {
            $_SESSION['admin_id'] = $admin['id'];
            $_SESSION['admin_email'] = $admin['email'];
            $_SESSION['admin_name'] = $admin['name'];

            header("location: index.php");
            exit;
        } else {
           echo "Incorrect password!";
        }

    } else {
        echo "Admin not found!";
    }
}
?>


      <button type="submit">Login</button>
    </div>
   </form>
   
  </div>

 </div>
</body>
</html>