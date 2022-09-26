<?php
# tìm 1 số trong mảng ,VD:tìm số 5 trong mảng 
$array =['1','2','3','4','5','6','7'];

function LinearSearch($array){
    $quantity = count($array);
    $dem = 0;
    for($i = 0; $i<$quantity;$i++){
        if($array[$i]==5){
            $dem +=1 ;
        }
    }
    echo  "có $dem số 5";
}
LinearSearch($array);