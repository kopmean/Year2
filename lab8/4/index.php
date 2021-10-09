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

<style>
    img {
        width: 25%;
    }

    body {
        margin: 20px;
    }

    .card-text {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 4;
        /* number of lines to show */
        -webkit-box-orient: vertical;
    }
</style>

<body>
    <?php
    $url = "https://www.themealdb.com/api/json/v1/1/random.php";
    $response = file_get_contents($url);
    $result = json_decode($response);

    // echo $result->meals[0]->strMeal . "<br>";
    $img = $result->meals[0]->strMealThumb;
    $video = $result->meals[0]->strYoutube;
    // echo $video;
    // echo $result->meals[0]->strInstructions;
    // echo "<img src=\"$img\" alt=\"img\">";

    ?>


    <div class="container mt-5">
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $img; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $result->meals[0]->strMeal; ?></h5>
                <p class="card-text"><?php echo $result->meals[0]->strInstructions; ?></p>
                <a href="<?php echo $video ?>" class="btn btn-primary" target="_">Learn more</a>
                <a href="index.php" class="btn btn-secondary"><img src="1082454.png" alt="..." style="width: 25px;"></a>

                
            </div>
        </div>
    </div>

</body>

</html>