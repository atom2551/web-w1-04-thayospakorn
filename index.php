<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        echo "<h1 style='color:blue'>งานที่ 1 ธนบูรณ์ ธนจริวัฒน์ BIT.2/4 เลขที่ 25</h1>";
    ?>

    <form action="">
        <label for="">เลขแม่สูครคูณ</label> <br>
        <input type="number" name="num" id="">
        <input type="submit" value="คำนวณ">
    </form>

    <?php
        if(isset($_GET["num"])){
            $num = $_GET["num"];

            echo "สูตรคูณแม่ " . $num;


        }
    ?>


</body>
</html>