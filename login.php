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
    <div class="tabs">
      <button id="loginTab" class="active">Login</button>
      <button id="signupTab">Signup</button>
    </div>

   <form method="post">
     <div id="loginForm" class="form active">
      <h2>Login</h2>
      <input type="email" name="email" placeholder="Email" required />
      <input type="password" name="password" placeholder="Password" required />
      <?php
include "connect.php";
session_start();
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn,"SELECT * FROM logins WHERE email='$email' AND password= '$password'");
    if(mysqli_num_rows($result)>0){
        $_SESSION['email'] = $email;
        header("location: index.php");
        exit;
    }else{
        echo "invalid username or password";
    }
}
?>
      <button type="submit">Login</button>
      <p>Don’t have an account? <a href="#" id="goSignup">Signup</a></p>
    </div>
   </form>
   

   <form action="login.php" method="post">
     <div id="signupForm" class="form">
      <h2>Signup</h2>
      <input type="text" name="name" placeholder="Full Name" required />
      <input type="email" name="email" placeholder="Email" required />
      <input type="password"name="password" placeholder="Password" required />
      <?php
include "connect.php";
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


$query = "INSERT INTO logins(name,email,password)VALUES('$name','$email','$password')";
mysqli_query($conn,$query);
echo "inserted";

}
?>
      <button type="submit" name="submit">Signup</button>
      <?php ?>
      <p>Already have an account? <a href="#" id="goLogin">Login</a></p>
    </div>
   </form>
   
  </div>

 </div>
  <script>
    const loginTab = document.getElementById("loginTab");
    const signupTab = document.getElementById("signupTab");
    const loginForm = document.getElementById("loginForm");
    const signupForm = document.getElementById("signupForm");
    const goSignup = document.getElementById("goSignup");
    const goLogin = document.getElementById("goLogin");

   
    loginTab.addEventListener("click", () => {
      loginForm.classList.add("active");
      signupForm.classList.remove("active");
      loginTab.classList.add("active");
      signupTab.classList.remove("active");
    });

    signupTab.addEventListener("click", () => {
      signupForm.classList.add("active");
      loginForm.classList.remove("active");
      signupTab.classList.add("active");
      loginTab.classList.remove("active");
    });

   
    goSignup.addEventListener("click", (e) => {
      e.preventDefault();
      signupTab.click();
    });

    goLogin.addEventListener("click", (e) => {
      e.preventDefault();
      loginTab.click();
    });
  </script>
</body>
</html>