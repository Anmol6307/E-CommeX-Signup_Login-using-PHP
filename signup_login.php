<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-CommeX</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="full-page">
        <div class='navbar'>
            <div class='logo'>
                <a href='#'><h1>Welcome to E-CommeX</h1></a>
            </div>
            <nav>
                <ul id='MenuItems'>
                    <li><a href='#'>Home</a></li>
                    <li><a href='#'>Products</a></li>
                    <li><button class='loginbtn'onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</button></li>
                    <li><button class='loginbtn'onclick="document.getElementById('register-form').style.display='block'" style="width:auto;">Sign Up</button></li>
                </ul>
            </nav>
        </div>
        <div class="sub-page">
          <div class="overlay"></div>
           <div class="text">
               <p>E-CommeX Website developed by the team of: <br><b>InfoDeltaSys Software Solutions Pvt. Ltd.</b><br> Thanks to our inspiring collections and our impeccable customer service, we have been highly successful since day one. Browse through our site <br>and check out the latest additions to our collection,<br> and feel free to get in touch with our team if <br>you need any assistance.<br><b>Happy shopping...!<b></p>
            </div>
        </div>
        <div id='login-form' class="login-page">
            <div class="form-box">
                <span onclick="document.getElementById('login-form').style.display='none'" class="close">&times;</span>
                <div class="form">
                    <form class='login-form', action="validation.php", method="post">
                        <center><h1 class="main-heading">Login Form</h1></center>
				        <input type="text"name='emailid' placeholder="Email ID", required/>
				        <input type="password" name='password' placeholder="Password", required/>
				        <button>LOGIN</button>
				    </form>
                </div>
            </div>
        </div>
        <div id="register-form" class='register-page'>
            <div class="form-box1">
               <span onclick="document.getElementById('register-form').style.display='none'" class="close">&times;</span>
                <div class="form1">
                    <form class='register-form', action="registration.php", method="post">
                        <center><h1 class="main-heading">Sign Up Form</h1></center>
				        <input type="text" name='user'placeholder="User Name" required/>
				        <input type="text" name='emailid'placeholder="Email Address" required/>
				        <input type="password"name='password' placeholder="Password" required/>
				        <button>SIGN-UP</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>