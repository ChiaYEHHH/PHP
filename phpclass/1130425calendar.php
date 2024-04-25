<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
    <style>
        table{
            border-collapse: collapse;
            border:5px double skyblue;
            
        }
        td{
            width: 50px;
            height: 50px;
            text-align:center;
            border:2px dashed lightpink;
        }
    </style>
</head>
<body>
    <h2>線上月曆製作</h2>
    <?php
    echo date("Y年m月");
    echo "<table>";
    $week=["日","一","二","三","四","五","六"];
    echo "<tr>";
    
    foreach($week as $w){
        echo "<td>$w</td>";

    }
    echo "</tr>";

    for($i=0 ; $i<6 ; $i++){
        echo "<tr>";
        for($j=0 ; $j<7 ;$j++){
            echo "<td>";
            echo "  ";

            echo "</td>";

        }
        echo "</tr>";

    }




    echo "</table>";

    ?>


</body>
</html>