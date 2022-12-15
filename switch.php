<?php
//
$i = 1;
switch($i){
    case 0:
        echo "i は　０です \n";
        break;
        
    case 1:
        echo "iは１です \n";
        break;
        
    default:
        echo "i　は　0と１　以外です　\n";
        break;
}

// PHP　８未満だと特に注意が必要なコード
$i = 2;
switch($i) {
    case '2a':
        echo "i は　'2a'です \n";
        break;
    
    case '2':
        echo "iは　'2'(string)です \n";
        break;
        
    case 2:
        echo "iは２(int)です \n";
        break;
}