<?php
$arr = array(1, 3, 8, 2, 5, 7, 4, 0);

print("Sebelum Di Sorting :<br>");
print_r($arr);

$arr = bubble_sort($arr);
print("<br> Setelah Disorting (Buble Sort) :<br>");
print_r($arr);


function bubble_sort($arr)
{
    do {
        $swap = false;
        for ($i = 0, $a = count($arr) - 1; $i < $a; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                list($arr[$i + 1], $arr[$i]) =
                    array($arr[$i], $arr[$i + 1]);
                $swap = true;
            }
        }
    } while ($swap);
    return $arr;
}
