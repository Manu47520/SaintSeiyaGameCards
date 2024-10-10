<?php
// test des bonus du joueur
if ($bonus_bc == "1")
	{
	if ($ATT_j != "cw" AND $ATT_j != "bc" AND $ATT_j != "ae" AND $ATT_j != "mj" AND $ATT_j != "ao")
		{
		$ATT_j = $ATT_j*2;$bonus_bc = "0";
		}
	}
	
if ($bonus_ao == "1")
	{
	if ($ATT_adv != "cw" AND $ATT_adv != "bc" AND $ATT_adv != "ae" AND $ATT_adv != "mj" AND $ATT_adv != "ao")
		{
		$ATT_adv = $ATT_adv/2;
		$rao--;
		if ($rao <= "0") {$bonus_ao = "0";}
		}
	}

// test des bonus de l'adversaire
if ($bonus_bc_adv == "1")
	{
	if ($ATT_adv != "cw" AND $ATT_adv != "bc" AND $ATT_adv != "ae" AND $ATT_adv != "mj" AND $ATT_adv != "ao")
		{
		$ATT_adv = $ATT_adv*2;$bonus_bc_adv = "0";
		}
	}
	
if ($bonus_ao_adv == "1")
	{
	if ($ATT_j != "cw" AND $ATT_j != "bc" AND $ATT_j != "ae" AND $ATT_j != "mj" AND $ATT_j != "ao")
		{
		$ATT_j = $ATT_j/2;
		$rao_adv--;
		if ($rao_adv <= "0") {$bonus_ao_adv = "0";}
		}
	}

// calcul des attaques
// test des coups speciaux
if ($special == "1" OR $special_adv == "1")
	{
	if ($ATT_j == "cw") {$V = "0"; $ATT_j = "Crystal Wall !"; $dommage = "Aucun Dommages.<br><br>"; $resultat = "<br><br>Egalit&eacute; ! (".$ATT_j." vs ".$ATT_adv.")";}
	if ($ATT_adv == "cw") {$V = "0"; $ATT_adv = "Crystal Wall !"; $dommage = "Aucun Dommages.<br><br>"; $resultat = "<br><br>Egalit&eacute; ! (".$ATT_j." vs ".$ATT_adv.")";}
	if ($ATT_j == "bc" AND $ATT_adv == "bc") {$V = "0"; $bonus_bc = "1"; $bonus_bc_adv = "1"; $ATT_j = "Brule mon Cosmos !"; $ATT_adv = "Brule mon Cosmos !"; $dommage = "Aucun Dommages.<br><br>"; $resultat = "<br><br>Egalité ! (".$ATT_j." vs ".$ATT_adv.")";}
	if ($ATT_j == "bc" AND $ATT_adv != "bc") {$V = "2"; $bonus_bc = "1"; $ATT_j = "Brule mon Cosmos !"; $PV = $PV-$ATT_adv; $dommage = $ATT_adv." Point de Dommages.<br><br>"; $resultat = "Gagnant: ".$description_chevalier_adv." (".$ATT_j." vs ".$ATT_adv.")";}
	if ($ATT_adv == "bc" AND $ATT_j != "bc") {$V = "1"; $bonus_bc_adv = "1"; $ATT_adv = "Brule mon Cosmos !"; $PV_adv = $PV_adv-$ATT_j; $dommage = $ATT_j." Point de Dommages."; $resultat = "<br><br>Gagnant: ".$description_chevalier." (".$ATT_j." vs ".$ATT_adv.")";}
	if ($ATT_j == "ae" AND $ATT_adv == "ae") {$V = "0"; $ATT_j = "Athena Exclamation !"; $ATT_adv = "Athena Exclamation !"; $dommage = "Aucun Dommages.<br><br>"; $resultat = "<br><br>Egalit&eacute; ! (".$ATT_j." vs ".$ATT_adv.")";}
	if ($ATT_j == "ae" AND $ATT_adv == "cw") {$V = "0"; $ATT_j = "Athena Exclamation !"; $ATT_adv = "Crystal Wall !"; $dommage = "Aucun Dommages.<br><br>"; $resultat = "<br><br>Egalit&eacute; ! (".$ATT_j." vs ".$ATT_adv.")";}
	if ($ATT_adv == "ae" AND $ATT_j == "cw") {$V = "0"; $ATT_adv  = "Athena Exclamation !"; $ATT_j = "Crystal Wall !"; $dommage = "Aucun Dommages.<br><br>"; $resultat = "<br><br>Egalit&eacute; ! (".$ATT_j." vs ".$ATT_adv.")";}
	if ($ATT_j == "ae" AND $ATT_adv != "ae") {$V = "1"; $ATT_j = "Athena Exclamation !"; $PV_adv = $PV_adv/2; $PV_adv = round($PV_adv); $dommage = $PV_adv." Point de Dommages.<br><br>"; $resultat = "<br><br>Gagnant: ".$description_chevalier." (".$ATT_j." vs ".$ATT_adv.")";}
	if ($ATT_adv == "ae" AND $ATT_j != "ae") {$V = "2"; $ATT_adv = "Athena Exclamation !"; $PV = $PV/2; $PV = round($PV); $dommage = $PV." Point de Dommages.<br><br>"; $resultat = "<br><br>Gagnant: ".$description_chevalier_adv." (".$ATT_j." vs ".$ATT_adv.")";}
	if ($ATT_j == "mj") {$V = "0"; $PV = $PV+150; $ATT_j = "Mû donne moi des force !"; $dommage = "Aucun Dommages.<br><br>"; $resultat = "<br><br>Egalit&eacute; ! (".$ATT_j." vs ".$ATT_adv.")";}	
	if ($ATT_adv == "mj") {$V = "0"; $PV_adv = $PV_adv+150; $ATT_adv = "Mû donne moi des force !"; $dommage = "Aucun Dommages.<br><br>"; $resultat = "<br><br>Egalit&eacute; ! (".$ATT_j." vs ".$ATT_adv.")";}	
	if ($ATT_j == "ao") {$V = "0"; $bonus_ao = "1"; $rao = "5"; $ATT_j = "Protection de l'Armure d'Or !"; $dommage = "Aucun Dommages.<br><br>"; $resultat = "<br><br>Egalit&eacute; ! (".$ATT_j." vs ".$ATT_adv.")";}
	if ($ATT_adv == "ao") {$V = "0"; $bonus_ao_adv = "1"; $rao_adv = "5"; $ATT_adv = "Protection de l'Armure d'Or !"; $dommage = "Aucun Dommages.<br><br>"; $resultat = "<br><br>Egalit&eacute; ! (".$ATT_j." vs ".$ATT_adv.")";}
	}
else
	{
	//calcul des attaques standard
	if ($ATT_j > $ATT_adv) {$V = "1"; $dommage = $ATT_j-$ATT_adv." Point de Dommages.<br><br>"; $PV_adv = $PV_adv-($ATT_j-$ATT_adv); $resultat = "<br><br>Gagnant: ".$description_chevalier." (".$ATT_j." vs ".$ATT_adv.")";}
	if ($ATT_j < $ATT_adv) {$V = "2"; $dommage = $ATT_adv-$ATT_j." Point de Dommages.<br><br>"; $PV = $PV-($ATT_adv-$ATT_j); $resultat = "<br><br>Gagnant: ".$description_chevalier_adv." (".$ATT_j." vs ".$ATT_adv.")";}
	if ($ATT_j == $ATT_adv) {$V = "0"; $dommage = "Aucun Dommages.<br><br>"; $resultat = "<br><br>Egalit&eacute; ! (".$ATT_j." vs ".$ATT_adv.")";}
	}	
?>