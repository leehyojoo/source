<?php
// for문으로 섭씨/화씨 환산표 출력
    echo "-------------------<br>";
    echo "섭씨 화씨<br>";
    echo "-------------------<br>";

    for ($c=-10; $c<= 30; $c+=5) {
        $f = ($c * 9/5) + 32;       // $f : 화씨
        echo $c." &nbsp; ".$f."<br>";
    }
    echo "--------------------";    

    /* 
-------------------
섭씨 화씨
-------------------
-10   14
-5   23
0   32
5   41
10   50
15   59
20   68
25   77
30   86
--------------------
    */
?>