<?php  
 //Database connectivity  
 $con=mysqli_connect('localhost','root','','taska_db');  
 $sql=mysqli_query($con,"select * from child_form");  
 //Get Update id and status  
 if (isset($_GET['id']) && isset($_GET['status'])) {  
      $id=$_GET['id'];  
      $status=$_GET['status'];  
      mysqli_query($con,"update child_form set status='$status' where id='$id'");  
      header("location:displaychildren.php");  
      die();  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <meta name="viewport" content="width=device-width, initial-scale=1">  
      <title>List requested child</title>  
      <style type="text/css">  
           *{  
                padding: 0;  
                margin: 0;  
                box-sizing: border-box;  
           }  
           body{  
                background-image:linear-gradient(rgba(255, 255, 255, 0.607),rgba(255, 255, 255, 0.621)), url("depan.jpg");
                display: flex;  
                justify-content: center;  
                font-family: montserrat;
           }  
           nav{
            margin-left:20px;
            margin-top:-40px;
            font-family: montserrat;
            width: 100%;
            height: 50px;
            display:inline-block;
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
           .container2 {
                width: 100%;  
                max-width: 900px;  
                margin: 10rem auto;  
           }
           .container2 h2{
                margin-top:40px;
                margin-left:400px;
                margin-bottom:50px;
           }  
           .container2 table{ 
                float: right; 
                width: 100%;
                margin-top:100px;
                margin-right:100px;  
                border-collapse: collapse;  
                font-size: 1rem;  
           }  
           .container2 table th{  
                background: lavenderblush;  
                color: black; 
                font-size: 2rem; 
           }  
           select{  
                width: 100%;  
                padding: 0.5rem 0;  
                font-size: 1rem;  
           }  
      </style>  
 </head>  
 <body>

 <div class="black-fill"><br /> <br />
    <div class="container">
    	<nav class="navbar navbar-expand-lg bg-light"id="homeNav">
		      <ul class="navbar-nav me-right mb-2 mb-lg-0">
		      	<li class="nav-item">
		          <a class="nav-link" href="userpage.php">Back</a>
		        </li>
		      </ul>
		  </div>
		    </div>
		</nav>
    </div>
</div>

 
<div class="container2">  
      <table border="1">  
           <tr>  
                <th>ID</th>
                <th>Name</th>  
                <th>Age</th>
                <th>IC Number</th>
                <th>Allergies</th>  
                <th>Status</th>  
           </tr>  
           <?php  
           $i=1;  
           if (mysqli_num_rows($sql)>0) {  
                 while ($row=mysqli_fetch_assoc($sql)) { ?>  
                 <tr>  
                      <td><?php echo $row['id'] ?></td>  
                      <td><?php echo $row['name'] ?></td>  
                      <td><?php echo $row['age'] ?></td> 
                      <td><?php echo $row['icno'] ?></td>  
                      <td><?php echo $row['allergies'] ?></td>  
                      <td>  
                           <?php  
                           if ($row['status']=='1') {  
                                echo "Pending";  
                           }if ($row['status']=='2') {  
                                echo "Accept";  
                           }if ($row['status']=='3') {  
                                echo "Reject";  
                           }  
                           ?>  
                      </td>  

                 </tr>       
           <?php      }  
            } ?>  
      </table>  
 </div>  
 <script type="text/javascript">  
      function displaychildren(value,id){  
           //alert(id);  
           let url = "http://127.0.0.1/Taska/displaychildren.php";  
           window.location.href= url+"?id="+id+"&status="+value;  
      }  
 </script>

</body>
</html>