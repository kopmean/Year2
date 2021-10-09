<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $url = "https://covid19.ddc.moph.go.th/api/Cases/today-cases-all";
    $response = file_get_contents($url);
    $result = json_decode($response);

    foreach ($result as $case) {
        echo "New case:  $case->new_case <br>";
        echo "Recovered:  $case->new_recovered <br>";
        echo "Deaths:  $case->total_death <br>";
        echo "New deaths:  $case->new_death <br>";
    }
    ?>
</body>

</html>