<?php

@include 'config.php';

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/stylelogin.css">

   

</head>
<body>
   
<div class="container">

        <!-- home section -->
        <div class="home">
            <div class="content" data-aos="zoom-out-right">
                <h3>Delicious
                    <br>
                    <br>The Cake Fairy
                </h3>
                <p></p>
                <p>“The success of bakers comes from golden hands, creative minds 
                    <br>and passionate hearts.” – Christina Tosi –.
                </p>
                <a href="login_form.php" class="btn">login</a>
                <a href="register_form.php" class="btn">register</a>
            </div>
            <div class="img"  data-aos="zoom-out-left">
                <img src="./image/o5.png" alt="">
            </div>
        </div>
        <!-- home section end -->



</div>

</body>
</html>