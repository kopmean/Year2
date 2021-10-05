<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>






<body>

    <div class="container mt-5">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h1>Form</h1>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputFirstname">Firstname</label>
                    <input type="text" class="form-control" placeholder="First name" name="fname" value="Sira">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputLastname">Lastname</label>
                    <input type="text" class="form-control" placeholder="Last name" name="lname" value="Attawanich">
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputAdress">Adress</label>
                    <input type="text" class="form-control" placeholder="Adress" name="adress" value="99/154">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputDistrict">District</label>
                    <input type="text" class="form-control" placeholder="District" name="district" value="Parkret">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputProvince">Province</label>
                    <input type="text" class="form-control" placeholder="Province" name="province" value="Bangphub">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputZIP">ZIP code</label>
                    <input type="number" class="form-control" placeholder="Zip" name="zip" value="11120">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputNumber">Phone number</label>
                    <input type="number" class="form-control" placeholder="Number" name="phone" value="08125">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputID">ID card</label>
                    <input type="number" class="form-control" placeholder="ID card" name="id" value="1111111111111">
                </div>
            </div>
            <button type="submit" class="btn btn-dark">Dark</button>
        </form>


        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Adress</th>
                    <th scope="col">District</th>
                    <th scope="col">Province</th>
                    <th scope="col">Zip Code</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">ID card</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // collect value of input field
                        // $name = $_POST['fname'];
                        if (empty($_POST['fname'])) {
                            echo "";
                        } elseif (iconv_strlen($_POST['fname'], "UTF-8") <= 5) {
                            echo "<td style=\"color:red\">First name: " . $_POST['fname'] . "</td>";
                        } else {
                            echo "<td>First name: " . $_POST['fname'] . "</td>";
                        }
                        if (empty($_POST['lname'])) {
                            echo "";
                        } elseif (iconv_strlen($_POST['lname'], "UTF-8") <= 5) {
                            echo "<td style=\"color:red\">Last name: " . $_POST['lname'] . "</td>";
                        } else {
                            echo "<td>Last name: " . $_POST['lname'] . "</td>";
                        }
                        if (empty($_POST['adress'])) {
                            echo "";
                        } elseif (iconv_strlen($_POST['adress'], "UTF-8") <= 5) {
                            echo "<td style=\"color:red\">Adress: " . $_POST['adress'] . "</td>";
                        } else {
                            echo "<td>Adress: " . $_POST['adress'] . "</td>";
                        }
                        if (empty($_POST['district'])) {
                            echo "";
                        } elseif (iconv_strlen($_POST['district'], "UTF-8") <= 5) {
                            echo "<td style=\"color:red\">District: " . $_POST['district'] . "</td>";
                        } else {
                            echo "<td>District: " . $_POST['district'] . "</td>";
                        }
                        if (empty($_POST['province'])) {
                            echo "";
                        } elseif (iconv_strlen($_POST['province'], "UTF-8") <= 5) {
                            echo "<td style=\"color:red\">Province: " . $_POST['province'] . "</td>";
                        } else {
                            echo "<td>Province: " . $_POST['province'] . "</td>";
                        }
                        if (empty($_POST['zip'])) {
                            echo "";
                        } elseif (iconv_strlen($_POST['zip'], "UTF-8") <= 5) {
                            echo "<td style=\"color:red\">zip: " . $_POST['zip'] . "</td>";
                        } else {
                            echo "<td>Zip: " . $_POST['zip'] . "</td>";
                        }
                        if (empty($_POST['phone'])) {
                            echo "";
                        } elseif (iconv_strlen($_POST['phone'], "UTF-8") <= 5) {
                            echo "<td style=\"color:red\">phone: " . $_POST['phone'] . "</td>";
                        } else {
                            echo "<td>Phone: " . $_POST['phone'] . "</td>";
                        }
                        if (empty($_POST['id'])) {
                            echo "";
                        } elseif (iconv_strlen($_POST['id'], "UTF-8") <= 5) {
                            echo "<td style=\"color:red\">id: " . $_POST['id'] . "</td>";
                        } else {
                            echo "<td>ID: " . $_POST['id'] . "</td>";
                        }
                    }
                    ?>
                </tr>
            </tbody>
        </table>
    </div>




</body>

</html>