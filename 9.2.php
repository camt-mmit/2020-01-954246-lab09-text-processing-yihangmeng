<?php
$file = file_get_contents($argv[1]);
$line = explode("\r\n",$file);

for($i=0;$i<$line[0];$i++)
{
	$text[$i]=$line[$i+1];
	$tmp=explode(" ",$text[$i]);
	$name=$tmp[0];
	$number=$tmp[1];
	$res = str_repeat("*",$number);
	echo $name.":".$res."\n";
}
Q3:
<?php
$file = file_get_contents($argv[1]);
$res = str_replace(".","\r\n",$file);
echo $res;
