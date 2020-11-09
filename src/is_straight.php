<?php 

function is_s($s){
	$m=0;
	foreach($s as $c) { $d=substr($c,0,-1); $i=($d=='a'?14:($d=='j'?11:($d=='q'?12:($d=='k'?13:intval($d))))); if($i==14) $m|=0x2; $m|=(1<<$i);}
	for($i=10;$i>0;$i--) if(!(($m&(0x1F<<$i))^(0x1F<<$i))) return 1;
	return 0;
}
