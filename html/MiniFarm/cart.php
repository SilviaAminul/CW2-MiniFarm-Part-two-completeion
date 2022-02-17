<?php
session_start();
 if (isset($_SESSION['loggedInUserEmail'])) { 

} else {
  header('Location: /html/MiniFarm/login.html');
   // Otherwise redirect to login page
}?>


<!DOCTYPE html>
<html>
<!-- necessary imports for bootstraps and icons  -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
    integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
    integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/7b3395a88c.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/css/style1.css">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid d-flex flex-row justify-content-between">
        <div class="m-left d-inline-flex">
            <a class="navbar-brand" href="home.php"><img width="75" height="75" class="img-fluid"
                    src="/Images/logo.jpg" height alt="Mini Farm"></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Shop
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="fruits.php">Fruit</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="salad.php">Salad </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li><a class="dropdown-item" href="greenveg.php">Green Veg</a></li>
                            <li><a class="dropdown-item" href="exoticveg.php">Exotic Veg </a></li>
                            <li><a class="dropdown-item" href="rootveg.php">Root Veg </a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div style="width:70%" class="m-center">

            <form  method="get" action="search.php" class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" id="SearchInput"  name = "name1" aria-label="Search">  
            <button class="btn btn-outline-success" type="submit"  id="SearchButton"  href="search.php">Search</button>'            </form>
        </div>
        <div class="m-right">
            <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Account
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="login.html">Login</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li><a class="dropdown-item" href="register.html">Register</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="cart.php">cart</a>
                </li>
            </ul>
        </div>
    </div>

    </div>
    </div>
</nav>



<!-- end of nav bar  -->



  <div class="basketHeader">
    <div>
      <p>YOUR BASKET</p>
    </div>

  </div>
  <hr>

<!-- item header include product quantity and price  -->
  <div class="itemHeader">
    <div>
      <table>
        <th class="invisible"></th>
        <th class="productHeader">Product</th>
        <th class="quantityHeader">Quantity</th>
        <th class="priceHeader">Price</th>
      </table>
    </div>
  </div>

<!-- first cart product  -->
  <div class="basketMain">
    <div>
      <table>

        <tr>

          <td rowspan="3" class="basketImage"><img class="images" src="/images1/broccoli.jpg" height></img></td>
          <td class="basketProduct">Broccoli </td>
          <td rowspan="3" class="basketQuantity"><button class="button-33">+</button><button
              class="buttonnumber">1</button><button class="button-33">-</button></td>
          </td>
          <td rowspan="3" class="basketPrice">£2.40</td>
        </tr>
        <tr>
          <td class="basketProduct">Weight : 23.0kg</td>
        </tr>

        <tr>
          <td class="basketProduct">Vibrant and organic fresh carrots</td>
        </tr>

      </table>
    </div>
  </div>
<!-- second cart product  -->

  <div class="basketMain">
    <div>
      <table>

        <tr>

          <td rowspan="3" class="basketImage"><img class="images" src="/images1/carrots.jpg" height></img></td>
          <td class="basketProduct">Carrots </td>
          <td rowspan="3" class="basketQuantity"><button class="button-33">+</button><button
              class="button-33">1</button><button class="button-33">-</button></td>
          <td rowspan="3" class="basketPrice">£7.60</td>
        </tr>

        <tr>
          <td class="basketProduct">Weight : 2.3kg</td>
        </tr>

        <tr>
          <td class="basketProduct">Vibrant and organic fresh carrots</td>
        </tr>

      </table>
    </div>
  </div>



<!-- third cart product  -->
  <div class="basketMain">
    <div>
      <table>

        <tr>

          <td rowspan="3" class="basketImage"><img class="images" src="/images1/cucumber.jpg" height></img></td>
          <td class="basketProduct">Cucumber </td>
          <td rowspan="3" class="basketQuantity"><button class="button-33">+</button><button
              class="button-33">1</button><button class="button-33">-</button></td>
          </td>
          <td rowspan="3" class="basketPrice">£2.90</td>
        </tr>
        <tr>
          <td class="basketProduct"> 100.0kg</td>
        </tr>

        <tr>
          <td class="basketProduct">Vibrant and organic fresh carrots</td>
        </tr>

      </table>
    </div>
  </div>
  <!-- summary of order includes price  -->
  <div class="orderSummary">
    <div> Your Order Summary</div>
  </div>


  <div class="orderContent">
    <div>
      <p class="Text">Total £12.90</p>
    </div>
  </div>
  <div class="checkouttext " style="text-align: center;"><button class="button-36"> Check Out</button></div>


<!-- start footer -->

  <footer>
    <div class="footer_container">
      <div class="footer_logo">
        <a href="#">
          <span>Mini</span>Farms</a>

        <div class="footer_social">
          <a href="#"><i class="fa fa-facebook-f"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-youtube-play"></i></a>
        </div>
      </div>

      <div class="footer_links">
        <strong>About Us</strong>
        <ul>
          <li><a href="#">Policy</a> </li>
          <li><a href="#">Privacy</a> </li>
          <li><a href="#">FAQ</a> </li>

        </ul>
      </div>

      <div class="footer_links">
        <strong>Help</strong>
        <ul>
          <li><a href="#">Payments</a> </li>
          <li><a href="#">Cancellations</a></li>
          <li><a href="#">Shipping</a> </li>

        </ul>
      </div>

      <div class="footer_links">
        <strong>Contact Us</strong>
        <ul>
          <li><a href="#">Phone</a> </li>
          <li><a href="#">Email</a> </li>


        </ul>
      </div>
    </div>
  </footer>


</body>





</html>