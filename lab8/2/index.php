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
        $url = "https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces";
        $response = file_get_contents($url);
        $result = json_decode($response);

        echo "<h1>ข้อมูลวันที่:" . $result[0]->txn_date . "</h1>";
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ลำดับ</th>
                    <th scope="col">จังหวัด</th>
                    <th scope="col">ผู้ติดเชื้อ</th>
                    <th scope="col">เสียชีวิต</th>
                    <th scope="col">ยอดผู้ป่วยสะสม</th>

                </tr>
            </thead>
            <tbody>
                <?php

                $count = 1;
                foreach ($result as $object) {
                    echo "<tr>";
                    echo "<th scope=\"row\">$count</th>";
                    echo "<td>$object->province</td>";
                    echo "<td>$object->new_case</td>";
                    echo "<td>$object->new_death</td>";
                    echo "<td>$object->total_case_excludeabroad</td>";
                    echo "</tr>";
                    $count++;
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>