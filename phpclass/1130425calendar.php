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
    // Y年 ,m月,d日,w星期幾0(日)-6(六),t月份的天數,l星期幾(英文),,,
    // $week=["日","一","二","三","四","五","六"];
    // $firstday=strtotime(date("Y-m-1"));
    // $firstweekstartday=date("w",$firstday);
    // echo "第一周開始是第" .$firstweekstartday ."日";
    // $days=date("t",$firstday);
    // $lastday=strtotime(date("Y-m-$days"));
    // echo "<br>";
    // echo "最後一天是".date("Y-m-d-l",$lastday);

    // echo "<table>";
    // echo "<tr>";
    // foreach($week as $w){
    //     echo "<td>$w</td>";

    // }
    // echo "</tr>";

    // for($i=0 ; $i<6 ; $i++){
    //     echo "<tr>";
    //     for($j=0 ; $j<7 ;$j++){
    //         if($i==0 && $j>=$firstweekstartday){
    //             echo "<td>";
    //             echo $i*7+$j-($firstweekstartday-1);
    //             echo "</td>";
    //         }else if($i>0){
    //             echo "<td>";
    //             if($i*7+$j-($firstweekstartday-1)<=$days){
    //             echo $i*7+$j-($firstweekstartday-1);

    //             }else{
    //                 echo "&nbsp;";
    //             }
    //             echo "</td>";

    //         }else{
    //             echo "<td>owo</td>";
    //         }
    //     }
    //     echo "</tr>";
    // }




    echo "</table>";
    echo "<hr>";

    echo "<table>";

    // echo "<tr>";
    // foreach($week as $w ){
    //     echo "<td>$w</td>";
    // }
    // echo "</tr>";
    $firstday=strtotime(date("Y-m-1"));
    $days = date("t", $firstday);
    for ($i = 1; $i <= $days; $i++) {   
        $currentDay = strtotime(date("Y-m-$i"));
        $currentWeekDay = date("w", $currentDay);  
        if ($currentWeekDay == 0) {
            if ($i != 1) {
                echo '</tr>';
            }
            echo '<tr>';
        }
        
        if ($i < $currentWeekDay) {
            echo '<td>owo</td>';  
        } else {
            echo '<td>' . $i . '</td>';
        }
    }


        // switch{
        //     case($currentWeekDay == 0){
        //         echo '</tr>';
        //         echo '<tr>';
        //     }
        //     case($i<$currentWeekDay){
        //         echo '<td>owo</td>';  
        //     }else{
        //         echo '<td>' . $i . '</td>';

        //     }
        // }
        
        // if ($currentWeekDay == 0) {
        //     echo '</tr>';
        //     echo '<tr>';
        // } 
        //     echo '<td>' . $i . '</td>';   
    // }
    // echo '</tr>';
    echo "</table>";

    ?>
    <hr>

    <?php
    $year=2024;
    $mon=5;
    $week=["日","一","二","三","四","五","六"];
    $day1=strtotime("$year-$mon-01");
    echo "當月第一天". date("Y-m-d", $day1)."<br>";
    $wd1 = date("w", $day1);
    
    echo "當月第一天是星期" .$wd1. "<br>";
    $days=1;
    $md= date("t", $day1);
    echo "當月天數" .$md. "天";
    echo "<table>";
    echo "<tr>";
    foreach($week as $w){
        echo "<td>$w</td>";

    }
    echo "</tr>";
    echo "<tr>";
    for($i=0 ; $i<=$md ; $i++){
        
        if($i < $wd1){
            // 印出1號之前的格子
            echo "<td>QAQ</td>";
        }elseif($i>=$wd1){
                // 印出個子相對應的日期
                echo "<td>$i</td>" ;
                
        }
    }
        if($i % 7 === 0){
            // 週六換行
            echo "</tr>";
            // echo "<tr>";
    
            }
        

    



    // for($i=0 ; $i<6 ; $i++){
    //     echo "<tr>";
    //     for($j=0 ; $j<7 ; $j++){
    //         echo "<td>owo</td>";
    //         if($j==$wd1){
    //             echo "<td> $days </td>";
    //             $days++;
    //         }
    //     }
    //     echo "</tr>";
    // }
    


    echo "</table>";
    ?>

    <h4>行事曆(div版)</h4>
    <style>
        .block{
            width:357px;
            display:flex;
            flex-wrap:wrap;
        }
        .item_block{
            border:1px solid blue;
            display:inline-block;
            width:50px;
            height:25px;
            margin-left:-1px;
            margin-top:-1px;
        }
        .item{
            margin-left:-1px;
            margin-top:-1px;
            display:inline-block;
            width: 50px;
            height: 50px;
            border:1px solid pink;
            
        }
    </style>
    <?php
    $mon_d=[];
    for($i=0 ;$i<42 ; $i++){

        // echo "<div class='item'></div>";
        $mon_d[]=date("d",strtotime("+$i days", strtotime(date("Y-m-d"))) );
    
        
    }
    echo "<div class='block'>";
        echo "<div class='item_block'>日</div>";
        echo "<div class='item_block'>一</div>";
        echo "<div class='item_block'>二</div>";
        echo "<div class='item_block'>三</div>";
        echo "<div class='item_block'>四</div>";
        echo "<div class='item_block'>五</div>";
        echo "<div class='item_block'>六</div>";

        foreach($mon_d as $day){
            echo"<div class='item'>$days</div>";
        }

    
    echo "</div>";

    ?>


</body>
</html>