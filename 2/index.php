<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>



<body>
    <div class="container mt-5">
        <table class="table table-bordered text-center">
            <h3>มีนาคม</h3>
            <thead>
                <tr>
                    <th>จ</th>
                    <th>อ</th>
                    <th>พ</th>
                    <th>พฤ</th>
                    <th>ศ</th>
                    <th>ส</th>
                    <th>อา</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $value = 31;
                for ($i = 1; $i <= $value; $i++) {
                    if ($i % 7 == 1) {
                        echo "<tr>";
                    }
                    echo "<td>" . $i . "</td>";
                    if ($i % 7 == 0) {
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>


        </table>
    </div>

</body>

</html>