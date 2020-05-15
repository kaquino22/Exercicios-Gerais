<?php

$a = 12;
$b = 5;
$c = 10;


if ($a > $b && $b > $c){
echo "
<div style='border:3px solid; text-align:'center''>
<p style='color:blue;text-align: center; '>$c $b $a</p></div>";
}
elseif ($c > $b && $b > $a){
echo "
<div style='border:3px solid;text-align:'center''>
<p style='color:blue;text-align: center;'>$a $b $c</p></div>";
}
elseif ($c > $a && $a > $b){
    echo "
<div style='border:3px solid;'>
<p style='color:blue; font-size:50px;text-align: center;'>$b $a $c</p></div>";
}
elseif ($b > $a && $a > $c){
    echo "
<div style='border:3px solid;'>
<p style='color:blue; font-size:50px;text-align: center;'>$c $a $b</p>
</div>
";
}
elseif ($a > $c && $c > $b){
    echo "
<div style='border:3px solid;'>
<p style='color:blue; font-size:50px;text-align: center;'>$b $c $a</p></div>";
}
elseif ($b > $c && $c > $a){
        echo "
<div style='border:3px solid;'>
<p style='color:blue; font-size:50px;text-align: center;'>$b $c $a</p></div>";
}else{
    echo '
<div style="border:3px solid;">
<p style="color:red; font-size:50px;text-align: center;">Há Números Iguais</p></div>';
}    
?>