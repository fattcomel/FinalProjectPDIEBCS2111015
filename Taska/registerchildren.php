<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $age = $_POST['age'];
   $icno = $_POST['icno'];
   $allergies = $_POST['allergies'];

   $select = " SELECT * FROM child_form WHERE name = '$name' && icno = '$icno' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'User already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'Password not matched!';
      }else{
         $insert = "INSERT INTO child_form(name, age, icno, allergies) VALUES('$name','$age','$icno','$allergies')";
         mysqli_query($conn, $insert);
         header('location:homeP.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register Children</title>

   <style type="text/css">

         nav{
            margin-top:-60px;
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
        }  

      {
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
}

.container{
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
   padding-bottom: 60px;
}

.container .content{
   text-align: center;
}

.container .content h3{
   font-size: 30px;
   color:#333;
}

.container .content h3 span{
   background: crimson;
   color:#fff;
   border-radius: 5px;
   padding:0 15px;
}

.container .content h1{
   font-size: 50px;
   color:#333;
}

.container .content h1 span{
   color:crimson;
}

.container .content p{
   font-size: 25px;
   margin-bottom: 20px;
}

.container .content .btn{
   display: inline-block;
   padding:10px 30px;
   font-size: 20px;
   background: #333;
   color:#fff;
   margin:0 5px;
   text-transform: capitalize;
}

.container .content .btn:hover{
   background: crimson;
}

.form-container{
   min-height: 100vh;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
   padding-bottom: 60px;
   background: #eee;
}

.form-container form{
   padding:20px;
   border-radius: 5px;
   box-shadow: 0 5px 10px rgba(0,0,0,.1);
   background: #fff;
   text-align: center;
   width: 500px;
}

.form-container form h3{
   font-size: 30px;
   text-transform: uppercase;
   margin-bottom: 10px;
   color:#333;
}

.form-container form input,
.form-container form select{
   width: 400px;
   padding:10px 15px;
   font-size: 17px;
   margin:8px 0;
   background: #eee;
   border-radius: 5px;
}

.form-container form select option{
   background: #fff;
}

.form-container form .form-btn{
   background: #fbd0d9;
   color:crimson;
   text-transform: capitalize;
   font-size: 20px;
   cursor: pointer;
}

.form-container form .form-btn:hover{
   background: crimson;
   color:#fff;
}

.form-container form p{
   margin-top: 10px;
   font-size: 20px;
   color:#333;
}

.form-container form p a{
   color:crimson;
}

.form-container form .error-msg{
   margin:10px 0;
   display: block;
   background: crimson;
   color:#fff;
   border-radius: 5px;
   font-size: 20px;
   padding:10px;
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
		          <a class="nav-link" href="info.php">Info</a>
		        </li>
		      <ul class="navbar-nav me-right mb-2 mb-lg-0">
		      	<li class="nav-item">
		        </li>
		      </ul>
		  </div>
		    </div>
		</nav>
    </div>
</div>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register children</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="Enter name">
      <input type="text" name="age" required placeholder="Enter age">
      <input type="text" name="icno" required placeholder="Enter IC Number">
      <input type="text" name="allergies" required placeholder="Allergies">
      <input type="submit" name="submit" value="register children" class="form-btn">
   </form>

</div>

</body>
</html>