<html>
<head>
<title>Seinaru kuro no tatakai</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/javascript">
function music()
{
	var repetition,visibility,depart,fichier_son;
	var fichier_son = "sons/vs.mp3";
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
  
  .image {
            opacity: 0.8; /* Opacité de l'image initialement à 50% */
            transition: opacity 0.5s ease; /* Transition fluide lors du changement d'opacité */
        }

        .image:hover {
            opacity: 1.0; /* Opacité à 100% au survol */
        }
		
#texte {
			font-size: 17;
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
<img class="boite" src="images/sanctuary.png" alt=""> 
<div class="boite"> 
  <p align="center"><img src="images/titre.png" width="528" height="117" alt="GT.Cards"> 
    <br>
    <br>
  <table width="700" border="0" cellspacing="10" cellpadding="0" class="Texte_Gras" align="center">
    <tr> 
      <td width="78"><a href="regles.php"><img src="images/dohko.png" width="78" height="89" border="0" title="Cliquez ICI pour lire les r&eacute;gles du jeu." alt="Cliquez ICI pour lire les r&egrave;gles du jeu."></a></td>
      <td valign="top"> 
        <div align="left" id="texte"></div>
      </td>
    </tr>
  </table><br><br>
  <table width="900" border="0" cellspacing="0" cellpadding="0" align="center" class="Texte_Gras">
  <tr> 
    <td width="20%"> 
      <div align="center"><a href="distribution.php"><img src="images/recto.png" width="169" height="225" border="0" title="Cliquez ICI pour choisir cette carte." alt="Cliquez ICI pour choisir cette carte." class="image"></a></div>
    </td>
    <td width="20%"> 
      <div align="center"><a href="distribution.php"><img src="images/recto.png" width="169" height="225" border="0" title="Cliquez ICI pour choisir cette carte." alt="Cliquez ICI pour choisir cette carte." class="image"></a></div>
    </td>
    <td width="20%"> 
      <div align="center"><a href="distribution.php"><img src="images/recto.png" width="169" height="225" border="0" title="Cliquez ICI pour choisir cette carte." alt="Cliquez ICI pour choisir cette carte." class="image"></a></div>
    </td>
    <td width="20%"> 
      <div align="center"><a href="distribution.php"><img src="images/recto.png" width="169" height="225" border="0" title="Cliquez ICI pour choisir cette carte." alt="Cliquez ICI pour choisir cette carte." class="image"></a></div>
    </td>
    <td width="20%"> 
      <div align="center"><a href="distribution.php"><img src="images/recto.png" width="169" height="225" border="0" title="Cliquez ICI pour choisir cette carte." alt="Cliquez ICI pour choisir cette carte." class="image"></a></div>
    </td>
  </tr>
</table>
<table width="600" border="0" cellspacing="4" cellpadding="0" align="center" class="Copyrights" height="3">
    <tr> 
      <td valign="bottom"> 
        <div align="center"><font size="3"><br><br>[ <a href="scores.php">Tableaux des scores</a> ]</font></div>
      </td>
    </tr>
  </table>
  <table width="600" border="0" cellspacing="4" cellpadding="0" align="center" class="Copyrights" height="120">
    <tr> 
      <td valign="bottom"> 
        <div align="center"><font size="1">Copyrights &copy; Masami Kurumada &amp; Shueisha Toei 
          Animation - Copyrights &copy; 2009 Emmanuel MARCEROU</font></div>
      </td>
    </tr>
  </table>
  <script type="text/javascript">music();</script>
  <script>		
const texte = "Choisissez une carte parmis les cinq ci-dessous pour determiner quel chevalier vous allez incarner. Si vous voulez lire les regles du jeu, cliquez sur Dohko, Chevalier d'Or de la Balance.";
const elementTexte = document.getElementById('texte');
let index = 0;

// Fonction pour afficher le texte progressivement
function afficherTexte() {
    if (index < texte.length) {
        elementTexte.innerHTML += texte.charAt(index);
        index++;
        setTimeout(afficherTexte, 10); // Ajuster la vitesse en changeant le délai
    }
}

// Démarrer l'affichage
afficherTexte();
</script>
</div>
</body>
</html>
