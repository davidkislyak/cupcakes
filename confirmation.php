<?php
    //Error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    require_once('./functions.php');

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }

    if (isset($_POST['flavors'])) {
        $flavors = $_POST['flavors'];
    }

    $validFlavors = [
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

    <title>Cupcake Order Confirmation</title>
</head>
<body>
<div class="main container">
    <?php
        $isValid = true;

        //If the name is less two characters (as there are people named Po and such.)
        if (strlen($name) < 2) {
            $isValid = false;
            echo '<h2 class="text-danger" id="err-name">Please enter a valid name.</h2>';
        } else {
            echo '<h2>Thank you, '.$name.', for your order!</h2>';
        }

        //First check for input tampering
        if (empty($flavors) || ($flavors) < 1 || count($flavors) > 7) {
            $isValid = false;
            echo '<span class="text-danger" id="err-flavors">Please select valid flavor(s).</span>';
        } else {

            //Generate unordered list from array.
            $list = arrToList($flavors, $validFlavors);

            //One of the flavors was invalid
            if ($list == false) {
                $isValid = false;
                echo '<span class="text-danger" id="err-flavors">Please select valid flavor(s).</span>';
            } else { //Flavors are all valid
                echo '<h5>Order Summary:</h5>';
                echo $list;
            }
        }

        //If all checks pass
        if ($isValid) {
            echo '<br><h4>Order Total: $'.number_format(count($flavors) * 3.50, 2).'</h4>';
        }
    ?>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
