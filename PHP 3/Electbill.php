<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill</title>
</head>
<body>
    <h2>ELECTRICITY BILL</h2>
    <form method="post" action="#">
        <table>
            <tr>
                <th>Consumer ID</th>
                <td><input type="number" name="id"></td>
            </tr>
            <tr>
                <th>Name</th>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <th>Unit Consumed</th>
                <td><input type="number" name="units"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $name = $_POST["name"];
        $units = $_POST["units"];

        echo "<h3>KSEB</h3>";
        echo "<table border='1'>";
        echo "<tr><th>Consumer ID</th><td>" . $id . "</td></tr>";
        echo "<tr><th>Consumer Name</th><td>" . $name . "</td></tr>";
        echo "<tr><th>Unit Consumed</th><td>" . $units . "</td></tr>";
        
        if ($units < 100) {
            $amt = $units * 3;
        } elseif ($units >= 100 && $units <= 200) {
            $amt = $units * 4;
        } elseif ($units > 200 && $units <= 300) {
            $amt = $units * 5;
        } else {
            $amt = $units * 6;
        }
        
        echo "<tr><th>Total</th><td>Rs. " . $amt . "</td></tr>";
        echo "</table>";
    }
    ?>
</body>
</html>

