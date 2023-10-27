<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>

<h1>EECS 348 Lab Seven Practice Four</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $size = $_POST["size"];

    if (is_numeric($size)) {
        echo "<h2>Multiplication Table for Size $size</h2>";
        echo "<table border='1'>";
        echo "<tr><th> </th>";

        for ($i = 1; $i <= $size; $i++) {
            echo "<th>$i</th>";
        }

        for ($i = 1; $i <= $size; $i++) {
            echo "<tr><th>$i</th>";

            for ($j = 1; $j <= $size; $j++) {
                $result = $i * $j;
                echo "<td>$result</td>";
            }

            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Please enter a valid size.";
    }
}
?>

</body>
</html>
