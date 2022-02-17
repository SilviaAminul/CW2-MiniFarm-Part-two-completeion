<!DOCTYPE html>
<html>

<head>
<!-- the linking of css, bootstrap and fontawesome for the icons used-->

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
<!-- start of nav bar  -->
  

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



<!-- product descirption -->
  <h3 style="text-align: center;">Thank you for your order</h3>
  <hr>

  <div style="text-align: center;">
    Thank you for your order this is a connfirmation from MiniFarm that an onder has been placed<br>
    You will receive a confirmation message to your email, and our delivery crew will contact<br>
    you shortly<br>
    if in doubt, our loyal customer service can be contacted through
    Email: MiniFarm@hotmail.co.uk or by Phone 49837597975917
  </div>

<!-- product bought -->
  <div>

    <div class="orderSummary">
      <div> Your Order Summary</div>
    </div>



    <div class="orderContent1" style="height: none;">
      <div>

        <table>

          <tr>


            <td class="basketProduct">Carrots </td>

            <td rowspan="3" class="basketPrice">£2.40</td>
          </tr>



        </table>
        <hr>

        <table>

          <tr>

            <td class="basketProduct">Brccoli </td>

            <td rowspan="3" class="basketPrice">£7.60</td>
          </tr>


        </table>
        <hr>
        <table>

          <tr>

            <td class="basketProduct">cucumber </td>

            <td rowspan="3" class="basketPrice">£2.90</td>
          </tr>


        </table>
        <hr>
        <table>

          <tr>

            <td class="basketProduct">Total </td>

            <td rowspan="3" class="basketPrice">£12.90</td>
          </tr>


        </table>
      </div>
    </div>



  </div>



<!-- start footer  -->





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