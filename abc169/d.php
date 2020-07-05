<?php

fscanf(STDIN, "%d", $N);

var_dump(pf($N));

function pf($n){
    $result = array();
    if($n===1){
        return [1];
    } 
     $init = 2;
    while($n !== 1){
     $i = $init;
      while($i < 0 *FFFFFF){
        if($n%$i == 0){
           $result[] = $i;
        break;
    }
    $i++;
   }
    $init =$i;
   }
   return $result;
   }

