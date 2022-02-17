

    <?php
    session_start();
     if (isset($_SESSION['loggedInUserEmail'])) { 
    
    } else {
      header('Location: /html/CMS/stafflogin.html');
       // Otherwise redirect to login page
    }
    ?>
    <?php
//Include libraries
require  $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
    


//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->MiniFarm;

//Extract the data that was sent to the server
$search_string = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_STRING);
$find_id = [
    "_id" => new MongoDB\BSON\ObjectID($search_string)
];


$cursor = $db->product->findOne($find_id);

if ($search_string != null) {

//Create a PHP array with our search criteria
$findCriteria = [
    '$text' => [ '$search' => $search_string ] 
 ];


//Output the results as forms
echo "<h1>Customers</h1>";   

    echo '<form action="edit_product.php" method="post">';
    echo 'Name: <input type="text" name="name" value="' . $cursor['name'] . '" required><br>';
    echo 'Description: <input type="text" name="weight" value="' . $cursor['description'] . '" required><br>';
    echo 'img_url: <input type="text" name="description" value="' . $cursor['img_url'] . '" required><br>'; 
    echo 'weight: <input type="text" name="weight" value="' . $cursor['weight'] . '" required><br>';
    echo 'Price: <input type="text" name="price (£)" value="' . $cursor['price'] . '" required><br>';
    echo 'Availability: <input type="text" name="avaialability" value="' . $cursor['availability'] . '" required><br>';
    echo '<input type="hidden" name="id" value="' . $cursor['_id'] . '" required>'; 


    echo '<input type="submit">';
    echo '</form><br>';
}
