
<?php
session_start();
 if (isset($_SESSION['loggedInUserEmail'])) { 

} else {
  header('Location: /html/CMS/stafflogin.html');
   // Otherwise redirect to login page
}
?>

<!DOCTYPE html>
<html>

<head>
<!-- import bootstraps sources and for logos in footer and linking css  -->
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
  <link rel="stylesheet" href="/css/style1.css">

</head>

<body>
<!-- start of nav bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid d-flex flex-row justify-content-between">
      <div class="m-left d-inline-flex">
        <a class="navbar-brand" href="home.php"><img width="75" height="75" class="img-fluid" src="/images1/logo.jpg"
            height alt="Mini Farm"></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Products
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="addproducts.php">Add Products</a></li>
                <li><a class="dropdown-item" href="editproduct.php">Edits Products </a></li>
                <li><a class="dropdown-item" href="viewproduct.php">View Products </a></li>
                <li><a class="dropdown-item" href="deleteproducts.php"> Delete Porduct </a></li>


                <li>
                  <hr class="dropdown-divider">
                </li>


                <li><a class="dropdown-item" href="vieworders.php"> View Orders </a></li>
                <li><a class="dropdown-item" href="deleteorders.php">Delete Orders </a></li>

              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div style="width:70%" class="m-center">
  
      </div>
      <div class="m-right">
        <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Account
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Log out</a></li>


            </ul>
      </div>
    </div>

    </div>
    </div>
  </nav>

<!-- end of nav bar -->
  <h2>Enter product ID you want to Delete</h2>


<!-- product id staff may want to deletd -->
  Product Id: <input type="text" style="
    border: 1px green solid;
    width: 400px;
    border-radius: 3px;" id="text"><br>
  <button class="custom-button" onclick="login()">Delete</button>
  </div>