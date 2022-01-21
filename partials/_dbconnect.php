<?php
$takename = $_POST['name'];
$takepass = $_POST['password'];

$conn = mysqli_connect("localhost","root","","project_1",3307);

if(!$conn)
{
    die("The connection was not succesful".mysqli_connect_error());

}




?>