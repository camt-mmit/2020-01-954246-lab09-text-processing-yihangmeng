<?php
$file = file_get_contents($argv[1]);
$line = explode("\r\n",$file);
sscanf($line[0],"%s %s",$first,$last);
echo "Transcation for :";
	echo"\n\t First name:{$first}";
	echo"\n\t Last name:{$last}";
$balance = 0;
echo"\nNumber of transactions:".$line[1];
for($i=2;$i<count($line);$i++)
{
	$text[$i] = $line[$i];
	
	if($text[$i][0]=="+")
	{
		echo "\nDeposit :";
	}
	else
	{
		echo"\nWithdraw :";
	}
	echo $text[$i]."\n";
	$balance += $text[$i];
}
echo"Balance :".$balance;
