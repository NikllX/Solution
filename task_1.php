<?php
    //$numbers = array(5,6,7,8,9,10,11,1,2,3,4);
    $numbers = array(
        100, 22, 38, 61, 87, 13, 83, 53, 62, 4, 70, 45, 28, 
        64, 41, 34, 30, 28, 34, 97, 43, 44, 84, 94, 68, 44, 
        7, 78, 14, 54, 92, 27, 47, 23, 83, 12, 69, 42, 47, 
        70, 69, 98, 49, 25, 86, 85, 31, 93, 93, 32, 98, 63, 
        63, 11, 33, 88, 5, 43, 38, 45, 12, 47, 43, 44, 93, 
        25, 32, 86, 100, 66, 64, 67, 13, 1, 3, 100, 59, 98, 
        47, 64, 16, 6, 44, 93, 5, 98, 85, 23, 34, 51, 58, 81, 
        67, 62, 71, 19, 2, 23, 39, 55);

    sort($numbers); // сортировка по возрастанию

    $mas_array = array();
    $new_array = array();
    $flag = true;
    for( $i = 0; $i<count($numbers) -1;$i++ ) 
    {
        
        if($numbers[$i] == $numbers[$i+1]-1)
        {
            array_push($new_array,$numbers[$i]);
            echo  "   " , $numbers[$i] , "  " , $numbers[$i+1]-1, "   ", $i, "   ";
            while ($numbers[$i] == $numbers[$i+1]-1) 
            {
                echo  "   " , $numbers[$i] , " == " , $numbers[$i+1], "   " ,$i , "   ";
                array_push($new_array, $numbers[$i+1]);
                print_r( $new_array );
                
                if ($i < count($numbers)-2)
                {
                    $i++;
                    
                } else
                {
                    
                    break;
                }
            }
        } 
        
            array_push($mas_array, $new_array);
            $new_array =  array();
    }
    print_r( $mas_array );
    $count_array = array(); // массив, содержащий количество элементов массива для всех массивов $mas_array
    foreach($mas_array as $array) 
    {
        array_push($count_array,count($array));
    }
    //print_r( $count_array );
    $max= array_keys($count_array, max($count_array))[0];
    print_r($mas_array[$max]); // ответ
?>