﻿<?php
// 以下をfor文を使用して表示してください。

// 123
// *12
// **1

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i - 1; $j++) {
        echo "*";
    }
    for ($k = 1; $k <= 4 - $i; $k++) {
        echo $k;
    }
    echo "\n";
}
