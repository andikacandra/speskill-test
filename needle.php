<?php 
    function findNeedle($arrayData, $key){
        $indexKey = [];
        
        for ($i=0; $i < count($arrayData); $i++) { 
            if ($arrayData[$i] == $key) {
                $indexKey[] = $i;
            }
        }

        if(count($indexKey) != 0){
            return implode(',', $indexKey).' as the index of the needle ('.$key.')';
        }
    }

    echo findNeedle(['red', 'blue', 'yellow', 'black', 'grey'], 'blue');
?>