<?php
// 以下をfor文を使用して表示してください。

// 6
// 54
// 321

for ($i = 3; $i > 2; $i--) {
    for ($j = 5; $j > 4; $j--) {
        for ($k = 6; $k > 5; $k--) {
            echo $k;
            echo "\n";
        }
        echo $j;
        echo $j - 1;
        echo "\n";
    }
    echo $i;
    echo $i - 1;
    echo $i - 2;
    echo "\n";
}
