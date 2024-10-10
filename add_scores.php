<?php
$round= isset($_GET['round']) ? $_GET['round'] : NULL;
$chevalier= isset($_GET['chevalier']) ? $_GET['chevalier'] : NULL;
$pseudo= isset($_POST['pseudo']) ? $_POST['pseudo'] : NULL;
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
//-->
</script>
<link rel="stylesheet" href="styles.css" type="text/css">
<title>Seinaru kuro no tatakai</title><body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#CCCCCC" onload="setVariables(); checkLocation();">
<meta http-equiv="REFRESH" content="2; URL=intro.php">
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
<div id="branding" style="position:absolute; visibility:show; left:235px; top:-51px; z-index:2"> 
  <table width=10><td>
</td>
</table>
</div>
<div align="center"><a name="HAUT"></a> <img src="images/titre.png" width="528" height="117" alt="GT.Cards"> 
  <br>
  <br>
</div>
<table width="100%" border="0" cellspacing="4" cellpadding="0" class="Vainqueur">
  <tr> 
    <td> 
      <div align="center" class="Texte_Gras"><font color="#000000"><a href="intro.php"><span class="Rubrique"><img src="images/retour.gif" width="65" height="45" align="left" border="0" alt="Retour au Jeu."></span></a><span class="Rubrique"><br><br><br><br>Votre score a été sauvegardé. Merci.<br><br><br><br></span></font></div>
    </td>
  </tr>
</table>
<table width="98%" border="0" cellspacing="8" cellpadding="0" class="Texte_Gras" align="center">
  <tr> 
    <td> 
<?php
            $fichier = fopen('scores.txt', 'c+b');
			fseek($fichier, filesize('scores.txt'));
			fwrite($fichier, chr(13)."\n".$pseudo."|".$chevalier."|".$round);
			fclose($fichier);		
?>
        </td>
  </tr>
 
</table>
<div align="center" class="Vainqueur"><br>
  <table width="600" border="0" cellspacing="4" cellpadding="0" align="center" class="Copyrights" height="120">
    <tr> 
      <td valign="bottom"> 
        <div align="center"><font size="1">Copyrights &copy; Masami Kurumada &amp; Shueisha Toei 
          Animation - Copyrights &copy; 2009 Emmanuel MARCEROU)</font></div>
      </td>
    </tr>
  </table>
</div>
  <script type="text/javascript">music();</script>
