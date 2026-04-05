<?php 

$arrString = ['warrior','elite','master','grandmaster','epic',
              'legend','mythic','mythical honor','mythical glory','mythical imortal'];

$panjangArr = count($arrString);
echo"$panjangArr <br>";

$RankMobilegends = $arrString[7];
$sub = substr($RankMobilegends,9,13);
echo "$RankMobilegends <br>";
echo "$sub <br>";

?>