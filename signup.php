<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">
    <style>
        * body {
            background-color: green;
            background-image: url("back.jpg");
            background-repeat: none;
            font-family: 'Baloo Bhai 2', cursive;


        }

        .container {
            display: flex;
            flex-wrap: wrap;
        }

        .center {
            border: 2px solid green;
            background-image: url("backimg1.jpg");
            top: 10%;
            border-radius: 30px;
            left: 35%;
            height: 600px;
            width: 500px;
            position: absolute;
        }

        .h1 {
            text-align: center;
            text-decoration: underline;
            color: rgb(0, 204, 255);
        }



        .nme {
            margin-top: 50px;
            width: 500px;
            border-radius: 30px;
            margin-left: 50px;
            size: 20px;




        }

        .pss {
            margin: 30px 20px;
            margin-left: 50px;
            width: 430px;
            size: 20px;

        }

        .h1 img {
            width: 400px;
            border-radius: 30px;
        }

        .btn {
            margin-left: 90px;
            width: 100px;
            color: black;
            background-color: rgb(11, 166, 238);
            cursor: pointer;
            border-radius: 30px;
            padding: 10px;


        }

        .btn:hover {
            background-color: lightgreen;
        }

        .btn:active {
            background-color: orange;
        }

        .ret:active {
            background-color: orange;
        }

        .ret:hover {
            background-color: rgb(216, 34, 34);
        }

        .ret {
            margin-left: 100px;
            width: 100px;
            cursor: pointer;
            background-color: rgb(11, 166, 238);
            border-radius: 30px;
            padding: 10px;
        }

        .nme1 {
            width: 75%;
        }

        .ret1 {
            width: 87.5%;
        }

        .forpas {
            color: red;
            margin-top: 20px;
            text-align: center;

        }
    </style>
</head>

<body>
    <header class="header">
        <div class="center">

            <div class="h1">
                <h1> LOGIN </h1>
                <img src="logo.jpg" alt="">
            </div>

            <div class="container">
                <form action="/spotifyclone/connect.php" method="POST">
                    <div class="nme">

                        <input type="textbox" class="nme1" name="name" placeholder="Enter your name">
                    </div>

                    <div class="pss">
                        <input type="password" class="ret1" name="password" placeholder="Enter the password">
                    </div>
                    <div>

                        <!-- <a href="new.html"> -->
                        <button class="btn"> Submit </button>
                        <!-- </a> -->

                        <input type="reset" class="ret" value="Reset">
                    </div>

                    <!-- <div class="forpas">
                        <a href="about.html">
                            <button class="btn"> Signup </button>
                        </a>
                    </div> -->
                </form>
            </div>
        </div>
    </header>

</body>

</html>