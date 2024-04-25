<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>時間日期</title>
</head>
<body>
    <h2>給定兩個日期，計算中間間隔天數</h2>
    <?php
        $start="2024-1-10";
        $end="2024-2-9";
        echo '開始日:' .$start;
        echo '<br>';
        echo '結束日:' .$end;
        echo '<br>';
        $start=strtotime($start);
        $end=strtotime($end);
        echo '開始日' .$start;
        echo '<br>';
        echo '結束日' .$end;
        echo '<br>';

        $diff=$end-$start;
        // echo $diff/(秒*分*時);
        echo $diff/(60*60*24);
    ?>
    <h2>計算距離自己下一次生日還有幾天</h2>
    <?php
    // date()函數可以取得當今時間
    echo "今年是".date("Y");
    echo "<br>";
    // date()函數裡面可以填寫方便觀看的值
    echo "今天是".date("Y年m月d日");
    echo "<br>";

    $mybirthday="1993-12-16";
    // 把今天的日期轉成字串
    $start=strtotime(date('Y-m-d'));
    // 把生日的年份換成今年以方便計算
    $tb=str_replace(mb_substr($mybirthday,0,4),date("Y"),$mybirthday);
    // 用判斷式判斷今年生日過了沒?過了則年份+1，再繼續計算日期距離
    if(strtotime($tb)<strtotime('now')){
        $tb=str_replace(mb_substr($mybirthday,0,4),(date("Y")+1),$mybirthday);
    }
    $end=strtotime($tb);
    $diff=$end-$start;
    echo floor($diff/(60*60*24))


    ?>
    <h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>
    <ul>
        <li>2021/10/05</li>
        <li>10月5日 Tuesday</li>
        <li>2021-10-5 12:9:5</li>
        <li>2021-10-5 12:09:05</li>
        <li>今天是西元2021年10月5日 上班日(或假日)</li>
    </ul>

    <?php
    // date_default_timezone_set('Asia/Taipei');設定亞洲台北時區
    date_default_timezone_set('Asia/Taipei');
    echo date("Y/m/d");
    echo "<br>";
    echo date("n月j日 l");
    echo "<br>";
    echo date("Y-n-j H:i:s");
    echo "<br>";
    echo date("今年已經第z天");
    // (int)date("s");
    echo date("Y-m-j H:i:").(int)date("s");
    echo "<br>";
    $workday=(date("N")<6)?'工作日':'假日';
    echo "今天是西元".date("Y年m月j日 l")."是$workday";




    ?>
    <h2>利用迴圈來計算連續五個周一的日期</h2>
    <ul>
        <li>1.2021-10-04 星期一</li>
        <li>2.2021-10-11 星期一</li>
        <li>3.2021-10-18 星期一</li>
        <li>4</li>
        <li>5</li>
    </ul>
    <?php
    $day = strtotime(date("Y-m-d"));

    // 設定一個計數器
    $count = 0;
    $week=[
        1 =>'星期一',
        2 =>'星期二',
        3 =>'星期三',
        4 =>'星期四',
        5 =>'星期五',
        6 =>'星期六',
        7 =>'星期日',
    ];
    // 使用 for 迴圈尋找連續五個周一的日期
    for ($i = 0; $count < 5; $i++) {
        // 將日期增加 $i 天
        $current_date = strtotime("+$i day", $day);
    
        // 使用 date 函式來檢查是否為星期一（星期一的代碼是 1）
        if (date('N', $current_date) == 1) {
            // 如果是星期一，則輸出日期
            echo date('Y-m-d 星期一', $current_date) . "<br>";
            // 增加計數器
            $i=$i+6;
            $count++;
        }
    }



    ?>


    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
</body>
</html>