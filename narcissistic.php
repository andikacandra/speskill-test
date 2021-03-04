<?php  

narcissistic(153);
narcissistic(111);

function narcissistic($number=false){
    if ($number) {
        $narcissistic   = 0;

        $arrNumber    = array_map('intval', str_split($number));

        for ($i=0; $i < strlen($number); $i++) { 
            $narcissistic   += pow($arrNumber[$i], strlen($number));
        }

        return ($number == $narcissistic) ? 'true' : 'false';
    }
}

?>