<?php
function rekenen($manier1, $manier2, $somtype){
    if ($somtype == "plus"){
        return ($manier1+$manier2);
    }elseif ($somtype == "minus"){
        return ($manier1-$manier2);
    }elseif ($somtype == "multiply"){
        return ($som1*$som2);
    }elseif ($somtype == "divide"){
        return ($som1/$som2);
    }else{
        echo "what is this?";
    }
}
$rekenen = rekenen(4,7,"divide");
if ($rekenen != null){
    echo $rekenen;
}
?>