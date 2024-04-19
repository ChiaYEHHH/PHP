<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectangle</title>
</head>
<body>
    <h2>矩形</h2>
    <?php
        $w_rectangle=7;
        $h_rectangle=7;
        for($i=0 ; $i<=$h_rectangle ; $i++){
            for($j=0 ; $j<=$w_rectangle ;$j++){
                    if($i==0 || $i==$h_rectangle){
                        echo "*";
                    }else if($j==0 || $j == $w_rectangle){
                        echo "*";
                    }else{
                        echo " &nbsp";
                    }
            }
            echo "<br>";
        }

    ?>
    <h2>矩形+對角線</h2>
    <?php
        $h_rectangle=8;
        $w_rectangle=10;
        for($i=0 ; $i<=$h_rectangle ; $i++){
            for($j=0 ; $j<=$w_rectangle ; $j++){
                if($i==0 || $i==$h_rectangle){
                    echo "*";
                }else if($j==0 || $j == $w_rectangle || $i==$j || $i==($w_rectangle-$j)){
                    echo "*";
                }else{
                    echo " &nbsp";
                }
            }
            echo "<br>";
        }
    ?>
    <h2>矩形中間+十字</h2>
    <?php
        $w_rectangle=7;
        $h_rectangle=7;
        $w_mid=$w_rectangle/2;
        $h_mid=$h_rectangle/2;

        for($i=0 ; $i<=$h_rectangle ; $i++){
            for($j=0 ; $j<=$w_rectangle ;$j++){
                    if($i==0 || $i==$h_rectangle){
                        echo "*";
                    }else if($j==0 || $j == $w_rectangle || $j==$w_mid || $i==$h_mid){
                        echo "*";
                    }else{
                        echo " &nbsp";
                    }
            }
            echo "<br>";
        }

    ?>

    
</body>
</html>