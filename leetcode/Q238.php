<?php

/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/5/2
 * Time: 下午3:28
 */
class Q238
{
    /*
     * public int[] productExceptSelf(int[] nums) {
    int[] result = new int[nums.length];
    for (int i = 0, tmp = 1; i < nums.length; i++) {
        result[i] = tmp;
        tmp *= nums[i];
    }
    for (int i = nums.length - 1, tmp = 1; i >= 0; i--) {
        result[i] *= tmp;
        tmp *= nums[i];
    }
    return result;
}
     */
    function productExceptSelf($nums) {
        $result = [];
        $tmp =1;
        for ($i=0;$i<count($nums);++$i){
            $result[$i]=$tmp;
            $tmp*=$nums[$i];
        }
        error_log(print_r($result, true));
        $tmp=1;
        for($i=count($nums)-1;$i>=0;--$i){
            $result[$i] *=$tmp;
            $tmp *=$nums[$i];

        }
        return $result;
    }
}
$nums=[1,2,3,4];
$class= new Q238();
$result = $class->productExceptSelf($nums);
echo print_r($result, true);