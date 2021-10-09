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
    $url = "http://10.0.15.20/lab8/restapis/currencyrate";
    $response = file_get_contents($url);
    $result = json_decode($response, true);

    $num = "";
    $form = "";
    $to = "";
    $money = "";

    if (isset($_POST['submit'])) {
        $num = $_POST['num'];
        $form = $_POST['form'];
        $to = $_POST['to'];

        $money = number_format($num / $result['rates'][$form] * $result['rates'][$to], 2);
    }


    // $i = 'THB';
    // echo $result->rates->THB;

    // foreach ($result['rates'] as $key => $currency) {
    //     // echo $key;
    //     echo $result['rates'][$key];
    //     echo "<option value=\"$key\">$key</option>";
    // }
    ?>

    <div class="container mt-5">
        <form method="POST" action="index.php">
            <div class="row">
                <div class="col-1">
                    <label class="mr-sm-2" for="inlineFormCustomSelect">Form:</label>
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="form">
                        <?php
                        foreach ($result['rates'] as $key => $currency) {
                            // echo $result['rates'][$key];
                            if ($key == $form) {
                                echo "<option value=\"$key\" selected>$key</option>";
                            } else {
                                echo "<option value=\"$key\">$key</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="col-10">
                    <input type="number" class="form-control" placeholder="" name="num" value="<?php echo $num ?>">
                </div>
            </div>


            <div class="row">
                <div class="col-1">
                    <label class="mr-sm-2" for="inlineFormCustomSelect">To:</label>
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="to">
                        <?php
                        foreach ($result['rates'] as $key => $currency) {
                            // echo $result['rates'][$key];
                            if ($key == $to) {
                                echo "<option value=\"$key\" selected>$key</option>";
                            } else {
                                echo "<option value=\"$key\">$key</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="col-10">
                    <input type="text" class="form-control" placeholder="" value="<?php echo $money; ?>">
                </div>

            </div>
            <div class="col-1 my-1">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
        </form>
    </div>


</body>

</html>