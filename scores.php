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
<a href="#HAUT" onmouseover="window.status='Retour en haut de la page.';return true" onmouseout="window.status='';return true"><center><img src="images/haut.gif" width="65" height="45" border="0"></center>
        </a></td>
</table>
</div>
<div align="center"><a name="HAUT"></a> <img src="images/titre.png" width="528" height="117" alt="GT.Cards"> 
  <br>
  <br>
</div>
<table width="100%" border="0" cellspacing="4" cellpadding="0" class="Vainqueur">
  <tr> 
    <td> 
      <div align="center" class="Texte_Gras"><font color="#000000"><a href="intro.php"><span class="Rubrique"><img src="images/retour.gif" width="65" height="45" align="left" border="0" alt="Retour au Jeu."></span></a><span class="Rubrique">Tableau des scores</span></font></div>
    </td>
  </tr>
</table>
<table width="98%" border="0" cellspacing="8" cellpadding="0" class="Texte_Gras" align="center">
  <tr> 
    <td> 
<?php
    // Chemin vers le fichier texte
    $fichier = 'scores.txt';

    // Vérifier si le fichier existe
    if (file_exists($fichier)) {
        // Lire tout le fichier dans un tableau, chaque ligne devient un élément du tableau
        $lignes = file($fichier, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        // Tableau pour stocker les informations extraites
        $scores = [];

        // Parcourir chaque ligne et extraire les données
        foreach ($lignes as $ligne) {
            // Séparer les éléments de chaque ligne avec le séparateur |
            $donnees = explode('|', $ligne);

            // Ajouter les données au tableau des scores
            // On stocke aussi le nombre de rounds comme clé pour le tri
            if (count($donnees) === 3) {
                $scores[] = [
                    'pseudo' => $donnees[0],
                    'personnage' => $donnees[1],
                    'rounds' => (int)$donnees[2],  // Convertir les rounds en entier pour le tri
                ];
            }
        }

        // Trier le tableau par le nombre de rounds (ordre croissant)
        usort($scores, function($a, $b) {
            return $a['rounds'] - $b['rounds'];
        });
		
		$place = "1";
		
        // Afficher les résultats dans un tableau HTML
        if (count($scores) > 0) {
            echo '<table width="700" border="1" cellpadding="5" cellspacing="0" align="center">';
            echo '<tr><th>N°</th><th>JOUEUR</th><th>CHEVALIER</th><th>ROUNDS</th></tr>';

            foreach ($scores as $score) {
                echo '<tr>';
				echo '<td width="50" align="center">' . $place . '</td>';
                echo '<td>' . htmlspecialchars($score['pseudo']) . '</td>';
                echo '<td width="350">' . htmlspecialchars($score['personnage']) . '</td>';
                echo '<td width="50" align="center">' . $score['rounds'] . '</td>';
                echo '</tr>';
				$place++;
            }

            echo '</table>';
        } else {
            echo '<p align="center"><font size="3"><br><br><br><br>Aucun score trouvé.</font></p>';
        }
    } else {
        echo '<p align="center"><font size="3"><br><br><br><br>Le fichier scores.txt est introuvable.</font></p>';
    }
    ?>
        </td>
  </tr>
</table>
<div align="center" class="Vainqueur"><br>
  <table width="600" border="0" cellspacing="4" cellpadding="0" align="center" class="Copyrights" height="120">
    <tr> 
      <td valign="bottom"> 
        <div align="center"><font size="1">Copyrights &copy; Masami Kurumada &amp; Shueisha Toei 
          Animation - Copyrights &copy; 2009 Emmanuel MARCEROU</font></div>
      </td>
    </tr>
  </table>
</div>
  <script type="text/javascript">music();</script>
