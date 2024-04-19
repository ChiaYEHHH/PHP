<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// <a href="index.html">回首頁</a>

echo "ABC";

?>
<div>
    $a=10;<br>
    $b=50;<br>
</div>
<h4>a.b.交換後</h4>
<?php
$a=10;
$b=50;
echo '$a=' . $a ;
echo "<br>" ;
echo '$b=' . $b ;

echo "<hr>";
$score=30;
$level=($score>=60)?'及格':'不及格';
echo "成績為:".$score;
echo "<br>" ;
echo "是否及格:" . $level ;
echo "<hr>";

?>
<?php
$clothprice=100;
$pantsprice=150;
if($clothprice>=$pantsprice){
    echo '衣服價錢:' .$clothprice ;
    echo "<br>" ;
    echo '褲子價錢:' .$pantsprice ;
    echo "<br>" ;
}
else{
    $clothprice++ ;
    echo '衣服價錢:' .$clothprice;
}
echo "<hr>";
?>
<h3>成績階段(if else )</h3>
<ul>
    <li>A => 100~90</li>
    <li>B => 89~80</li>
    <li>C => 79~70</li>
    <li>D => 69~60</li>
    <li>E => 59~0</li>
</ul>
<?php
$score=111;
if($score>=90 && $score<=100){
    $level=' A ' ; 
}
else if($score>=80 && $score<=89){
    $level=' B ' ;
}
else if($score>=70 && $score<=79){
    $level=' C ' ;
}
else if($score>=60 && $score<=69){
    $level=' D ' ;
}
else if($score>=0 && $score<=59){
    $level=' E ' ;
    echo "<br>" ;
    echo 'SABEE' ;
}else{echo '重新確認成績!' ;
    $level= ' ' ;
}

echo '你的成績:' .$score ;
echo "<br>" ;
echo '成績等級:' .$level ;
echo "<hr>";

switch($level){
    case ' A ';
        $words= '哇!' ;
        break;
    case ' B ';
        $words= '恩!' ;
        break;
    case ' C ';
        $words= '嗯?' ;
        break;
    case ' D ';
        $words= '诶!' ;
        break;
    case ' E ';
        $words= '哎呀!' ;
        break;
    default;
}
echo '老師反應:' .$words ;
echo "<br>" ;
echo '你的成績:' .$score ;



?>
<P>&nbsp;</P><P>&nbsp;</P><P>&nbsp;</P><P>&nbsp;</P>
</body>
</html>