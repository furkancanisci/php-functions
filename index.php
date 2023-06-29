<?php      
    function character_lower($string)
    {
        $bool=0;
        $array_string[] = str_split($string);
        $lowstring[] = str_split(mb_strtolower($string));
        for ($i=0; $i < count($array_string) ; $i++) { 

            if ($array_string[0][$i]=="I" ) {
                $bool++;
                $lowstring[0][$i]="ı";
            } else if($array_string[0][$i]=="İ") {

                $lowstring[0][$i]="i";

            }
        }
        if($bool>0){
            return implode("", $lowstring[0]);            
        } else {
            return mb_strtolower($string);
        }
    }

    function character_upper($string) 
    {
        $bool=0;
        $array_string[] = str_split($string);
        $upstring[] = str_split(mb_strtoupper($string));
        for ($i=0; $i < count($array_string) ; $i++) { 

            if ($array_string[0][$i]=="i" ) {
                $bool++;
                $upstring[0][$i]="İ";
            } else if($array_string[0][$i]=="ı") {

                $upstring[0][$i]="I";

            }
        }
        if($bool>0){
            return implode("", $upstring[0]);            
        } else {
            return mb_strtoupper($string);
        }
    }

    $string="IİUÜOÖ";
    $string2="ıiuüoö";
    $a=array(0 => array("a"=>"red"), 1 => array("b"=>"green"), 2=> array("c"=>"blue"));
    $string3="red";

    function array_search_recursive($search, $array)
    {
        foreach ($array as $key => $value) {
            if(is_array($array[$key]))
            {
                array_search_recursive($search, $array[$key]);
            } else {

                if($value==$search)
                {
                    return $key;
                } else {
                    continue;
                }
            }
        }
    } 

    function export_array_values($array)
    {
        $i=0;
        foreach ($array as $value) {
            foreach ($value as $v) {
                $array[$i]=$v;
                $i++;
            }
        }
        return $array;
    }

    function buble_sort($array) 
    { 
        $c=count($array); 
        $control=0; 
        for($i=0; $i< $c; $i++){ 
            if($i==5) 
            { 
                break; 
            } 
            if ($array[$i] > $array[$i+1]) { 
                $var=$array[$i]; 
                $array[$i]=$array[$i+1]; 
                $array[$i+1]=$var; 
            }   
        }  
     
       for($j=0; $j< $c; $j++) 
        { 
            if($j==5) 
            { 
                break; 
            } 
            if($array[$j] > $array[$j+1]) 
            { 
                $control++; 
            } 
        } 
        if($control>0) 
        { 
            buble_sort($array); 
        } else if ($control==0) 
        { 
            var_dump($array); 
        } 
    }
?>  