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
    <div class="container mt-5">
        <?php
        $url = "http://10.0.15.20/lab8/restapis/10countries";
        $response = file_get_contents($url);
        $result = json_decode($response);

        foreach ($result as $object) {
            echo "<div class=\"card mb-3\" style=\"max-width: 100%;\">";
            echo "<div class=\"row g-0\">";
            echo "<div class=\"col-md-4\">";
            echo "<img src=\"$object->flag\" class=\"img-fluid rounded-start\" alt=\"...\">";
            echo "</div>";
            echo "<div class=\"col-md-8\">";
            echo "<div class=\"card-body\">";
            echo "<h5 class=\"card-title\">Name: $object->name</h5>";
            echo "<h5 class=\"card-title\">Capital: $object->capital</h5>";
            echo "<h5 class=\"card-title\">Population: $object->population</h5>";
            echo "<h5 class=\"card-title\">Region: $object->region</h5>";

            echo "<h5 class=\"card-title\">Location: ";
            foreach ($object->latlng as $pos) {
                echo $pos;
                // echo $pos . " ";
            }
            echo "</h5>";
            echo "<h5 class=\"card-title\">Borders: ";
            foreach ($object->borders as $bor) {
                echo $bor." ";
                // echo $bor . " ";
            }
            echo "</h5></div></div></div></div>";

            // echo "<img src=\"" . $object->flag . "\" alt=\"..\">";
        }


        ?>



        <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
    
    
    
    
    </div>

</body>

</html>