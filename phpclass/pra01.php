<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>流程結構練習</title>
</head>
<body>
    <a href="index.html">回首頁</a>
    <h3>給定一個成績數字，判斷是否及格</h3>
    <?php
    $score=70;
    echo $score;
    echo "<br>";

    $result='';
    if($score>=60){
        $result="及格";
    }
    else{
        $resule="不及格";
    }
    echo "判斷為".$result;
   
    ?>
    
    <h2>分配成績等級</h2>
    <h3>根據成績所在的區間，給定等級</h3>
    <ul>
        <li>0 ~ 59 => E</li>
        <li>60 ~ 69 => D</li>
        <li>70 ~ 79 => C</li>
        <li>80 ~ 89 => B</li>
        <li>90 ~ 100 => A</li>
    </ul>
    
    <?php
    $score=77;
    $level='';
    // if($score>=0 && $score<=59){
    //     $level="E";
    // }else if($score>=60 && $score<=69){
    //     $level="D";
    // }else if($score>=70 && $score<=79){
    //     $level="C";
    // }else if($score>=80 && $score<=89){
    //     $level="B";
    // }else if($score>=90 && $score<=100){
    //     $level="A";
    // }else{
    //     $level='成績必須在0~100之間請重新輸入';
    // }
    // 條件需要順序姓，就像篩網
    if($score>=0 && $score<=59){
        $level="E";
    }else if($score<=69){
        $level="D";
    }else if($score<=79){
        $level="C";
    }else if($score<=89){
        $level="B";
    }else if($score<=100){
        $level="A";
    }else{
        $level='成績必須在0~100之間請重新輸入';
    }
    echo '成績為:' .$score. '分';
    echo 'level為:' .$level;
    ?>
    <h2>依據學生成績等級給予評價</h2>
    <h3>根據學生不同的成績等級在網頁上印出不同的文字評價</h3>
    <?php
    $word='';
    switch($level){
        case 'A':
            $word="很棒";
            $color='green';
            break;
        case 'B':
            $word="很厲害";
            $color='lightgreen';
            break;
         case 'C':
             $word="就差一點";
             $color='pink';
             break;
        case 'D':
            $word="不太好";
            $color='red';
            break;
        case 'E':
            $word="笑死";
            $color='darkred';
            break;
            default;
        
    }
    echo "<br>";
    // ABCD等級改字體大小顏色
    // if ($level=='A' || $level=='B' || $level=='C' || $level=='D'){
    // echo "<span style='font-size:32px;color:green'>";

    // }else{
    //     echo "<span style='font-size:32px;color:red'>";
    // }
    echo "<span style='font-size:32px;color:$color'>";
    
    echo $word;
    echo "</span>";
    echo "<hr>";
    ?>
    <style>
        .desc{
            background-color:skyblue;
            width:500px;
            padding: 10px;
            color:darkgray;
            border:1px solid darkblue;
            text-shadow: 1px 1px 2px black;
        }
    </style>

    <h2>閏年判斷，給定一個西元年份，判斷是否為閏年</h2>
    <div class="desc">地球對太陽的公轉一年的真實時間大約是365天5小時48分46秒，因此以365天定為一年 的狀況下，每年會多出近六小時的時間，所以每隔四年設置一個閏年來消除這多出來的一天。</div>
    <ul>
        <li>公元年分除以4不可整除，為平年。</li>
        <li>公元年分除以4可整除但除以100不可整除，為閏年。</li>
        <li>公元年分除以100可整除但除以400不可整除，為平年。</li>
    </ul>
    
    <?php
   


    // $year=2048;
    // echo '年份為:' .$year;
    // echo '<br>';
// 老師一版
    // if ($year%4 ==0 ){
    //     if($year%100 ==0){
    //         if($year%400==0){ 
    //             echo $year . '是閏年!';   
    //         }else{
    //             echo $year . "是平年!"; }           
    //         }else{ echo $year . '是閏年!';   }
    //         }else{echo $year . "是平年!";}
    
// 老師二版
    // if ($year%4 == 0){
    //     if($year%100 == 0 && $year%400 != 0){
    //         echo $year . "是平年!二版";
    //     }else{
    //         echo $year . '是閏年!二版';   
    //     }
    // }else{
    //     echo $year . "是平年!二版";
    // }
// 老師三版
    if($year%4 ==0 && $year %100!=0 || $year%400==0){
        echo $year . "是閏年!三版";
    }else{
        echo $year . "是平年!三版";
    }
// 自己版
    for($year=2000 ; $year<=2024 ; $year=$year+4){
        if($year %100!=0 || $year%400==0){
            echo $year . "是閏年!自己版";
            echo '<br>';
        }else{
            echo $year . "是平年!自己版";
            echo '<br>';
        }
    }

    ?>
    <h2>簡單迴圈練習</h2>
    <ul>
        <li>1.3.5.7.9.....n</li>
        <li>10.20.30.40....n</li>
        <li>3.5.7.11.13.17...97</li>
    </ul>
    <?php
    echo '<hr>';
    for($i=1 ; $i<100 ; $i=$i+2){
        echo $i;
    echo ',';

    }
    echo '<hr>';
    for($i=1 ; $i<100 ; $i++){
        echo $i*10;
        echo ',';
    }
    echo '<hr>';


    for()


    
?>
<p>&nbsp</p>
<p>&nbsp</p>
<p>&nbsp</p>
<p>&nbsp</p>
<p>&nbsp</p>
</body>
</html>