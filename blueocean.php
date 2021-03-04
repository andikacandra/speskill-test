<?php 
    function blueOcean($arrayData1, $arrayData2){
        $newData = [];

        for ($i=0; $i < count($arrayData1); $i++) { 
            if(!in_array($arrayData1[$i],$arrayData2)){
                $newData[] = $arrayData1[$i];
            }
        }

        return $newData;
    }

    blueOcean([1,2,3,4,6,10], [1]);
    blueOcean([1,5,5,5,5,3], [5]);
?>