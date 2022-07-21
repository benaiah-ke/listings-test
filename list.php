<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'real_estate';

$conn = mysqli_connect($host, $user, $password, $db_name);

// Select all listings
$query = "SELECT * FROM properties";

$result = $conn->query($query);

// We'll store the results here
$properties = [];

// Results are multiple rows, so we use a loop
while($row = $result->fetch_array()){
    array_push($properties, $row); // Add the row to the array
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>
        <tr>
            <th>Property</th>
            <th>Location</th>
            <th>Price</th>
            <th>View</th>
        </tr>

        <!-- Check if there are no rsults -->
        <?php if(count($properties) == 0){ ?>
            <tr>
                <td colspan="4">
                    No properties!
                </td>
            </tr>
        <?php } // Close the if ?>

        <!-- Loop on available properties, creating a tr for each -->
        <?php foreach($properties as $property){ // Open a loop ?>
            <tr>
                <td><?php echo $property['name']; ?></td>
                <td><?php echo $property['location']; ?></td>
                <td><?php echo $property['price']; ?></td>

                <!-- Pass the property id to the details page in the link -->
                <td><a href="details.php?property_id=<?php echo $property['id']; ?>">View Property</a></td>
            </tr>
        <?php } // Close the loop ?>
    </table>
    
</body>
</html>
