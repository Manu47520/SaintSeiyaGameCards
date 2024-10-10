<?php
ini_set('display_errors', 0);

// tirage aléatoire du chevalier du joueur
$chevalier = rand(1,5);
if ($chevalier == "1") {$nom_chevalier = "seiya";$description_chevalier = "Seiya Chevalier de Bronze de Pégase.";}
if ($chevalier == "2") {$nom_chevalier = "shiryu";$description_chevalier = "Shiryu Chevalier de Bronze du Dragon.";}
if ($chevalier == "3") {$nom_chevalier = "hyoga";$description_chevalier = "Hyoga Chevalier de Bronze du Cygne.";}
if ($chevalier == "4") {$nom_chevalier = "shun";$description_chevalier = "Shun Chevalier de Bronze d'Androméde.";}
if ($chevalier == "5") {$nom_chevalier = "ikki";$description_chevalier = "Ikki Chevalier de Bronze du Phénix.";}

// tirage aléatoire du chevalier de l'adversaire
$chevalier_adv = rand(1,5);
if ($chevalier_adv == "1") {$nom_chevalier_adv = "pegase_noir";$description_chevalier_adv = "Chevalier Noir de Pégase.";}
if ($chevalier_adv == "2") {$nom_chevalier_adv = "dragon_noir";$description_chevalier_adv = "Chevalier Noir du Dragon.";}
if ($chevalier_adv == "3") {$nom_chevalier_adv = "cygne_noir";$description_chevalier_adv = "Chevalier Noir du Cygne.";}
if ($chevalier_adv == "4") {$nom_chevalier_adv = "andromede_noir";$description_chevalier_adv = "Chevalier Noir d'Androméde.";}
if ($chevalier_adv == "5") {$nom_chevalier_adv = "phenix_noir";$description_chevalier_adv = "Chevalier Noir du Phénix.";}

// definition des point de vie des chevaliers
$PV = "500";
$PV_adv = $PV;

// definition du bonus pour les chevaliers
$bonus_bc = "0";
$bonus_bc_adv = "0";
$bonus_ao = "0";
$bonus_ao_adv = "0";
$rao = "0";
$rao_adv = "0";
// definition du round
$round = "0";

// tirage des cartes A, B, C, D, et E
include("melange.php");

// recuperation des commentaires des cartes A, B, C, D, et E
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

//definition des cartes posé
$carte = "vierge";
$carte_adv = "vierge";

//definition des commmentaires des cartes posé
$commentaire_carte = "";
$commentaire_carte_adv = "";
?>
<html>
<head>
<title>Seinaru kuro no tatakai</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="styles.css" type="text/css">
<style type="text/css">
.boite { /* définition de la boite 1 */
  position:absolute ; /* positionne la boite dans l'écran */ 
  top:0px ; /* à 80 pixels du haut de page */
  left: 0px ; /* et 30% du bord gauche de la page */
  height:100% ; /* hauteur de la boite */
  width:100% ; /* largeur de la boite */
  
  	.cadre {
            width: 169px; /* Largeur de la cellule */
            height: 225px; /* Hauteur de la cellule */
            background-image: url('images/vide.png');
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
<embed src="sons/distribution.mp3" width="0" height="0"></embed>
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
<img class="boite" src="images/ile.png" alt=""> 
<div class="boite"> 
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="Texte_Gras">
  <tr>
    <td> 
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td valign="top"> 
            <table width="169" border="0" cellspacing="14" cellpadding="0" height="180" align="left" class="Texte_Gras">
              <tr> 
                <td><a href="#"><img src="images/perso_<?php echo $nom_chevalier; ?>.png" width="169" height="225" alt="<?php echo $description_chevalier; ?>" border="0"></a></td>
              </tr>
              <tr>
                <td>
                  <div align="center"><font size="3">Vie : 
                    <?php echo $PV; ?></font>
                  </div>
                </td>
              </tr>
            </table>
          </td>
            <td width="250"> 
              <table width="100%" border="0" cellspacing="2" cellpadding="0" class="Texte_Gras">
                <tr> 
                  <td> 
                    <div align="center" style="vertical-align:middle"><font size="5"></font>
                    </div>
                  </td>
                </tr>
              </table><br><br>
              <table width="358" border="0" cellspacing="0" cellpadding="0" align="center">
              <tr> 
                <td width="169" class="cadre" id="cadre" height="225"></td>
                <td width="20">&nbsp;</td>
                <td width="169" class="cadre" id="cadre" height="225"></td>
              </tr>
            </table>
          </td>
          <td valign="top"> 
            <table width="169" border="0" cellspacing="14" cellpadding="0" height="180" align="right" class="Texte_Gras">
              <tr> 
                <td><a href="#"><img src="images/<?php echo $nom_chevalier_adv; ?>.png" width="169" height="225" alt="<?php echo $description_chevalier_adv; ?>" border="0"></a></td>
              </tr>
              <tr> 
                <td> 
                  <div align="center"><font size="3">Vie : 
                    <?php echo $PV_adv; ?></font>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <table width="100" border="0" cellspacing="2" cellpadding="0" align="center">
                    <tr> 
                      <td> 
                        <div align="center"><img src="images/mini_recto.png" width="28" height="37"></div>
                      </td>
                      <td> 
                        <div align="center"><img src="images/mini_recto.png" width="28" height="37"></div>
                      </td>
                      <td> 
                        <div align="center"><img src="images/mini_recto.png" width="28" height="37"></div>
                      </td>
                      <td> 
                        <div align="center"><img src="images/mini_recto.png" width="28" height="37"></div>
                      </td>
                      <td> 
                        <div align="center"><img src="images/mini_recto.png" width="28" height="37"></div>
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
      <div align="center"><br><br><font size="3">Cliquez sur une carte pour la jouer lors de ce round.</font><br><br>
        <span class="BR"> <br>
        <br>
        </span> </div>
      <table width="900" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr> 
          <td width="20%"> 
            <div align="center"><a href="combat.php?change=carte_A&carte_A=<?php echo $carte_A; ?>&carte_B=<?php echo $carte_B; ?>&carte_C=<?php echo $carte_C; ?>&carte_D=<?php echo $carte_D; ?>&carte_E=<?php echo $carte_E; ?>&chevalier=<?php echo $chevalier; ?>&chevalier_adv=<?php echo $chevalier_adv; ?>&PV=<?php echo $PV; ?>&PV_adv=<?php echo $PV_adv; ?>&round=<?php echo $round; ?>&bonus_bc=<?php echo $bonus_bc; ?>&bonus_bc_adv=<?php echo $bonus_bc_adv; ?>&bonus_ao=<?php echo $bonus_ao; ?>&bonus_ao_adv=<?php echo $bonus_ao_adv; ?>&rao=<?php echo $rao; ?>&rao_adv=<?php echo $rao_adv; ?>&V=0&cs=<?php echo $special; ?>&cs_adv=<?php echo $special_adv; ?>"><img src="images/<?php echo $img_carte_A; ?>.png" width="169" height="225" border="0" style="filter:alpha(opacity=80); -moz-opacity: .4;" onMouseover="makevisible(this,0)" onMouseout="makevisible(this,1)" alt="<?php echo $commentaire_carte_A; ?>" class="image"></a></div>
          </td>
          <td width="20%"> 
            <div align="center"><a href="combat.php?change=carte_B&carte_A=<?php echo $carte_A; ?>&carte_B=<?php echo $carte_B; ?>&carte_C=<?php echo $carte_C; ?>&carte_D=<?php echo $carte_D; ?>&carte_E=<?php echo $carte_E; ?>&PV=<?php echo $PV; ?>&PV_adv=<?php echo $PV_adv; ?>&round=<?php echo $round; ?>&chevalier=<?php echo $chevalier; ?>&chevalier_adv=<?php echo $chevalier_adv; ?>&bonus_bc=<?php echo $bonus_bc; ?>&bonus_bc_adv=<?php echo $bonus_bc_adv; ?>&bonus_ao=<?php echo $bonus_ao; ?>&bonus_ao_adv=<?php echo $bonus_ao_adv; ?>&rao=<?php echo $rao; ?>&rao_adv=<?php echo $rao_adv; ?>&V=0&cs=<?php echo $special; ?>&cs_adv=<?php echo $special_adv; ?>"><img src="images/<?php echo $img_carte_B; ?>.png" width="169" height="225" border="0" style="filter:alpha(opacity=80); -moz-opacity: .4;" onMouseover="makevisible(this,0)" onMouseout="makevisible(this,1)" alt="<?php echo $commentaire_carte_B; ?>" class="image"></a></div>
          </td>
          <td width="20%"> 
            <div align="center"><a href="combat.php?change=carte_C&carte_A=<?php echo $carte_A; ?>&carte_B=<?php echo $carte_B; ?>&carte_C=<?php echo $carte_C; ?>&carte_D=<?php echo $carte_D; ?>&carte_E=<?php echo $carte_E; ?>&PV=<?php echo $PV; ?>&PV_adv=<?php echo $PV_adv; ?>&round=<?php echo $round; ?>&chevalier=<?php echo $chevalier; ?>&chevalier_adv=<?php echo $chevalier_adv; ?>&bonus_bc=<?php echo $bonus_bc; ?>&bonus_bc_adv=<?php echo $bonus_bc_adv; ?>&bonus_ao=<?php echo $bonus_ao; ?>&bonus_ao_adv=<?php echo $bonus_ao_adv; ?>&rao=<?php echo $rao; ?>&rao_adv=<?php echo $rao_adv; ?>&V=0&cs=<?php echo $special; ?>&cs_adv=<?php echo $special_adv; ?>"><img src="images/<?php echo $img_carte_C; ?>.png" width="169" height="225" border="0" style="filter:alpha(opacity=80); -moz-opacity: .4;" onMouseover="makevisible(this,0)" onMouseout="makevisible(this,1)" alt="<?php echo $commentaire_carte_C; ?>" class="image"></a></div>
          </td>
          <td width="20%"> 
            <div align="center"><a href="combat.php?change=carte_D&carte_A=<?php echo $carte_A; ?>&carte_B=<?php echo $carte_B; ?>&carte_C=<?php echo $carte_C; ?>&carte_D=<?php echo $carte_D; ?>&carte_E=<?php echo $carte_E; ?>&PV=<?php echo $PV; ?>&PV_adv=<?php echo $PV_adv; ?>&round=<?php echo $round; ?>&chevalier=<?php echo $chevalier; ?>&chevalier_adv=<?php echo $chevalier_adv; ?>&bonus_bc=<?php echo $bonus_bc; ?>&bonus_bc_adv=<?php echo $bonus_bc_adv; ?>&bonus_ao=<?php echo $bonus_ao; ?>&bonus_ao_adv=<?php echo $bonus_ao_adv; ?>&rao=<?php echo $rao; ?>&rao_adv=<?php echo $rao_adv; ?>&V=0&cs=<?php echo $special; ?>&cs_adv=<?php echo $special_adv; ?>"><img src="images/<?php echo $img_carte_D; ?>.png" width="169" height="225" border="0" style="filter:alpha(opacity=80); -moz-opacity: .4;" onMouseover="makevisible(this,0)" onMouseout="makevisible(this,1)" alt="<?php echo $commentaire_carte_D; ?>" class="image"></a></div>
          </td>
          <td width="20%"> 
            <div align="center"><a href="combat.php?change=carte_E&carte_A=<?php echo $carte_A; ?>&carte_B=<?php echo $carte_B; ?>&carte_C=<?php echo $carte_C; ?>&carte_D=<?php echo $carte_D; ?>&carte_E=<?php echo $carte_E; ?>&PV=<?php echo $PV; ?>&PV_adv=<?php echo $PV_adv; ?>&round=<?php echo $round; ?>&chevalier=<?php echo $chevalier; ?>&chevalier_adv=<?php echo $chevalier_adv; ?>&bonus_bc=<?php echo $bonus_bc; ?>&bonus_bc_adv=<?php echo $bonus_bc_adv; ?>&bonus_ao=<?php echo $bonus_ao; ?>&bonus_ao_adv=<?php echo $bonus_ao_adv; ?>&rao=<?php echo $rao; ?>&rao_adv=<?php echo $rao_adv; ?>&V=0&cs=<?php echo $special; ?>&cs_adv=<?php echo $special_adv; ?>"><img src="images/<?php echo $img_carte_E; ?>.png" width="169" height="225" border="0" style="filter:alpha(opacity=80); -moz-opacity: .4;" onMouseover="makevisible(this,0)" onMouseout="makevisible(this,1)" alt="<?php echo $commentaire_carte_E; ?>" class="image"></a></div>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</div>
</body>
</html>
