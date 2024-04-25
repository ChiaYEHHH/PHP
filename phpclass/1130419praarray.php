<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Array</title>
    <style>
        table{
            border-collapse:collapse;
        }
        tr{
            border:2px dashed green;
        }
        td{
            border:2px dashed green;
            
        }

    </style>
</head>
<body>
    <h2>陣列</h2>
    <?php
    $classmate[]=["珈珈","安安","瑄瑄","耀耀"];
    $food[]=[['milk','tea','coffee','cola'],['banana','apple','melon','tomato']];
    $price[]=[50,35,80,40];
    print_r($classmate);
    echo "<br>";
    print_r($food);
    echo "<br>";
    print_r($price);
    echo "<hr>";
    
    echo serialize($classmate);
    echo "<hr>";
    echo serialize($food);
    echo "<hr>";
    echo serialize($price);
    ?>

    <h2>把99乘法表放進陣列</h2>
    <?php
    $nine9=[];
    for($i=1 ; $i<=9 ; $i++){
        for($j=1 ; $j<=9 ; $j++){
            $nine9[]="$i x $j = ".($i*$j);
        }
    }
    echo "<table>";
    $i=1;
    // foreach($nine9 as $nine){
    //     echo $nine;
    //     if($i%9 == 0){
    //         echo "<br>";
    //     }
    //     $i++;
    // }

    foreach($nine9 as $n9 => $nine){
        echo $nine;
        if(($n9)%9==0){
            echo "<tr>";
        }
        echo "<td> $nine </td>";
        if(($n9+1)%9==0){
            echo "</tr>";

        }
    }
    echo "</table>";


    ?>

    <h2>成績陣列</h2>
    <?php
    $subjects=['','國文','英文','數學','地理','歷史'];
    $score=[
        'judy' => ['95','64','70','90','84'],
        'amo' =>['88','78','54','81','71'],
        'john' =>['45','60','68','70','62'],
        'peter' =>['59','32','77','54','42'],
        'hebe' =>['71','62','80','62','64']];
    
    echo "<table>";
    echo "<tr>";
        foreach ($subjects as $sj) {
            echo "<td> $sj </td>";
        }
        echo "</tr>";
        foreach($score as $n => $s){
        echo "<tr>";
        echo "<td> $n </td>";

        foreach($s as $ss){
            echo "<td> $ss </td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>

    <h2>用foreach找出 500年內的閏年</h2>
    <h2>儲存陣列在用迴圈印出來</h2>
    <?php
    $leaps=[];
    $year=2024;
    for($i=$year ; $i<($year+500) ;$i++){
        if($i%4 == 0 && $i%100!=0 || $i%400 == 0){
            $leaps[]=$i;
        }
    }
    echo "<h3>自 $year 至" .($year+500). "止，有以下閏年:</h3>";
    foreach($leaps as $leap){
        echo $leap ;
        echo ' / ';

    }
    echo '<hr>';
    echo "共有" .count($leaps). "個閏年";
  
?>
<h2>在不產生新陣列的狀況下，將一個陣列的元素順序反轉(利用迴圈)</h2>
<?php
$a=[2,4,6,1,8];

echo "原陣列為:[".join(',',$a)."]<br>";
// ceil(天花板)小數點進位  floor(地板)小數點退位 
for ($i=0 ; $i< ceil(count($a)/2); $i++){
    $j=$a[$i];
    $a[$i]=$a[count($a)-1-$i];
    $a[count($a)-1-$i]=$j;
}
echo "for迴圈交換後為:[".join(',',$a)."]<br>";

// array_reverse()內建的交換函式
echo "函式再交換後為:[".join(',',array_reverse($a))."]<br>";





?>
   
<p>$npsb</p>
<p>$npsb</p>
<p>$npsb</p>
<p>$npsb</p>
<p>$npsb</p>
</body>
</html>