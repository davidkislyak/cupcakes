<?php
    /* David Kislyak
     * 01/13/2020
     * https://david.greenriverdev.com/328/cupcakes/
     * Cupcake order form.
     */

    //Error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    require_once('./functions.php');

    $flavors = [
        'grasshopper' => 'The Grasshopper',
        'maple' => 'Whisky Maple Bacon',
        'carrot' => 'Carrot Walnut',
        'caramel' => 'Salted Caramel Cupcake',
        'velvet' => 'Red Velvet',
        'lemon' => 'Lemon Drop',
        'tiramisu' => 'Tiramisu'
    ];
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Cupcake Order</title>
</head>
<body>
<form id="cupcake-form" action="confirmation.php" method="post">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Cupcake Order Form</h1>
            <p class="lead">Please select your desired cupcake flavor(s).</p>
        </div>
    </div>

    <div class="main container">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Name</span>
            </div>
            <input type="text" name="name" class="form-control" id="name" placeholder="Ex. Jerry Smith" aria-label="Name" aria-describedby="basic-addon1">
        </div>
        <span class="err" id="err-name">Please enter a valid name.</span>
        <div class="card">
            <div class="card-header">
                <h5>Cupcake Flavors:</h5>
                <span class="err" id="err-flavors">Please select your flavor(s).</span>
            </div>
            <div class="card-body">
                <div class="pb-3">
                    <?php
                        echo arrToCheckbox($flavors);
                    ?>
                </div>
                <button id="submit" type="submit" class="btn btn-primary container-fluid bg-success">Submit Cupcake Order</button>
            </div>
        </div>
    </div>
</form>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="scripts/cupcake.js"></script>
</body>
</html>
