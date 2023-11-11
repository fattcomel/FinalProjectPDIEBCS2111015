

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taska Kami Khalifa Genius</title>

    <style type="text/css">
        body{
            color: black;
            font-family: montserrat;
            background-image:linear-gradient(rgba(255, 255, 255, 0.607),rgba(255, 255, 255, 0.621)), url("depan.jpg");
        }
        nav{
            margin-top:-40px;
            font-family: montserrat;
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
        #display1{
            background:lavenderblush;
            width:400px;
            height: 300px;
            float: left;
            margin-top: 100px;
            margin-right: 20px;
            margin-left: 220px;
            color:black;
        }
        #display1 p{
            margin-left: 100px;
        }
        #display1 h3{
            margin-left:115px;
        }
        #display1 h5{
            margin-left:10px;
            margin-right:10px;
        }
        #display2{
            background:lavenderblush;
            width: 400px;
            height:300px;
            float:right;
            margin-top:80px;
            margin-right:200px;
            color:black;
        }
        #display2 p{
            margin-left: 100px;
        }
        #display2 h3{
            margin-left:140px;
        }
        #display2 h5{
            margin-left:10px;
            margin-right:10px;
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
		          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="info.php">Info</a>
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

    <div id="display1">
        <p><img src="taska1.jpg" width="200px" height="150px"></p>
        <h3>Swimming Time</h3>
        <h5>Aktiviti paling digemari oleh kanak-kanak di sini. Anak-anak dapat bermain dengan bebas</h5>
    </div>
    <div id="display2">
        <p><img src="taska3.jpg" width="200px" height="150px"></p>
        <h3>Celebration</h3>
        <h5>Sambutan Hari Raya, Birthday Party bersama guru-guru, ibubapa dan murid-murid.</h5>
    </div>
</body>
</html>