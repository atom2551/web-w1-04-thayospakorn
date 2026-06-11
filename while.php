<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop — สูตรคูณ</title>
    <link rel="stylesheet" href="while.css">
</head>
<body>
 
    <div class="wrapper">
 
        <header class="page-header">
            <a href="index.php" class="back-btn">← กลับหน้าหลัก</a>
            <h1>ตารางสูตรคูณ 1–12</h1>
            <p class="subtitle">แสดงด้วย <span class="tag">while loop</span> ซ้อน <span class="tag">while loop</span></p>
        </header>
 
        <div class="code-block">
            <span class="code-label">logic</span>

        </div>
 
        <div class="tables-grid">
            <?php
                $i = 1;
                while($i <= 12){
                    echo "<div class='table-card' style='--card-index:{$i}'>";
                    echo "<div class='table-header'>แม่ {$i}</div>";
                    echo "<div class='table-rows'>";
 
                    $j = 1;
                    while($j <= 12){
                        $result = $i * $j;
                        $highlight = ($result % 10 === 0) ? " highlight" : "";
                        echo "<div class='row{$highlight}'>";
                        echo "<span class='lhs'>{$i} × {$j}</span>";
                        echo "<span class='eq'>=</span>";
                        echo "<span class='res'>{$result}</span>";
                        echo "</div>";
                        $j++;
                    }
 
                    echo "</div></div>";
                    $i++;
                }
            ?>
        </div>
 
    </div>
 
</body>
</html>