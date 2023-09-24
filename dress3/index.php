<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD">
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"></script>

    <title>DRESS-STORE</title>

</head>
<body>
  <header class="header">
    <div class="container">
      <div class="header__wrapper">
        <div class="header__block">

          <nav class="nav">
            <a href="index.php" class="nav__link " >TOWER OF GOD</a>
          </nav>
        </div>
        <h1 class="text-center title-h1">TOWER OF GOD</h1>
        
        <div class="header__block">
          <div class="header__lng">
            <a href="#" class="header__lng-link active">EN</a>
            <a href="#" class="header__lng-link">RU</a>
          </div>
        </div>

        <nav class="nav">
          <a href="profile.php" class="nav__link">ACCOUNT</a>
          <a href="#" class="nav__link">BAG</a>
        </nav>

      </div>
    </div>
  </header>


  
  <section class="intro">
    <div class="container">
      <div class="intro__content">
        <img src="images/introtitle.png" alt="" width="1200px">
        <div class="intro__block">
          <a href="product.php" class="intro__title" >DISCOVER


          </a>
        </div>


      </div>
    </div>



  </section>

  
</body>
</html> 