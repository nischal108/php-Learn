<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array Example</title>
</head>
<body style="background-color:aquamarine">
    <?php
    $age = array(
        "Nischal" => 16,
        "Parbat" => 27,
        "Hem" => 6
    );

    echo $age["Nischal"] . "<br>";
    echo $age["Parbat"] . "<br>";
    echo $age["Hem"] . "<br>";

    echo "<pre>";
    print_r($age);
    echo "</pre>";

    echo "<pre>";
    var_dump($age);
    echo "</pre>";

    echo "<table border='1'>
            <tr>
                <th>Name</th>
                <th>Age</th>
            </tr>";

    foreach ($age as $name => $num) {
        echo "<tr>
                <td>$name</td>
                <td>$num</td>
              </tr>";
    }

    echo "</table>";
    ?>
</body>
</html>
