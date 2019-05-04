<?php
$cf=0;
$random=rand(1,3);
$n=$_POST['number'];
$n=(int)$n;

for($j=1;$j<$n;$j++){
for($i=1;$i<=3;$i++)
{
	if($i!=3){
		$array[$i]=rand(0,1);
		
	}
	else if($array[$i-2] == 1 || $array[$i-1] == 1)
			$array[$i]=0;
		else if($array[$i-2] == 0 && $array[$i-1] == 0)
			$array[$i]=1;
		
}

if($array[1] == 1 && $array[2] == 1)
{
	$array[rand(1,2)]=0;
}
for($i=1;$i<=3;$i++){
	if($array[$i]==1){
		echo 'Usa buna:'.$i;
		echo '<br>';
	}
	else{
		echo 'Usa rea:'.$i;
		echo '<br>';
	}
}
echo '<br>'.'<br>';	
$chose=rand(1,3);
echo 'Aleg usa:'.$chose;
echo '<br>'.'<br>';

if($array[$chose]==0)
	$cf++;
}
echo '<br>'.'<br>';
echo '<br>'.'<br>';
echo '<br>'.'<br>';
echo '<br>'.'<br>';
$cf=$cf/$n;
echo $cf*100;
echo '%';
echo '<!DOCTYPE html>
<html>
<body>

<h2>TRY AGAIN</h2>
<p><a href="http://localhost/3DoorsParadox">Incearca din nou!</a></p>

</body>
</html>';