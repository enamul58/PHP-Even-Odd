<?php


class EvenOdd
{
    function calculateEvenOdd( $data ){
        $num1 = $data['first_number'];
        $num2 = $data['second_number'];
        $check = $data['check'];
        $result ='';
        if($num1 <= $num2){
            for( $i = $num1; $i <= $num2; $i++ ){
                if( $i%2 != 0 && $check == 'Odd'){
                    $result .= $i." ";
                }
            }
            return $result;
        }else{

            for( $i = $num1; $i >= $num2; $i--){
                if( $i%2 == 0 && $check == 'Even'){
                    $result .= $i." ";
                }

            }
            return $result;
        }

    }
}