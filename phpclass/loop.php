<a href="index.html"></a>
<?php
for($i=0;$i<10;$i++){
    // echo $i;
    // echo "<br>" ;
    echo $i*10;
    echo "<br>" ;
    echo "<hr>";
}
echo "<br>" ;
echo "i 最後值:" .$i ;
?>
<h2>while</h2>
<?php
$score=10;
echo "原始成績=" .$score;
while($score<66){
    
    $score=$score+10;
    // echo "<br>" ;
    // echo $score;
    // echo "<br>" ;

}
echo "<hr>";
echo "調整結果=" .$score;
echo "<br>" ;
?>
<h2>巢狀結構</h2>
<?php
// show放在迴圈外面，不會被環圈一直改成false
$show=false;
for($i=0 ;$i<10;$i++){
    echo $i*10;
    
    if($i>5 && $show==false){
        echo "執行一半了!";
        $show=true;
    }
    echo "<br>" ;

}
// if中只放變數的應用
$a=true;
if($a){
    echo "TRUE"
}    else{
        
    }



<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>