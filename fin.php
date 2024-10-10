<div align="center">
<?php
if ($PV <= "0") {$message_fin = "Le combat est remporté par ".$description_chevalier_adv;}
if ($PV_adv <= "0") {$message_fin = "Le combat est remporté par ".$description_chevalier;}
echo $message_fin;
?>
</div>