<?php


function isPalindrome($str){
    $len = mb_strlen($str);
    $firstPart = '';
    $secondPart = '';

    if($len % 2 === 0){
        $firstPart = mb_substr($str,0,$len/2);
        $secondPart = mb_substr($str,$len/2,$len/2);
    }
    else{
        $firstPart = mb_substr($str,0,floor($len/2));
        $secondPart = mb_substr($str,ceil($len/2),floor($len/2));
    }

    for($i = 0,$j = mb_strlen($secondPart)-1;
        $i <= mb_strlen($firstPart) && $j >= 0; $i++,$j-- )
        {
            if(strcmp(mb_substr($firstPart,$i,1), mb_substr($secondPart,$j,1))!=0)
                return false;
        }
        return true;
}
echo isPalindrome('radar') . "\n";
echo isPalindrome('maam') . "\n";
echo isPalindrome('a') . "\n"; 
echo isPalindrome('abs') . "\n"; 
echo isPalindrome('шалаш') . "\n";