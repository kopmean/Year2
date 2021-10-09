<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
</head>

<body>
    <?php

    $url = "http://10.0.15.20/lab8/restapis/movies90";
    $response = file_get_contents($url);
    $result = json_decode($response);

    // echo $result;
    // echo $result[0]->year;
    // echo $result[0]->cast[0];
    // echo $result[0]->genres[0];

    // foreach ($result as $object) {
    //     echo $object->title;
    //     echo $object->year . '<br>';
    //     foreach ($object->cast as $human) {
    //         echo "-" . $human . '<br>';
    //     }
    //     foreach ($object->genres as $type) {
    //         echo "*" . $type . '<br>';
    //     }
    // }


    ?>

    <div class="container mt-5">
        <?php
        foreach ($result as $object) {
            echo "<div class=\"card border-light mb-3\" style=\"max-width: 100%;\">";
            echo "<div class=\"card-header\">$object->title ($object->year)</div>";
            echo "<div class=\"card-body\">";
            echo "<h6>CAST</h6>";
            foreach ($object->cast as $human) {
                
                echo "- " . $human . '<br>';
            }
            echo "<br><h6>GENRES</h6>";
            foreach ($object->genres as $type) {
                
                echo "- " . $type . '<br>';
            }
            echo "</div>";
            echo "</div>";
        }
        ?>
        
            
            
                <!-- <h5 class="card-title">Light card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             -->
        
    </div>


</body>

</html>