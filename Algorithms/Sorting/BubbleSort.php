<?php 

$Array = ['1','5','9','2','4','9'];
$quantity = count($Array);
# sắp xếp nổi bọt giảm dần

for($i =0;$i<= $quantity ;$i++ ) {
    for ($j = 0; $j < $quantity; $j++) {
        if ($Array[$i] > $Array[$j]) // nếu phần tử $i  hơn phần tử phía sau
        {
            // hoán vị
            $tmp = $Array[$j];
            $Array[$j] = $Array[$i];
            $Array[$i] = $tmp;
        }
    }
}
for($i =0; $i <5 ;$i++){
    echo $Array[$i];
}
