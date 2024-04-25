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
    
    $week=["日","一","二","三","四","五","六"];
    // $firstday=strtotime(date("Y-m-1"));
    $firstweekstartday=date("w",date("d"));
    echo "第一周開始是第" .$firstweekstartday ."日";
    $days=date("t",date("d"));
    $lastday=strtotime(date("Y-m-$days"));
    echo "<br>";
    echo "最後一天是".date("Y-m-d",$lastDay);

    echo "<table>";
    echo "<tr>";
    foreach($week as $w){
        echo "<td>$w</td>";

    }
    echo "</tr>";

    for($i=0 ; $i<6 ; $i++){
        echo "<tr>";
        for($j=0 ; $j<7 ;$j++){
            if($i==0 && $j>=$firstweekstartday){
                echo "<td>";
                echo $i*7+$j-($firstweekstartday-1);
                echo "</td>";
            }else if($i>0){
                echo "<td>";
                echo $i*7+$j-($firstweekstartday-1);
                echo "</td>";

            }else{
                echo "<td></td>";

            }
            
            

        }
        echo "</tr>";

    }




    echo "</table>";

    ?>


</body>
</html>