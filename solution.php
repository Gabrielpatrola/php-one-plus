function solution($digits) {
    $length = count($digits) -1;
    
    while ($length >= 0){
        if($digits[$length] != 9){
            $digits[$length] = $digits[$length] + 1;
            return $digits;
        }
        var_dump($digits[$length]);
        $digits[$length]  = 0;
        $length--;
    }
    
    $newArray = array();
    $newArray[0] = 1;
    
    $result = array_merge($newArray, $digits);
    return $result;
}
