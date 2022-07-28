<?php
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */

    function isAnagram($s, $t) {
         if (strlen($s)==strlen($t))
         {
             $s = str_split($s);
             sort($s);
             $s=implode($s);
             
             $t = str_split($t);
             sort($t);
             $t=implode($t); 
             
         }
        if($s==$t)
        {
            return true;
        }
        else
        {
            return false;
        }
   
    }
}
?>
