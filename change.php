<?php
if ($bonus_ao == "1") {$carte_bonus = "40";} else {$carte_bonus = "0";}
if ($change == "carte_A")
	{
	$carte = $carte_A;
	$carte_A = rand(1,41);
	while ($carte_A == $carte_B OR $carte_A == $carte_C OR $carte_A == $carte_D OR $carte_A == $carte_E OR $carte_A == $carte_bonus OR $carte_A == $carte)
			{
			$carte_A = rand(1,41);
			}
	}
	
if ($change == "carte_B")
	{
	$carte = $carte_B;
	$carte_B= rand(1,41);
	while ($carte_B == $carte_A OR $carte_B == $carte_C OR $carte_B == $carte_D OR $carte_B == $carte_E OR $carte_B == $carte_bonus OR $carte_B == $carte)
			{
			$carte_B = rand(1,41);
			}
	}
	
if ($change == "carte_C")
	{
	$carte = $carte_C;
	$carte_C = rand(1,41);
	while ($carte_C == $carte_A OR $carte_C == $carte_B OR $carte_C == $carte_D OR $carte_C == $carte_E OR $carte_C == $carte_bonus OR $carte_C == $carte)
			{
			$carte_C = rand(1,41);
			}
	}
	
if ($change == "carte_D")
	{
	$carte = $carte_D;
	$carte_D = rand(1,41);
	while ($carte_D == $carte_A OR $carte_D == $carte_B OR $carte_D == $carte_C OR $carte_A == $carte_E OR $carte_D == $carte_bonus OR $carte_D == $carte)
			{
			$carte_D = rand(1,41);
			}
	}
	
if ($change == "carte_E")
	{
	$carte = $carte_E;
	$carte_E = rand(1,41);
	while ($carte_E == $carte_A OR $carte_E == $carte_B OR $carte_E == $carte_C OR $carte_E == $carte_D OR $carte_E == $carte_bonus OR $carte_E == $carte)
			{
			$carte_E = rand(1,41);
			}
	}
?>