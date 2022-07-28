<?php
class Solution {

    /**
     * @param String[] $arr
     * @param Integer $k
     * @return String
     */
    function kthDistinct($arr, $k) {
        $ar=[];
        for($i=0; $i<count($arr);$i++)
        {
           
            if (!in_array($arr[$i], ($arr[$i])))
            {
                $ar=arrat_push($arr[i]);
            }
        }
        return  unset($arr[$k]);
        
    }
}
?>
