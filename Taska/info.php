<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>

    <style type="text/css">
        body{
            color: black;
            font-family: montserrat;
            background-image:linear-gradient(rgba(255, 255, 255, 0.607),rgba(255, 255, 255, 0.621)), url("depan.jpg");
        }
        nav{
            margin-top:-40px;
            width: 100%;
            height: 50px;
         }  
        nav h2{
            float: left;
            margin-top: 40px;
        }
        nav ul{
            float: right;
            margin-right: 40px;
        }
        nav ul li{
            display: inline-block;
            margin: 0 8px;
            line-height: 80px;
        }
        nav ul li a{
            color: black;
            font-size: 18px;
            text-transform: uppercase;
            border: 1px solid transparent;
            padding: 7px 10px;
            border-radius: 3px;
        }
        nav a.active,a:hover{
            border: 1px solid rgb(0, 0, 0);
            transition: .5s;
        }
        #display{
            height: 200px;
            color: black;
            background-color: lavender;
        }
        #display h1{
            margin-left: 20px;
        }
        #display h4{
            margin-left: 20px;
        }
        #history{
            height: 200px;
            color: black;
            background-color: lavenderblush;
        }
        #history h1{
            margin-left: 20px;
        }
        #history p{
            margin-left: 20px;
        }
        #reg{
            height: 200px;
            color: black;
            background-color: lightgray;
        }
        #reg h3{
            color: black;
            margin-top: 50px;
            margin-left: 300px;
        }
        #reg h4{
            margin-left:-150px;
        }
        #reg a{
            color: black;
            margin-top: 50px;
            margin-left: 550px;
        }   
    </style>    
</head>
<body>
<div class="black-fill"><br /> <br />
    <div class="container">
    	<nav class="navbar navbar-expand-lg bg-light"id="homeNav">
		    <div class="container-fluid">
		    <a class="navbar-brand">
                <h2>Kami Khalifa Genius</h2>
		    </a>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link" aria-current="page" href="home.php">Home</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active" href="info.php">Info</a>
		        </li>
		      <ul class="navbar-nav me-right mb-2 mb-lg-0">
		      	<li class="nav-item">
		          <a class="nav-link" href="registerpage.php">Register/Login</a>
		        </li>
		      </ul>
		  </div>
		    </div>
		</nav>
    </div>
</div>
    <br>
    <br>
    <br>
    <br>
    <div id="display">
        <h1>List price :</h1>
        <h4>0-1 years old : RM 450/month</h4>
        <h4>1-3 years old : RM 400/month</h4>
    </div>
    <div id="history">
        <h1>Background of Taska Kami Khalifa Genius</h1>
        <p>The owner of Taska Kami Khalifa Genius is Shaliza Rahim. Taska Kami Khalifa Genius was started since 2021.<br> There 3 babies and 10 toddlers here. And there are 4 staffs that works here.</p>
        <p>Contact Information : +6011-1194 0931 (Pn. Liza)</p>
    </div>
    <div id="reg">
        <h3>Are you interested in registering your children to Taska Kami Khalifa Genius ?</h3>
        <h4><a href="registerpage.php">Please log in before register your children. Click Here to Log in !</a></h3>
        <a href="registerchildren.php">Register Children</a>
    </div>
</body>
</html>