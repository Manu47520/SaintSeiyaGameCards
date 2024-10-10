<?php
// recuperation des variables par URL
$round= isset($_GET['round']) ? $_GET['round'] : NULL;
$chevalier= isset($_GET['chevalier']) ? $_GET['chevalier'] : NULL;
$chevalier_adv= isset($_GET['chevalier_adv']) ? $_GET['chevalier_adv'] : NULL;
$PV = isset($_GET['PV']) ? $_GET['PV'] : NULL;
$PV_adv= isset($_GET['PV_adv']) ? $_GET['PV_adv'] : NULL;
$carte_A= isset($_GET['carte_A']) ? $_GET['carte_A'] : NULL;
$carte_B= isset($_GET['carte_B']) ? $_GET['carte_B'] : NULL;
$carte_C= isset($_GET['carte_C']) ? $_GET['carte_C'] : NULL;
$carte_D= isset($_GET['carte_D']) ? $_GET['carte_D'] : NULL;
$carte_E= isset($_GET['carte_E']) ? $_GET['carte_E'] : NULL;
$change= isset($_GET['change']) ? $_GET['change'] : NULL;
$bonus_bc= isset($_GET['bonus_bc']) ? $_GET['bonus_bc'] : NULL;
$bonus_bc_adv= isset($_GET['bonus_bc_adv']) ? $_GET['bonus_bc_adv'] : NULL;
$bonus_ao= isset($_GET['bonus_ao']) ? $_GET['bonus_ao'] : NULL;
$bonus_ao_adv= isset($_GET['bonus_ao_adv']) ? $_GET['bonus_ao_adv'] : NULL;
$rao= isset($_GET['rao']) ? $_GET['rao'] : NULL;
$rao_adv= isset($_GET['rao_adv']) ? $_GET['rao_adv'] : NULL;

// definition du round
$round++;

// definition du nom et de la description des chevaliers
include("chevaliers.php");

// tirage des cartes A, B, C, D, et E du joueur
include("change.php");

// recuperation des commentaires des cartes A, B, C, D, et E, ainsi que le CARTE posé du joueur
$test = $carte_A;
include("commentaires.php");
$commentaire_carte_A = $commentaire;
$img_carte_A = $img_carte;
$test = $carte_B;
include("commentaires.php");
$commentaire_carte_B = $commentaire;
$img_carte_B = $img_carte;
$test = $carte_C;
include("commentaires.php");
$commentaire_carte_C = $commentaire;
$img_carte_C = $img_carte;
$test = $carte_D;
include("commentaires.php");
$commentaire_carte_D = $commentaire;
$img_carte_D = $img_carte;
$test = $carte_E;
include("commentaires.php");
$commentaire_carte_E = $commentaire;
$img_carte_E = $img_carte;

// tirage de la carte adversaire
include("carte_adv.php");

//definition des commmentaires des cartes posé du joueur
$test = $carte;
include("commentaires.php");
$commentaire_carte = $commentaire;
$img_carte_j = $img_carte;

//definition des commmentaires des cartes posé de l'adversaire
$test = $carte_adv;
include("commentaires.php");
$commentaire_carte_adv = $commentaire;
$img_carte_adv = $img_carte;

// calcul de l'attaque du joueur
$test = $carte;
$valeur = $chevalier;
include("attaque.php");
$ATT_j = $ATT;
$special = $cs;
$pson_j = $pson;

// calcul dee l'attaque de l'adversaire
$test = $carte_adv;
$valeur = $chevalier_adv;
include("attaque.php");
$ATT_adv = $ATT;
$special_adv = $cs;
$pson_adv = $pson;

// comparaison des attaques
include("resultat.php");

// arrondi des points de vie des chevaliers
$PV = round($PV);
$PV_adv = round($PV_adv);

// definition si un son est a joueur pour les cartes
if ($pson_j == "1")
	{
	$son = "<embed src=\"sons/seiya.mp3\" width=\"0\" height=\"0\"></embed>";
	}
else
	{
	if ($pson_j == "2")
		{
		$son = "<embed src=\"sons/shiryu.mp3\" width=\"0\" height=\"0\"></embed>";
		}
	else
		{
		if ($pson_j == "3")
			{
			$son = "<embed src=\"sons/shun.mp3\" width=\"0\" height=\"0\"></embed>";
			}
		else
			{
			if ($pson_j == "4")
				{
				$son = "<embed src=\"sons/hyoga.mp3\" width=\"0\" height=\"0\"></embed>";
				}
			else
				{
				if ($pson_j == "5")
					{
					$son = "<embed src=\"sons/ikki.mp3\" width=\"0\" height=\"0\"></embed>";
					}
				else
					{
					if ($ATT_j == "Athena Exclamation !" OR $ATT_adv == "Athena Exclamation !")
						{
						$son = "<embed src=\"sons/ae.mp3\" width=\"0\" height=\"0\"></embed>";
						}
					else
						{
						if ($ATT_j == "Crystal Wall !" OR $ATT_adv == "Crystal Wall !")
							{
							$son = "<embed src=\"sons/cw.mp3\" width=\"0\" height=\"0\"></embed>";
							}
						else
						{
							if ($ATT_j == "Brule mon Cosmos !" OR $ATT_adv == "Brule mon Cosmos !")
								{
								$son = "<embed src=\"sons/cosmos.mp3\" width=\"0\" height=\"0\"></embed>";
								}
							else
								{
								if ($ATT_j == "Protection de l'Armure d'Or !" OR $ATT_adv == "Protection de l'Armure d'Or !")
								{
								$son = "<embed src=\"sons/armure.mp3\" width=\"0\" height=\"0\"></embed>";
								}
								else
									{
									$attacksound = rand(1, 7);	
									$son = "<embed src=\"sons/attack".$attacksound.".mp3\" width=\"0\" height=\"0\"></embed>";						
									}
								}	
							}
						}	
					}
				}
			}	
		}
	}
?>

<html>
<head>
<title>Seinaru kuro no tatakai</title>
<?php
$vainqueur = "";
if ($PV <= "0") {$vainqueur = "2"; $son = "<embed src=\"sons/dead.mp3\" width=\"0\" height=\"0\"></embed>";}
if ($PV_adv <= "0") {$vainqueur = "1"; $son = "<embed src=\"sons/win.mp3\" width=\"0\" height=\"0\"></embed>";}
if ($PV <= "0" OR $PV_adv <= "0") {echo "<meta http-equiv=\"REFRESH\" content=\"4; URL=vainqueur.php?round=$round&chevalier=$chevalier&chevalier_adv=$chevalier_adv&vainqueur=$vainqueur\">";}
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/javascript">
function music()
{
	var repetition,visibility,depart,fichier_son;
	const randomMusic = Math.floor(Math.random() * 5) + 1;
	//var fichier_son = "sons/vs.mp3";
	var fichier_son = "sons/music" + randomMusic + ".mp3";
	var repetition = "-1";
	var cache_panneau = "true";
	var depart = "true";
	document.write('<EMBED SRC="' + fichier_son +'" hidden=' + cache_panneau + ' autostart=' + depart + ' loop=' + repetition +'>');
}
</script>
<link rel="stylesheet" href="styles.css" type="text/css">
<style type="text/css">
.boite { /* définition de la boite 1 */
  position:absolute ; /* positionne la boite dans l'écran */ 
  top:0px ; /* à 80 pixels du haut de page */
  left: 0px ; /* et 30% du bord gauche de la page */
  height:100% ; /* hauteur de la boite */
  width:100% ; /* largeur de la boite */
  
  .perso {
            width: 169px; /* Largeur de la cellule */
            height: 225px; /* Hauteur de la cellule */
            background-image: url('images/perso_<?php echo $nom_chevalier; ?>.png');
            background-size: cover; /* Pour que l'image couvre la cellule */
            background-position: center; /* Pour centrer l'image */
            border: 0px solid #000; /* Bordure de la cellule */
        }
		
	.adversaire {
            width: 169px; /* Largeur de la cellule */
            height: 225px; /* Hauteur de la cellule */
            background-image: url('images/<?php echo $nom_chevalier_adv; ?>.png');
            background-size: cover; /* Pour que l'image couvre la cellule */
            background-position: center; /* Pour centrer l'image */
            border: 0px solid #000; /* Bordure de la cellule */
        }
		
		  .image {
            opacity: 0.8; /* Opacité de l'image initialement à 50% */
            transition: opacity 0.5s ease; /* Transition fluide lors du changement d'opacité */
        }

        .image:hover {
            opacity: 1.0; /* Opacité à 100% au survol */
        }
</style>
</head>
<body text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<script>
document.addEventListener("contextmenu", function(e){
e.preventDefault();
}, false);

document.addEventListener('keydown', (e) => {
    e = e || window.event;
    if(e.keyCode == 116){
        e.preventDefault();
    }
});
</script>
<?php echo $son; ?>
<img class="boite" src="images/ile.png" alt=""> 
<div class="boite"> 
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="Texte_Gras">
  <tr>
    <td> 
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td valign="top"> 
            <table width="269" border="0" cellspacing="14" cellpadding="0" height="180" align="left" class="Texte_Gras">
              <tr> 
                <td width="169" id="perso" class="perso" valign="bottom" height="225"> 
                  <div align="right"><?php if ($V == "2") {echo "<img src=\"images/sang.png\" width=\"82\" height=\"105\">";} ?></div>
                </td>
                <td valign="top">
                  <?php if ($bonus_ao == "1" AND $rao > "0") {echo "<a href=\"#\"><img src=\"images/mini_armure.png\" width=\"39\" height=\"52\" alt=\"Armure d'OR: Les attaques de l'adversaire sont divisés par deux.\" border=\"0\"></a>";} else {echo "<img src=\"images/vierge.png\" width=\"30\" height=\"40\">";}?>
                  <br><br>
				  <?php if ($bonus_bc == "1") {echo "<a href=\"#\"><img src=\"images/mini_cosmos.png\" width=\"39\" height=\"52\" alt=\"Brule mon Cosmos: La force de la prochaine attaque sera multiplié par deux.\" border=\"0\"></a>";} else {echo "<img src=\"images/vierge.png\" width=\"30\" height=\"40\">";}?>
                </td>
              </tr>
              <tr> 
                <td width="169"> 
                  <div align="center"><font size="3">Vie : 
                    <?php echo $PV; ?></font>
                  </div>
                </td>
                <td>&nbsp;</td>
              </tr>
            </table>
          </td>
            <td width="250"> <br><br>
              <table width="100%" border="0" cellspacing="2" cellpadding="0" class="Texte_Gras">
                <tr>
                  <td>
                    <div align="center" style="vertical-align:middle"><font size="5">Round n&deg; 
                      <?php echo $round; ?>					  
					  </font>
                    </div>
                  </td>
                </tr>
              </table><br><br>
              <table width="358" border="0" cellspacing="0" cellpadding="0" align="center">
              <tr> 
                <td width="169" height="225"><a href="#"><img src="images/<?php echo $img_carte_j; ?>.png" width="169" height="225" title="<?php echo $commentaire_carte; ?>" title="<?php echo $commentaire_carte; ?>" alt="<?php echo $commentaire_carte; ?>" border="0"></a></td>
                <td width="20">&nbsp;</td>
                <td width="169" height="225"><a href="#"><img src="images/<?php echo $img_carte_adv; ?>.png" width="169" height="225" title="<?php echo $commentaire_carte_adv; ?>" alt="<?php echo $commentaire_carte_adv; ?>" border="0"></a></td>
              </tr>
            </table>
          </td>
          <td valign="top"> 
            <table width="169" border="0" cellspacing="0" cellpadding="0" align="right">
              <tr>
                <td>
                  <table width="269" border="0" cellspacing="14" cellpadding="0" height="225" class="Texte_Gras">
                    <tr> 
                      <td valign="top"> 
                        <?php if ($bonus_ao_adv == "1" AND $rao_adv > "0") {echo "<a href=\"#\"><img src=\"images/mini_armure.png\" width=\"39\" height=\"52\" title=\"Armure d'OR: Les attaques de l'adversaire sont divisés par deux.\" alt=\"Armure d'OR: Les attaques de l'adversaire sont divisés par deux.\" border=\"0\"></a>";} else {echo "<img src=\"images/vierge.png\" width=\"39\" height=\"52\">";}?>
                        <br>
                        <?php if ($bonus_bc_adv == "1") {echo "<a href=\"#\"><img src=\"images/mini_cosmos.png\" width=\"39\" height=\"52\" title=\"Brule mon Cosmos: La force de la prochaine attaque sera multiplié par deux.\" alt=\"Brule mon Cosmos: La force de la prochaine attaque sera multiplié par deux.\" border=\"0\"></a>";} else {echo "<img src=\"images/vierge.png\" width=\"39\" height=\"52\">";}?>
                      </td>
                      <td width="169" class="adversaire" id="adversaire" valign="bottom" height="225"> 
                        <?php if ($V == "1") {echo "<img src=\"images/sang.png\" width=\"82\" height=\"105\">";} ?>
                      </td>
                    </tr>
                    <tr> 
                      <td>&nbsp;</td>
                      <td width="169"> 
                        <div align="center"><font size="3">Vie : 
                          <?php echo $PV_adv; ?></font>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td height="50">
                        <?php
$change_adv = rand(1,5);
if ($change_adv == "1") {$select_A_adv = "valign=\"top\"";} else {$select_A_adv = "valign=\"bottom\"";}
if ($change_adv == "2") {$select_B_adv = "valign=\"top\"";} else {$select_B_adv = "valign=\"bottom\"";}
if ($change_adv == "3") {$select_C_adv = "valign=\"top\"";} else {$select_C_adv = "valign=\"bottom\"";}
if ($change_adv == "4") {$select_D_adv = "valign=\"top\"";} else {$select_D_adv = "valign=\"bottom\"";}
if ($change_adv == "5") {$select_E_adv = "valign=\"top\"";} else {$select_E_adv = "valign=\"bottom\"";}
?>
                      </td>
                      <td width="169" height="50"> 
                        <table width="100" border="0" cellspacing="2" cellpadding="0" align="center" height="50">
                          <tr> 
                            <td <?php echo $select_A_adv; ?>> 
                              <div align="center"><a href="#"><img src="images/mini_recto.png" width="28" height="37" alt="Cartes de l'adversaire." border="0"></a></div>
                            </td>
                            <td <?php echo $select_B_adv; ?>> 
                              <div align="center"><a href="#"><img src="images/mini_recto.png" width="28" height="37" alt="Cartes de l'adversaire." border="0"></a></div>
                            </td>
                            <td <?php echo $select_C_adv; ?>> 
                              <div align="center"><a href="#"><img src="images/mini_recto.png" width="28" height="37" alt="Cartes de l'adversaire." border="0"></a></div>
                            </td>
                            <td <?php echo $select_D_adv; ?>> 
                              <div align="center"><a href="#"><img src="images/mini_recto.png" width="28" height="37" alt="Cartes de l'adversaire." border="0"></a></div>
                            </td>
                            <td <?php echo $select_E_adv; ?>> 
                              <div align="center"><a href="#"><img src="images/mini_recto.png" width="28" height="37" alt="Cartes de l'adversaire." border="0"></a></div>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
            
          </td>
        </tr>
      </table>     
    </td>
  </tr>
  <tr>
    <td> 
      <div align="center"><font size="3"><?php echo $resultat; ?> - <?php echo $dommage; ?></span>
        </div>
		</td>
		</tr>
		<tr>
		<td  height="180">
<?php
if ($PV <= "0" OR $PV_adv <= "0") {} else {include("jeu.php");}
?>
</td>
  </tr>
</table>
 <script type="text/javascript">music();</script>
</div>
</body>
</html>
