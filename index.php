<?php
$parking = isset($_GET['parking-flag']) ? $_GET['parking-flag'] : false;
$voteRate = isset($_GET['vote']) ? $_GET['vote'] : false;

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

if ($parking) {
    $hotels = array_filter($hotels, function ($hotels) {
        return $hotels['parking'];
    });
};

if ($voteRate) {
    $hotels = array_filter($hotels, function ($hotels) use ($voteRate) {
        return $hotels['vote'] >= $voteRate;
    });
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Hotel PHP</title>
</head>

<body>

    <div class="container py-5">
        <h1 class="text-center text-white">Hotel List PHP</h1>
        <div class="panel mt-5">
            <div class="panel-heading">
                <div class="row">
                    <div class="col col-sm-3 col-xs-12">
                        <h4 class="title">Hotel List</h4>
                    </div>
                    <form class="col-sm-9 col-xs-12 text-right" method="get">
                        <div class="input-row d-flex align-items-center gap-3 text-white">
                            <input type="number" class="form-control" id="vote" placeholder="Insert vote value here..." name="vote" min="1" max="5"">
                            <input class=" form-check-input m-0" type="checkbox" value="false" id="parking-flag" name="parking-flag">
                            <label class="form-check-label" id="checkbox-label" for="checkbox-label">
                                Hotels with Parkings
                            </label>
                            <button type="submit" class="btn btn-primary">Filter Hotel</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panel-body table-responsive">
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
                        foreach ($hotels as $hotel) {
                            echo " 
                            <tr> ";
                            foreach ($hotel as $item) {
                                echo " <td>
                            $item
                            </td>";
                            }
                            echo " </tr>";
                        }
                        ?>

                    </tbody>
                </table>
            </div>
            <div class="panel-footer">
                <div class="row">
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>