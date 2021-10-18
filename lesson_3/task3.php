<?php
$districts = array(
	"Moscowskaya oblast" => array("Moscow", "Zelenograd", "Klin"),
	"Leningradskaya oblast" => array("Sanct-Peterburg", "Vsevolzshk", "Paplovsk", "Kronshtad"),
	"Ryazanskaya oblast" => array("Ryazan", "Kasimov", "Skopin")
	);
	
	foreach ($districts as $key => $value) {
    
		echo "<br>{$key}:<br>";
			foreach ( $value as $value2){
				echo "{$value2}, ";
			};		
	};
    //print_r($districts);

	
