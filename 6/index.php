<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mitr:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<style>
    body {
        /* background: #2980b9; */
        /* fallback for old browsers */
        /* background: -webkit-linear-gradient(to right, #2980b9, #6dd5fa, #ffffff); */
        /* Chrome 10-25, Safari 5.1-6 */
        /* background: linear-gradient(to right, #2980b9, #6dd5fa, #ffffff); */
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }

    img {
        width: 100%;
        border-radius: 20px;
        margin: 10px;
    }

    div#masonry {
        margin-top: 50px;
        column-count: 4;
        column-gap: 15px;
        /* width: 80%; */
    }

    h1{
        text-align: center;
        font-family: 'Mitr', sans-serif;
        font-size: 100px;
        /* margin-top: 100px; */
    }

    img:hover{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
</style>

<body>
    
    <h1>GALLERY</h1>
    <div id="masonry" class="container md-5">
        <?php
        for ($x = 1; $x <= 23; $x++) {
            echo "<a href=\"https://canva-ada98.web.app/($x).png\"><img src=\"https://canva-ada98.web.app/($x).png\"></a>";
        }
        ?>
    </div>

</body>

</html>