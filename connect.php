<?php
$takename = $_POST['name'];
$takepass = $_POST['password'];

$conn = mysqli_connect("localhost","root","","spotify");

if(!$conn)
{
    die("The connection was not succesful".mysqli_connect_error());

}

// $sql = "INSERT INTO  `login_details` (`username`,`password`) VALUES ('$takename','$takepass')";
// $result = mysqli_query($conn,$sql);


$sql1 = "Select * from login_details where username='$takename' AND password='$takepass'";  
$result = mysqli_query($conn,$sql1);
$num = mysqli_num_rows($result);
if ($num == 1){
    $login = true;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header("location: index.html");
}

else{
    // die("Invalid credintials");
    header("location: signup.php");
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect page</title>


    <style>

        *{
            background-color:white;
        }
     .btn{
         margin-left:50%;
         
         border-radius:10px;
         background-color:lightgreen;
         padding:10px;
          }

          .h2{
              text-align:center;
            margin-left: 40%;
            margin-top: 10%;
            padding: 10px;
            background-color: lightgreen;
            margin-right: 39%; 
            cursor:pointer;

          }   

          .btn:hover{
              background-color:lightblue;
              cursor:pointer;

          }
        
        
    </style>

</head>
<body>
    
     <h2 class = h2 > Your login was Succesful! <h2>
         <form action = "index.html">
         <a href="index.html">
          <button class="btn"> Next </button>   
         </a> 
         <form>




</body>
</html>