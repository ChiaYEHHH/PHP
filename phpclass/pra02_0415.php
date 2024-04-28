<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>流程結構0415</title>
    <style>
        /* border-collapse: collapse;表格邊框合併在一起 */
        table{
            border-collapse: collapse;
            width: 80%;
        }
        tr , td {
            border: 2px dashed darkblue;
            text-align:left;
            background-color: lightblue;
        }
        #nine9 tr:nth-child(1) td,
        #nine9 td:nth-child(1){
            background-color: gray;
            color:#CCC;
        }
    </style>
</head>
<body>
    <a href="index.html">回首頁</a>
    
    
    <h2>九九乘法表-簡單版</h2>
<table>
    <?php
    // 九九乘法表有兩個1~9的變數，所以用兩個迴圈寫
    for($i=1 ; $i<=9 ; $i++){
        echo '<tr>';
        for($j=1 ; $j<=9 ;$j++){
            $k=$i*$j;
        echo  "<td>" .$j. 'x'  .$i. '='  .$k. "</td>";
        // echo '<br>';
        }    
        echo '</tr>';
    }
    ?>
</table>

    <h2>九九乘法表-精緻版</h2>

    <?php
    echo "<table id='nine9'>";
        
        for($i=0 ; $i<=9 ; $i++){
        echo "<tr>" ;
            for($j=0 ; $j<=9 ; $j++){
                echo "<td>" ;
                if($i == 0  && $j == 0){
                    echo  " " ;
                }else if($j == 0 ){
                    echo  $i ;
                }else if($i == 0){     
                    echo $j;
                }else{
                    echo ($j*$i);
                }
            }
                echo "</td>" ;
        echo "</tr>" ;
        }
    echo "</table>";
    
    ?>

<h2>尋找字元(使用while)</h2>
        <ul>
            <li>給定一個字串句子</li>
            <li>給定一個單字或字母</li>
            <li>尋找相符的內容</li>
            <li>印出尋找到的但自或字母所在句子中的位置</li>
        </ul>
        <p>例:伊朗向以色列發動襲擊戰爭升級擔憂加劇 · 蘇文強蘇海金案宣判新加坡如何避免淪為富人洗錢天堂。</p>

<?php
$str="例:伊朗向以色列發動襲擊戰爭升級擔憂加劇 · 蘇文強蘇海金案宣判新加坡如何避免淪為富人洗錢天堂。";
$target="蘇文強";

$position=0;
while($target!=mb_substr($str,$position,mb_strlen($target))){
    // echo 'p='.$position;
    // echo ", substr =" . mb_substr($str, $position, mb_strlen($target));
    // echo '<br>';
    $position=$position+1;

}

//  for($i=0 ; )
echo $target . "的位置在" .$position;
echo "<br>";
echo mb_strpos($str,$target);
?>


</body>
</html>