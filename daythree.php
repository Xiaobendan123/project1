<html>

<body>

<?php
 
 $arr=array(16,9,8,65,4,2,19,5,1,23);
   
    function quick_sort($arr)
    {
        
        if(!is_array($arr)) return false;
        
        $length=count($arr);
        if($length<=1) return $arr;
        //定义两个空数组，用于存放分割后的数组
        $left=$right=array();
        
        for($i=1;$i<$length;$i++)
        {
            //判断当前元素的大小
            if($arr[$i]<$arr[0])
            {
                $right[]=$arr[$i];
            }
            else
            {
                $left[]=$arr[$i];
            }
        }
        //递归调用
        $left=quick_sort($left);
        $right=quick_sort($right);
        //合并分割数组
        return array_merge($left,array($arr[0]),$right);


        }
        
        $arr=quick_sort($arr);
        
        echo "<pre>";
        //将数组打出
        print_r($arr); 

 
?>

</body>
</html>