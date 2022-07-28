<?php
class Solution {

    /**
     * @param String[] $arr
     * @param Integer $k
     * @return String
     */
    function kthDistinct($arr, $k) {
        $ar=array();
        for($i=0; $i<=count($arr);$i++)
        {
           $a=$arr;
            if (!in_array($arr[$i], array_splice($a, $i)))
            {
                $ar[]=$arr[$i];
            }
        }
        return  $ar;
        
    }
}
?>
