<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>
    <h2>字串取代</h2>
    <ul>
        <li>將”aaddw1123”改成”*********”</li>
    </ul>
    <?php
    $s='aaddw1123';
    $s=str_replace(['a','d','w','1','2','3'],'*',$s);
    echo 'str_replace' .$s;
    echo '<br>';

    $ss='aaddw1123';
    $ss=str_repeat("*",mb_strlen($ss));
    echo 'str_repeat' .$ss ;

    ?>
    <h2>字串分割</h2>
    <h4>將”this,is,a,book”依”,”切割後成為陣列</h4>
    <?php
    $s='this,is,a,book';
    $result=explode("," , $s);
    echo "<pre>";
    print_r($result);
    echo "</pre>";

    ?>

    <h4>將上例陣列重新組合成“this is a book”</h4>
    <?php
    $result=join(' ',$result);


    ?>
    <h2>子字串取用</h2>
    將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”
    <h4></h4>
    <?php
    $s='The reason why a great man is great is that he resolves to be a great man';
    $new=mb_substr($s,0,10);
    echo $new;
    echo "..."
    //echo str_repeat(".",3);



    ?>
    <h2>尋找字串與HTML、css整合應用</h2>
    <ul>
        <li>給定一個句子，將指定的關鍵字放大</li>
        <li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
        <li>請將上句中的 “程式設計” 放大字型或變色.</li>
    </ul>
    <?php

        $s="學會PHP網頁程式設計，薪水會加倍，工作會好找";
        // $s=str_replace('程式設計',"<span style='color: red ; font-size : 32px'>程式設計</span>",$s);
        $key='網頁';
        $color='pink';
        $size='24px';
        // key , color , font-size 拉出來另外設定
        $s=str_replace($key,"<span style='color:$color;font-size:$size'>$key</span>",$s);

        echo $s;

    ?>
    
    <p>
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
    </p>
</body>
</html>