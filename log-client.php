<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
            <button class="btn white-btn" id="loginBtn" onclick="login()"><span></span>Sign In</button>
            <button class="btn" id="registerBtn" onclick="register()"><span></span>Sign Up</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>

 <!----------------------------- Form box ----------------------------------->    
    <div class="form-box">
        
        <!------------------- login form -------------------------->
        
        <form class="login-container" id="login" action="../BDD_project/back-end/client/loginCleint.php" method="POST" >
            <div class="top">
                <span>Don't have an account? <a href="#" onclick="register()">Sign Up</a></span>
                <header>Login .</header>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Email" name="email">
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
                
                <div class="two">
                    <label><a href="#">Forgot password?</a></label>
                </div>

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
            </div>
        </form>

        <!------------------- registration form -------------------------->
 <form class="register-container" id="register" action="back-end/log.php" method="POST">
    <div class="top">
        <span>Have an account? <a href="#" onclick="login()">Login</a></span>
        <header>Sign Up .</header>
    </div>
    <div class="two-forms">
        <div class="input-box">
            <input type="text" class="input-field" placeholder="Firstname" id="firstname" name="nom">
            <i class="bx bx-user"></i>
        </div>
        <div class="input-box">
            <input type="text" class="input-field" placeholder="Lastname" id="lastname"  name="prenom">
            <i class="bx bx-user"></i>
        </div>
    </div>
    <div class="input-box">
        <input type="text" class="input-field" placeholder="Email" id="email" name="email">
        <i class="bx bx-envelope"></i>
    </div>
    <div class="input-box">
        <input type="password" class="input-field" placeholder="Password" id="modpas" name="modpas">
        <i class="bx bx-lock-alt"></i>
    </div>
    <div class="input-box">
        <input type="submit" class="submit" value="Register" name="insert_client">
    </div>
    <div class="two-col">

        <div class="two">
            <label><a href="#">Terms & conditions</a></label>
        </div>
    </div>
</form>  

    </div>
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