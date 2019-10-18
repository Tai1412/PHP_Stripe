<?php
require_once "products.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pricing Page</title>
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="pricing.css">
</head>

<body>
    <div class="container">
        <?php
        $colNum = 1;
        foreach ($products as $productID => $value) {
            if ($colNum == 1) 
                echo "<div class='row'>";
                echo '
                    <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-center">
                            <h1 class="pricing"> '.($value["price"] / 100).'</h1>
                        </div>
                            <div class="card-body text-center">
                                <div class="card-title">
                                    <h1>'.$value["title"].'</h1>
                                </div>
                                <ul class="list-group">
                                ';
                foreach ($value["features"] as $feature)
                    echo '<li class="list-group-item">' . $feature . '</li>';
                    echo '
                                </ul>
                            </div>
                    </div>
                </div>';
            
            if ($colNum == 3) {
                echo "</div>";
                $colNum = 0;
            } else
                $colNum++;
        }
        ?>



    </div>

</body>

</html>