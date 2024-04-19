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
        tr , td{
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
    foreach($nine9 as $nine){
        echo $nine;
        if($i%9 == 0){
            echo "<br>";
        }
        $i++;
    }

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
    $subjects=['國文','英文','數學','地理','歷史'];
    $name=['judy','amo0','john','peter','hebe'];
    $score=[
        ['95','64','70','90','84'],
        ['88','78','54','81','71'],
        ['45','60','68','70','62'],
        ['59','32','77','54','42'],
        ['71','62','80','62','64']];
    
    echo "<table>";
    
        foreach ($subjects as $sj) {
            echo "<tr>";
            echo $sj;
            // echo "<td> $sj </td>";
            echo "</tr>";
        }
    // echo "</tr>";

    
    
    echo "</table>";
    ?>
</body>
</html>