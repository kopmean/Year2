<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
</head>


<style>
    body{
        font-family: 'Prompt', sans-serif;
    }
</style>

<body>
    <form id="showmsg" action="index.php" method="post">
        <label>กรอกสูตรคูณ :</label>
        <input type="number" id="txtMsg" name="txtMsg" value="">
        <input type="submit" id="submit" value="Submit">
    </form>
    <?php
    if (!empty($_POST)) {
        $value = $_POST['txtMsg'];
        $myarr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
        for ($i = 0; $i < sizeof($myarr); $i++) {
            echo $value . " x " . $myarr[$i] . " = " . $value * $myarr[$i] . "<br>";
        }
    }

    ?>
</body>

</html>