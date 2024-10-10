<?php
// recuperation des variables par URL
$round= isset($_GET['round']) ? $_GET['round'] : NULL;
$vainqueur= isset($_GET['vainqueur']) ? $_GET['vainqueur'] : NULL;
$chevalier= isset($_GET['chevalier']) ? $_GET['chevalier'] : NULL;
$chevalier_adv= isset($_GET['chevalier_adv']) ? $_GET['chevalier_adv'] : NULL;

// definition du nom et de la description des chevaliers
include("chevaliers.php");

// defintion du vainqueur
if ($vainqueur == "1")
	{
	$nom_chevalier_vainqueur = "perso_".$nom_chevalier;
	$description_chevalier_vainqueur = $description_chevalier;
	$fond = "saori.png";
	}
else
	{
	$nom_chevalier_vainqueur = $nom_chevalier_adv;
	$description_chevalier_vainqueur = $description_chevalier_adv;
	$fond = "status.png";	
	}
?>
<script type="text/javascript">
function music()
{
	var repetition,visibility,depart,fichier_son;
	var fichier_son = "sons/regle.mp3";
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
</style>
<title>Seinaru kuro no tatakai</title><body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
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
<img class="boite" src="images/<?php echo $fond; ?>" alt=""> 
<div class="boite"> 
  <div align="center"><img src="images/titre.png" width="528" height="117" alt="GT.Cards"> 
    <br>
    <br>
  </div>
  <table width="113" border="0" cellspacing="4" cellpadding="0" height="180" align="center" class="Texte_Gras">
  <tr> 
    <td>
        <div align="center" class="Description">Vainqueur</div>
    </td>
  </tr>
  <tr> 
    <td><a href="#"><img src="images/<?php echo $nom_chevalier_vainqueur; ?>.png" width="169" height="225" alt="<?php echo $description_chevalier_vainqueur; ?>" border="0"></a></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="2" cellpadding="0" class="Texte_Gras">
  <tr>
    <td>
      <div align="center">
          <table width="450" border="0" cellspacing="2" cellpadding="0" class="Texte_Gras">
            <tr>
              <td><br><br><font size="3">Le combat a &eacute;t&eacute; remport&eacute; en 
                <?php echo $round; ?>
                rounds par 
                <?php echo $description_chevalier_vainqueur; ?></font>
                <br><br><br>
              </td>
            </tr>
          </table>
<?php
if ($vainqueur == "1"){
echo "<font size=\"3\"> Entrer votre pseudo pour apparaitre sur le tableau des scores:<br><br>
         <form action=\"add_scores.php?round=$round&chevalier=$description_chevalier_vainqueur\" method=\"post\">
<input type=\"text\" value=\"\" id=\"pseudo\" name=\"pseudo\" />
<button type=\"submit\">valider</button>
</form>";
}
?>
          <font size="3">[ <a href="intro.php">rejouer</a> ] </font></font>
          <table width="600" border="0" cellspacing="4" cellpadding="0" align="center" class="Copyrights" height="120">
            <tr> 
              <td valign="bottom"> 
                <div align="center"><font size="1">Copyrights &copy; Masami Kurumada &amp; Shueisha 
                  Toei Animation - Copyrights &copy; 2009 Emmanuel MARCEROU</font></div>
              </td>
            </tr>
          </table>
        </div>
    </td>
  </tr>
</table>
  
</div>
<script type="text/javascript">music();</script>