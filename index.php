<?php 
    $parking = $_GET['parking-flag'];
    $voteRate = $_GET['vote'];
    
    $hotels = [
        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],
    ];

    if($parking){
        $hotels = array_filter($hotels, function($hotels){
            return $hotels['parking'];
        });
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Hotel PHP</title>
</head>
<body>
    
    <div class="container py-5">
    <h1 class="text-center">Hotel List PHP</h1>

<form method="get">
<div class="form-check">

<div class="mb-3 col-4">
  <label for="parking-flag" class="form-label">Insert vote rate:</label>
  <input type="number" class="form-control" id="parking-flag" placeholder="Vote value" name="vote">
</div>

  <input class="form-check-input" type="checkbox" value="false" id="flexCheckDefault" name="parking-flag">
  <label class="form-check-label" for="flexCheckDefault" value="false">
    Hotels with Parkings
  </label>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Parking</th>
      <th scope="col">Vote</th>
      <th scope="col">Distance to the center</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach($hotels as $hotel){
            echo" 
            <tr> ";
            foreach($hotel as $item){
                echo" <td>
                $item
                </td>";
            }
            echo" </tr>";      
        }
    ?>
  </tbody>
</table>

</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>