<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Hotel</title>
</head>
<body>
    <h1 class="my-title">
        Hotels List
    </h1>

    <div class="row"> 
            <?php 
                foreach ($hotels as $hotel) {
                    echo "<div class='mybox'>";
                    echo "<h2>" . $hotel['name'] . "</h2>";
                    echo "<p>" . $hotel['description'] . "</p>";
                    echo "<p>" . ($hotel['parking'] ? 'Parcheggio disponibile' : 'Parcheggio non disponibile') . "</p>";
                    echo "<p> Votazione media: " . $hotel['vote'] . "</p>";
                    echo "<p> Distanza dal centro:" . $hotel['distance_to_center'] . " km</p>";  
                    echo "</div>";
                }           
            ?>        
    </div>
</body>
</html>