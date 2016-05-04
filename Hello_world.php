<?php

echo "Hello World! \n";
echo "中文也可以？ \n";
$x=1234567;
$y=123;
$z="10";
$a="5";
$b=$z.$a;
    

//echo value of variable

echo $x+$y;

echo "\n";

echo $z+1;

echo "\n";

echo $z.$a;

echo "\n";

    


//loop

$l=0;

echo $l;

echo "\n";
    while($l<=10){

        for($print=0;$print<=$l;$print++)
        {
            echo "*";
        }
        echo "\n";


        $l=$l+1;

    }


    // loop 2
    
    for($x=1;$x<=9;$x++)
    {


        for($y=1;$y<=9;$y++)
        {
            echo $x."*".$y."=";
            echo sprintf("%02d",$x*$y);
            echo " ";
        }

        echo "\n";
    }

    // loop3
    
    function fib($n){

        if($n==1||$n==2){
            return 1;
        }else{
            return fib($n-1)+fib($n-2);


        }

    }

    for($f=0;$f<=10;$f++){

        if($f==0){

            echo "0,";
        }else{
 
            
            if($f!=10){
                echo fib($f).",";
            }else{
                echo fib($f);

            }

        }
    }




?>
