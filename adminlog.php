<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style/log-client.css">
    <title>Log in page</title>
</head>
<body>
 <div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <p>H-otel .</p>
        </div>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="index.html" class="link active">Home</a></li>
                <li><a href="about.html" class="link">About</a></li>
            </ul>
        </div>
        <div class="nav-button">
            <button class="btn white-btn" id="loginBtn" onclick="login()"><span></span><a href="log-client.php">Client?</a></button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>

<!----------------------------- Form box ----------------------------------->    
    <div class="form-box">
        
        <!------------------- login form -------------------------->
        
        <form class="login-container" id="login" action="back-end/logadmin.php" method="post" >
            <div class="top">
                <span><a href="#" onclick="register()"></a></span>
                <header>Admin.</header>
            </div>
            <div class="input-box">
                <input type="email" class="input-field" placeholder="Your Email" name="nom">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Password" name="password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Sign In">
            </div>
            <div class="two-col">
                 <div class="one">
                     <?php
                        if (isset($_GET["msg"])) {
                            $msg = $_GET["msg"];
                            echo '<div class="wrongpas " role="alert">
                            ' . $msg . '
                            </div>';
                        }
                    ?>
                 </div>
                <div class="two">
                    <label><a href="#">Forgot password?</a></label>
                </div>
            </div>
        </form>
    </div>

    
<script>
   
    function myMenuFunction() {
     var i = document.getElementById("navMenu");
 
     if(i.className === "nav-menu") {
         i.className += " responsive";
     } else {
         i.className = "nav-menu";
     }
    }
  
 </script>
 
 <script>
 
     var a = document.getElementById("loginBtn");
     var b = document.getElementById("registerBtn");
     var x = document.getElementById("login");
     var y = document.getElementById("register");
 
     function login() {
         x.style.left = "4px";
         y.style.right = "-520px";
         a.className += " white-btn";
         b.className = "btn";
         x.style.opacity = 1;
         y.style.opacity = 0;
     }
 
     function register() {
         x.style.left = "-510px";
         y.style.right = "5px";
         a.className = "btn";
         b.className += " white-btn";
         x.style.opacity = 0;
         y.style.opacity = 1;
     }
 
 </script>



</body>


</html>