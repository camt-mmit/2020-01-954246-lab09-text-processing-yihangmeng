<?php
/*ID: 602110195
Name: Zhang Hao(Henry)
Wechat: hikki*/
$c=fopen($_SERVER['argv'][2],'r');
for($k=0;;$k++){
    $cg[$k]=trim(fgets($c,4096));
    if(feof($c)){
    break;
    }
}fclose($c);
$cga=implode(" ",$cg);
$cgs=explode(" ",$cga);
for($j=0;$j<=count($cgs);$j++){
$low[$j]=strtolower($cgs[$j]);
$uc[$j]=ucwords($low[$j]);
}$f=fopen($_SERVER['argv'][1],'r');
$n=0;
for($i=0;;$i++){
    $fg[$i]=trim(fgets($f,4064));
    if(feof($f)){
        break;
    }$n++;
}fclose($f);
for($i=0;$i<=$n;$i++){
    $rf=str_ireplace($low,$uc,$fg);
}for($h=0;$h<=$n;$h++){
    echo$rf[$h],"\n";
}
?>