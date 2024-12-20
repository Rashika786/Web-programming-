<html>
<head>
    <title>Indian Team</title>
</head>
<body bgcolor="lavender"><center>
    <h4><center>INDIAN TEAM</center></h4>
    <?php
    $name = ["Dhawan", "Kohli", "Sachin", "Shami", "Pandey", "Bumrah", "Agarwal", "Shreyas", "Rahul", "Ashwin"];
    $role = ["Batsman", "Batsman", "Allrounder", "Bowler", "Batsman", "Bowler", "Batsman", "Batsman", "Wicket-keeper", "Bowler"];

    echo "<table border='2'>
            <tr>
                <th>SL.NO</th>
                <th>PLAYERS</th>
                <th>ROLE</th>
            </tr>";

    for ($i = 0; $i < count($name); $i++) {
        $sl = $i + 1;
        echo "<tr>
                <td>$sl</td>
                <td>$name[$i]</td>
                <td>$role[$i]</td>
              </tr>";
    }

    echo "</table>";
    ?>
    </center>
</body>
</html>

