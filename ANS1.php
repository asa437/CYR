<?php

echo "f(957)=>" . f(957) . "<br>";
echo "f(3345678)=>" . f(3345678) . "<br>";
echo "f(-1234.45)=>" . f(-1234.45) . "<br>";


function f($num){ 
    if(!is_numeric($num)){ 
    return false; 
    } 
    $num = explode('.',$num); 

    if(!empty($num[1])){
        $r1 = $num[1]; 
        $j = strlen($num[0]) % 3; 
        $s1 = substr($num[0],0,$j);
        $sr = substr($num[0], $j);
        $i = 0;
        $rvalue = ""; 
        while($i <= strlen($sr)){ 
        $rvalue = $rvalue.','.substr($sr, $i, 3);
        $i = $i + 3; 
        } 
        $rvalue =  $s1 . $rvalue ;
        $rvalue = substr($rvalue,0,strlen($rvalue)-1);
        $rvalue = explode(',',$rvalue);
        if($rvalue[0]==0){ 
            array_shift($rvalue);
        } 
    
        $rv = $rvalue[0]; 
        for($i = 1; $i < count($rvalue); $i++){ 
        $rv = $rv.','.$rvalue[$i]; 
        } 
        $rvalue = $rv . '.' . $r1 ; 
        return $rvalue;
    }else{

        $j = strlen($num[0]) % 3;
        $s1 = substr($num[0],0,$j);
        $sr = substr($num[0], $j);
        $i = 0;
        $rvalue = ""; 
        while($i <= strlen($sr)){ 
        $rvalue = $rvalue.','.substr($sr, $i, 3);
        $i = $i + 3; 
        } 
        $rvalue =  $s1 . $rvalue ;
        $rvalue = substr($rvalue,0,strlen($rvalue)-1);
        $rvalue = explode(',',$rvalue);
        if($rvalue[0]==0){ 
            array_shift($rvalue);
        } 
        $rv = $rvalue[0]; 
        for($i = 1; $i < count($rvalue); $i++){ 
        $rv = $rv.','.$rvalue[$i]; 
        } 
        $rvalue = $rv ;
        return $rvalue;
    }

    } 

?>