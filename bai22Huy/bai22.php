<?php

//Không dùng đệ quy
function calMonth($money,$rate){
    $tang = $money;
    $month = 0;
    $lai = $rate / 100;
    while($tang < 2 * $money){
        $tang = $tang + ($tang * $lai);
        $month++;
    }
    return $month;
}

//Có dùng đệ quy
function calMoney($money,$rate, $month){
    $lai = $rate / 100;
    if($month  < 1){
        return $money;
    }
    else{
        return calMoney($money, $rate, $month - 1) + (calMoney($money, $rate, $month - 1) * $lai);
    }
}

function calMonth2($money,$rate){
    $month = 0;
    while(calMoney($money, $rate, $month) < 2 * $money){
        $month++;
    }
    return $month;
}

print(calMonth(1000, 5));
echo '<br>';
print(calMonth2(1000,5));