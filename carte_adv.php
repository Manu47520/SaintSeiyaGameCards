<?php
if ($bonus_ao_adv == "1"){$carte_bonus_adv = "40";} else {$carte_bonus_adv = "0";}
if ($bonus_bc_adv == "1")
	{
	$carte_adv = rand(1,41);
	while ($carte_adv == $carte_A OR $carte_adv == $carte_B OR $carte_adv == $carte_C OR $carte_adv == $carte_D OR $carte_adv == $carte_E OR $carte_adv == $carte OR $carte_adv == $carte_bonus_adv OR $carte_adv == "36" OR $carte_adv == "37" OR $carte_adv == "38" OR $carte_adv == "39" OR $carte_adv == "40")
			{
			$carte_adv = rand(1,41);
			}
	}
else
	{
	$carte_adv = rand(1,41);
	while ($carte_adv == $carte_A OR $carte_adv == $carte_B OR $carte_adv == $carte_C OR $carte_adv == $carte_D OR $carte_adv == $carte_E OR $carte_adv == $carte OR $carte_adv == $carte_bonus_adv)
			{
			$carte_adv = rand(1,41);
			}
	}
?>