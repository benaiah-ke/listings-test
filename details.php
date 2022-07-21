<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'real_estate';

$conn = mysqli_connect($host, $user, $password, $db_name);

// This was passed via the url
$property_id = $_GET['property_id'];

// Select a specific listing
$query = "SELECT * FROM properties WHERE id = $property_id";

$result = $conn->query($query);

// We are expecting only a single result, so we do not loop here
$property = $result->fetch_array();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property details - <?php echo $property['name']; ?></title>
</head>
<body>

    <h4>Property Details</h4>

    <div>
        Name: <?php echo $property['name']; ?>
    </div>

    <div>
        Location: <?php echo $property['price']; ?>
    </div>

    <div>
        Price: <?php echo $property['price']; ?>
    </div>
    
</body>
</html>
