
<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>
<header class="header">

   <div class="flex">

      <a href="#" class="logo">The Cake Fairy</a>

      <nav class="navbar">
      <h1>WelCome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <h1>
      <a href="logout.php" class="btn">Logout</a>
      </h1>
         
         

      </nav>

    

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>