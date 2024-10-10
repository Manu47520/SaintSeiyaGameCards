<?php
// tirage de la carte A pour le joueur
$carte_A = rand(1,41);

// tirage de la carte B pour le joueur
$carte_B = rand(1,41);
while ($carte_B == $carte_A)
			{
			$carte_B = rand(1,41);
			}

// tirage de la carte C pour le joueur
$carte_C = rand(1,41);
while ($carte_C == $carte_A OR $carte_C == $carte_B)
			{
			$carte_C = rand(1,41);
			}

// tirage de la carte D pour le joueur
$carte_D = rand(1,41);
while ($carte_D == $carte_A OR $carte_D == $carte_B OR $carte_D == $carte_C)
			{
			$carte_D = rand(1,41);
			}

// tirage de la carte E pour le joueur
$carte_E = rand(1,41);
while ($carte_E == $carte_A OR $carte_E == $carte_B OR $carte_E == $carte_C OR $carte_E == $carte_D)
			{
			$carte_E = rand(1,41);
			}
?>