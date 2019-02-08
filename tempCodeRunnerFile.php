<?php 

// prime number 

function prime ($n){
    for($i=1; $i<=$n; $i++){
        $counter= 0;
        for($a=1; $a<=$i; $a++){
            if($i % $a==0){
                $counter++;
            }
        }
        if($counter==2){
            echo "$i is prime number \n";
        }
    }
}

prime(100);