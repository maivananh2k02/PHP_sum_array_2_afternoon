<?php
function sumArrayItem($arr, $number)
{
    $sum=0;
    for ($i = 0; $i < count($arr[$number] ); $i++) {
        $sum+=$arr[$number][$i];
    }
    return $sum;
}
$arr1=[
    [1, 2, 3, 4, 5],
    [1, 55, 3, 46, 5],
    [1, 2, 100, 4, 5],
    [1, 32, 3, 4, 5],
    [1, 2, 3, 4, 10]
];
echo sumArrayItem($arr1,1);
