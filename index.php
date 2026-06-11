<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สูตรคูณ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="wrapper">

        <?php
            echo "<h1>งานที่ 1 ฐยศปกรณ ทองสุข BIT.2/4 เลขที่ 04</h1>";
        ?>

        <a href="while.php">While Loop →</a>

        <form action="" method="get">
            <label for="num">เลขแม่สูตรคูณ</label>
            <input type="number" name="num" id="num" placeholder="ใส่เลขแม่สูตรคูณ" min="1">
            <input type="submit" value="คำนวณ">
        </form>

        <?php
            if(isset($_GET["num"])){
                $num = htmlspecialchars($_GET["num"]);

                echo "<div class='result-box'>";
                echo "<div class='result-title'>สูตรคูณแม่ " . $num . "</div>";
                echo "<table class='result-table'>";

                for($i = 1; $i <= 12; $i++){
                    $result = $num * $i;
                    echo "<tr>
                            <td>{$num} &times; {$i}</td>
                            <td>= {$result}</td>
                          </tr>";
                }

                echo "</table>";
                echo "</div>";
            }
        ?>

    </div>

</body>
</html>