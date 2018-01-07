<?php
function miroir($MAT) {
	echo "<table>";
	echo "<tr>";
	for($i = 0; $i < sizeof ( $MAT ); $i ++) {
		echo "</tr>";
		echo "<td>";
		for($j = 0; $j < sizeof ( $MAT[$i] ); $j ++) {
			echo "</td>";
			//$MAT[$i][$j] = $MAT2[$j][$i]; test
			echo $MAT[$j][$i];
		}
	}
	echo "</table>";
}



function affiche($MAT) {
    for($i = 0; $i < sizeof ( $MAT ); $i ++) {
        echo("[");
        for($j = 0; $j < sizeof ( $MAT[$i] ); $j ++) {
            echo($MAT[$i][$j]);
            if($j != sizeof($MAT[$i])){
                echo(",");
            }
        }
        echo("]");
    }
}
$MAT[0] = array('0','0','255');
$MAT[1] = array('0','255','0');
$MAT[2] = array('255','0','0');
$MAT[3] = array('0','0','0');
miroir($MAT);
//affiche($MAT);
?>