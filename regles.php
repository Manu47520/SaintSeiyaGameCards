<script>
        function ouvrirPopup() {
            // Dimensions de la popup
            const largeur = 1026;
            const hauteur = 467;

            // Calculer les coordonnées pour centrer la fenêtre
            const gauche = (screen.width - largeur) / 2;
            const haut = (screen.height - hauteur) / 2;

            // Ouvrir la popup
            const popup = window.open("", "popup", `width=${largeur},height=${hauteur},left=${gauche},top=${haut}`);

            // Contenu de la popup avec une image qui occupe toute la fenêtre
            popup.document.write(`
                <html>
                    <head>
                        <title>Popup Image</title>
                        <style>
                            body, html {
                                margin: 0;
                                padding: 0;
                                width: 100%;
                                height: 100%;
                                overflow: hidden;
                            }
                            img {
                                width: 100%;
                                height: 100%;
                                object-fit: cover;
                            }
                            button {
                                position: absolute;
                                top: 10px;
                                right: 10px;
                                padding: 10px;
                                background-color: red;
                                color: white;
                                border: none;
                                cursor: pointer;
                            }
                        </style>
                    </head>
                    <body>
                        <a href="#" onclick="window.close()"><img src="images/capture.jpg" alt=""></a>
                    </body>
                </html>
            `);
        }
    </script>
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
      <div align="center" class="Texte_Gras"><font color="#000000"><a href="intro.php"><span class="Rubrique"><img src="images/retour.gif" width="65" height="45" align="left" border="0" alt="Retour au Jeu."></span></a><span class="Rubrique">R&egrave;gles 
        du Jeu</span></font></div>
    </td>
  </tr>
</table>
<table width="98%" border="0" cellspacing="8" cellpadding="0" class="Texte_Gras" align="center">
  <tr> 
    <td> 
      <p><font color="#000000"><br>
        <span class="Description">Introduction : </span></font></p>
      <p><font color="#000000">       
      <div align=justify><img src="images/puce.gif" width="13" height="10"> 
        Les Magic GT Cards se base sur le jeu de carte du type &quot;Magic&quot;. 
        Vous allez grace &agrave; ce jeu incarn&eacute; un Chevaliers de Bronze, 
        et vous battre contre un Chevalier Noir. Cela retrace une partie des batailles 
        du Sanctuaire. Une carte chevalier va vous &ecirc;tre attribu&eacute; 
        au hazard, puis cinq cartes vous seront distribu&eacute;. Chaque carte 
        poss&eacute;de des caract&eacute;ristiques bien particuliere. A chaque 
        round, vous allez choisir une carte &agrave; poser. Des qu'une carte est 
        utilis&eacute;, une autre vous est donn&eacute;e. Le premier des deux 
        chevaliers dont les Point de Vie arrive &agrave; z&eacute;ro a perdu. 
        (<a href="#" onclick="ouvrirPopup()"><font color="#0066FF">Voir 
        une capture d'&eacute;cran du jeu</font></a>)</div>
      </font> </td>
  </tr>
  <tr> 
    <td> 
      <p><font color="#000000"><br>
        <span class="Description">Quelques Notions :</span></font></p>
      <p><font color="#000000">
        <div align=justify><img src="images/puce.gif" width="13" height="10"> Les cartes chevaliers ne change pas grand chose, mis a part que si vous 
        utilis&eacute; une carte attaque (de 1 &agrave; 7) correspondant &agrave; 
        votre chevalier, alors, les point d'attaque sont multipli&eacute; par 
        deux. Les dommages sont calcul&eacute; par rapport aux cartes des deux 
        chevaliers. Par exemple, vous pos&eacute; une attaque de niveau 6 et l'adversaire 
        pose une carte de niveau 2, alors les dommages inflig&eacute; &agrave; 
        l'adversaire seront de 40 (6*10 - 2*10). Les dommages sont en fait les 
        points de vie retir&eacute; au combattant qui a perdu le round. Certaines 
        cartes, aux nombre de cinq, appell&eacute; Coups Sp&eacute;ciaux, vous 
        permet des actions suppl&eacute;mentaires. Par exemple, la carte Jamir 
        permet de r&eacute;cuperer tous ses points de vie (500 des le debut de 
        la partie). Elle permet aussi, parfois, en plus d'une action principale, 
        de bloquer l'attaque de l'adversaire. Par exemple, la carte Jamir vous 
        redonne vos point de vie, mais l'attaque de l'adversaire n'a aussi aucun 
        effet sur vous. Veuillez consult&eacute; les cartes en d&eacute;tails 
        ci-dessous.</div> </font>
      <p>&nbsp;</p>
    </td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="8" cellpadding="0">
  <tr> 
    <td valign="top" class="Texte_Gras" width="130">&nbsp;</td>
    <td valign="top" class="Texte_Gras"> 
      <div align="center" class="Vainqueur"><font color="#000000" class="Description">Les 
        Chevaliers</font></div>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/perso_seiya.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Seiya, Chevalier de Bronze de P&eacute;gase</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Pays d'Origine : Japon.<br>
        <img src="images/puce.gif" width="13" height="10"> Lieu d'entra&icirc;nement 
        : Au sanctuaire en Gr&egrave;ce.<br>
        </font><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Techniques de Combat : Pegasus Ryu Sei Ken (Les M&eacute;t&eacute;ores 
        de P&eacute;gase), Pegasus Sui Sei Ken (La Com&egrave;te de P&eacute;gase), 
        Pegasus Rolling Crash (Le Tourbillon de P&eacute;gase) </font></p>
      </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/perso_hyoga.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Hyoga, Chevalier de Bronze du Cygne</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Pays d'Origine : Japon/Russie.<br>
        <img src="images/puce.gif" width="13" height="10"> Lieu d'entra&icirc;nement 
        : Sib&eacute;rie orientale.<br>
        <img src="images/puce.gif" width="13" height="10"> Techniques 
        de Combat : Diamond Dust (Poussi&egrave;re de Diamant), Koliso (Cercle 
        de Glace), Kholodnyi Smerch / Aurora Thunder Attack (Tonnerre de l'Aube), 
        Aurora Execution (Execution de l'Aurore) </font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/perso_shiryu.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Shiryu, Chevalier de Bronze du Dragon</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Pays d'Origine : Japon.<br>
        <img src="images/puce.gif" width="13" height="10"> Lieu d'entra&icirc;nement 
        : Chine, aux 5 Pics de Rozan.<br>
        <img src="images/puce.gif" width="13" height="10"> Techniques 
        de Combat : Rozan Ko Ryu Ha / Rozan Sho Ryu Ha (Col&egrave;re du Dragon), 
        Rozan Ryu Hi Sho (L'ultime Dragon) </font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/perso_shun.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Shun, Chevalier de Bronze d'Androm&eacute;de</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Pays d'Origine : Japon.<br>
        <img src="images/puce.gif" width="13" height="10"> Lieu d'entra&icirc;nement 
        : Ile d'Androm&egrave;de (Ethiopie). <br>
        <img src="images/puce.gif" width="13" height="10"> Techniques 
        de Combat : Rolling Defense (Cercles de D&eacute;fense), Nebula Chain 
        (Cha&icirc;nes N&eacute;bulaires), Thunder Wave (Vague de Tonnerre), Nebula 
        Stream (Tornade N&eacute;bulaire), Nebula Storm (Temp&ecirc;te N&eacute;bulaire), 
        Spider Net (Toile d'Araign&eacute;e), Casting Net (Filet de Capture), 
        Spiral Duct (Pi&egrave;ge de Spirale), Boomerang Shoot (Cha&icirc;ne Boomerang), 
        Wild Trap (Pi&egrave;ge de Chasse), Great Capture (Grande Capture) </font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/perso_ikki.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Ikki, Chevalier de Bronze du Ph&eacute;nix</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Pays d'Origine : Japon.<br>
        <img src="images/puce.gif" width="13" height="10"> Lieu d'entra&icirc;nement 
        : Ile de la mort (Oc&eacute;an Pacifique).<br>
        <img src="images/puce.gif" width="13" height="10"> Techniques 
        de Combat : H&ocirc; &Ocirc; Gen Ma Ken (Illusion du Ph&eacute;nix), Ho 
        Yoku Ten Sh&ocirc; (Les Ailes du Ph&eacute;nix) </font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/pegase_noir.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Chevalier Noir de P&eacute;gase</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Pays d'Origine : Isra&euml;l.<br>
        </font><font color="#000000"><img src="images/puce.gif" width="13" height="10"></font> 
        Lieu d'entra&icirc;nement : &icirc;le de la Reine Morte.<br>
        <font color="#000000"><img src="images/puce.gif" width="13" height="10"></font> 
        Technique de Combat : Black Ry&ucirc; Sei Ken (M&eacute;t&eacute;ores 
        Noirs / Mort Noire) .</p>
      <p><font color="#000000"> </font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/cygne_noir.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Chevalier Noir du Cygne</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Pays d'Origine : Finlande.<br>
        </font><font color="#000000"><img src="images/puce.gif" width="13" height="10"></font> 
        Lieu d'entra&icirc;nement : &icirc;le de la Reine Morte.<br>
        <font color="#000000"><img src="images/puce.gif" width="13" height="10"></font> 
        Technique de Combat : Black Blizzard (Blizzard Noir). </p>
      <p><font color="#000000"> </font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/dragon_noir.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Chevalier Noir du Dragon</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Pays d'Origine : Pologne.<br>
        </font><font color="#000000"><img src="images/puce.gif" width="13" height="10"></font> 
        Lieu d'entra&icirc;nement : &icirc;le de la Reine Morte.<br>
        <font color="#000000"><img src="images/puce.gif" width="13" height="10"></font> 
        Technique de Combat : Aucune (aucun nom officiel) . </p>
      <p><font color="#000000"> </font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/andromede_noir.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Chevalier Noir d'Androm&eacute;de</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Pays d'Origine : Turquie.<br>
        </font><font color="#000000"><img src="images/puce.gif" width="13" height="10"></font> 
        Lieu d'entra&icirc;nement : &icirc;le de la Reine Morte.<br>
        <font color="#000000"><img src="images/puce.gif" width="13" height="10"></font> 
        Technique de Combat : Black Fang Nebula (Morsure Noire de la Cha&icirc;ne 
        N&eacute;bulaire) . </p>
      <p><font color="#000000"> </font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/phenix_noir.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Chevalier Noir du Ph&eacute;nix</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Pays d'Origine : Inconnu.<br>
        </font><font color="#000000"><img src="images/puce.gif" width="13" height="10"></font> 
        Lieu d'entra&icirc;nement : &icirc;le de la Reine Morte.<br>
        <font color="#000000"><img src="images/puce.gif" width="13" height="10"></font> 
        Technique de Combat : Aucune (aucun nom officiel) . </p>
      <p><font color="#000000"> </font></p>
    </td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="8" cellpadding="0">
  <tr> 
    <td valign="top" class="Texte_Gras" width="130">&nbsp;</td>
    <td valign="top" class="Texte_Gras"> 
      <div align="center" class="Vainqueur"><font color="#000000" class="Description">Coups 
        du Chevalier de P&eacute;gase</font></div>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_seiya_1.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        M&eacute;t&eacute;or de Pegas Niveau 1</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 10. Pour le chevalier Seiya ou le chevalier 
        Noir de Pegase, l'attaque sera doubl&eacute;, donc de 20.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_seiya_2.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        M&eacute;t&eacute;or de Pegas Niveau 2</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 20. Pour le chevalier Seiya ou le chevalier 
        Noir de Pegase, l'attaque sera doubl&eacute;, donc de 40.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_seiya_3.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        M&eacute;t&eacute;or de Pegas Niveau 3</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 30. Pour le chevalier Seiya ou le chevalier 
        Noir de Pegase, l'attaque sera doubl&eacute;, donc de 60.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_seiya_4.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        M&eacute;t&eacute;or de Pegas Niveau 4</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 40. Pour le chevalier Seiya ou le chevalier 
        Noir de Pegase, l'attaque sera doubl&eacute;, donc de 80.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_seiya_5.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        M&eacute;t&eacute;or de Pegas Niveau 5</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 50. Pour le chevalier Seiya ou le chevalier 
        Noir de Pegase, l'attaque sera doubl&eacute;, donc de 100.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_seiya_6.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        M&eacute;t&eacute;or de Pegas Niveau 6</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 60. Pour le chevalier Seiya ou le chevalier 
        Noir de Pegase, l'attaque sera doubl&eacute;, donc de 120.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_seiya_7.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        M&eacute;t&eacute;or de Pegas Niveau 1</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 70. Pour le chevalier Seiya ou le chevalier 
        Noir de Pegase, l'attaque sera doubl&eacute;, donc de 170.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <div align="center" class="Vainqueur"><font color="#000000" class="Rubrique">Coups 
        du Chevalier du Cygne</font></div>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_hyoga_1.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Poussi&eacute;re de Diamant Niveau 1</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 10. Pour le chevalier Hyoga ou le chevalier 
        Noir du Cygne, l'attaque sera de 20.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_hyoga_2.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Poussi&eacute;re de Diamant Niveau 2</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 20. Pour le chevalier Hyoga ou le chevalier 
        Noir du Cygne, l'attaque sera de 40.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_hyoga_3.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Poussi&eacute;re de Diamant Niveau 3</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 30. Pour le chevalier Hyoga ou le chevalier 
        Noir du Cygne, l'attaque sera de 60.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_hyoga_4.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Poussi&eacute;re de Diamant Niveau 4</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 40. Pour le chevalier Hyoga ou le chevalier 
        Noir du Cygne, l'attaque sera de 80.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_hyoga_5.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Poussi&eacute;re de Diamant Niveau 5</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 50. Pour le chevalier Hyoga ou le chevalier 
        Noir du Cygne, l'attaque sera de 100.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_hyoga_6.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Poussi&eacute;re de Diamant Niveau 6</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 60. Pour le chevalier Hyoga ou le chevalier 
        Noir du Cygne, l'attaque sera de 120.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_hyoga_7.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Poussi&eacute;re de Diamant Niveau 7</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 70. Pour le chevalier Hyoga ou le chevalier 
        Noir du Cygne, l'attaque sera de 140.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <div align="center" class="Vainqueur"><font color="#000000" class="Rubrique">Coups 
        du Chevalier du Dragon</font></div>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_shiryu_1.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Col&eacute;re du Dragon Niveau 1</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 10. Pour le chevalier Shiryu ou le chevalier 
        Noir du Dragon, l'attaque sera de 20.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_shiryu_2.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Col&eacute;re du Dragon Niveau 2</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 20. Pour le chevalier Shiryu ou le chevalier 
        Noir du Dragon, l'attaque sera de 40.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_shiryu_3.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Col&eacute;re du Dragon Niveau 3</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 30. Pour le chevalier Shiryu ou le chevalier 
        Noir du Dragon, l'attaque sera de 60.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_shiryu_4.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Col&eacute;re du Dragon Niveau 4</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 40. Pour le chevalier Shiryu ou le chevalier 
        Noir du Dragon, l'attaque sera de 80.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_shiryu_5.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Col&eacute;re du Dragon Niveau 5</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 50. Pour le chevalier Shiryu ou le chevalier 
        Noir du Dragon, l'attaque sera de 100.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_shiryu_6.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Col&eacute;re du Dragon Niveau 6</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 60. Pour le chevalier Shiryu ou le chevalier 
        Noir du Dragon, l'attaque sera de 120.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_shiryu_7.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Col&eacute;re du Dragon Niveau 1</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 70. Pour le chevalier Shiryu ou le chevalier 
        Noir du Dragon, l'attaque sera de 140.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <div align="center" class="Vainqueur"><font color="#000000" class="Description">Coups 
        du Chevalier d'Androm&eacute;de</font></div>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_shun_1.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Chaines Nebulaire Niveau 1</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 10. Pour le chevalier Shun ou le chevalier 
        Noir d'Androm&eacute;de, l'attaque sera de 20.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_shun_2.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Chaines Nebulaire Niveau 2</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 20. Pour le chevalier Shun ou le chevalier 
        Noir d'Androm&eacute;de, l'attaque sera de 40.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_shun_3.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Chaines Nebulaire Niveau 3</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 30. Pour le chevalier Shun ou le chevalier 
        Noir d'Androm&eacute;de, l'attaque sera de 60.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_shun_4.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Chaines Nebulaire Niveau 4</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 40. Pour le chevalier Shun ou le chevalier 
        Noir d'Androm&eacute;de, l'attaque sera de 80.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_shun_5.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Chaines Nebulaire Niveau 5</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 50. Pour le chevalier Shun ou le chevalier 
        Noir d'Androm&eacute;de, l'attaque sera de 100.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_shun_6.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Chaines Nebulaire Niveau 6</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 60. Pour le chevalier Shun ou le chevalier 
        Noir d'Androm&eacute;de, l'attaque sera de 120.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_shun_7.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Chaines Nebulaire Niveau 7</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 70. Pour le chevalier Shun ou le chevalier 
        Noir d'Androm&eacute;de, l'attaque sera de 140.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <div align="center" class="Vainqueur"><font color="#000000" class="Description">Coups 
        du Chevalier du Ph&eacute;nix</font></div>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_ikki_1.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Les Ailes du Phenix Niveau 1</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 10. Pour le chevalier Ikki ou le chevalier 
        Noir du Phenix, l'attaque sera de 20.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_ikki_2.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Les Ailes du Phenix Niveau 2</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 20. Pour le chevalier Ikki ou le chevalier 
        Noir du Phenix, l'attaque sera de 40.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_ikki_3.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Les Ailes du Phenix Niveau 3</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 30. Pour le chevalier Ikki ou le chevalier 
        Noir du Phenix, l'attaque sera de 60.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_ikki_4.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Les Ailes du Phenix Niveau 4</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 40. Pour le chevalier Ikki ou le chevalier 
        Noir du Phenix, l'attaque sera de 80.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_ikki_5.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Les Ailes du Phenix Niveau 5</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 50. Pour le chevalier Ikki ou le chevalier 
        Noir du Phenix, l'attaque sera de 100.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_ikki_6.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Les Ailes du Phenix Niveau 6</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 60. Pour le chevalier Ikki ou le chevalier 
        Noir du Phenix, l'attaque sera de 120.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/att_ikki_7.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Les Ailes du Phenix Niveau 7</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Attaque et dommage de force 70. Pour le chevalier Ikki ou le chevalier 
        Noir du Phenix, l'attaque sera de 140.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <div align="center" class="Vainqueur"><font color="#000000" class="Description">Coups 
        Sp&eacute;ciaux</font></div>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/bonus_armure.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Protection de l'Armure d'OR du Sagitaire !</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Divise par deux les attaques de l'adversaire pendant 5 rounds et ne subit aucun d&egrave;gats pendant le round en cours</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/bonus_athena.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Ath&eacute;na Exclamation !</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Divise par deux les Points de Vie de l'adversaire et ne subit aucun d&egrave;gat.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/bonus_cosmos.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Brule Mon Cosmos !</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Multiplie par deux la prochaine attaque, mais n'offre aucune parade pendant 
        le round en cours.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/bonus_jamir.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        M&ucirc; redonne moi des Forces !</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Remonte votre niveau de vie de 150 et bloque les coups speciaux 
        de l'adversaire pendant le round en cours.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/bonus_mu.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Crystal Wall !</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Stop net l'attaque de l'adversaire et bloque tous coups sp&eacute;ciaux 
        de l'adversaire pendant le round en cours. Aucun dommage n'est sublie.</font></p>
    </td>
  </tr>
  <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/bouclier.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Bouclier de la méduse !</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Remplace une carte de l'adversaire par une carte inactive. Ne subit aucun d&eacute;gat pendant le tour en cours.</font></p>
    </td>
  </tr>
    <tr> 
    <td valign="top" class="Texte_Gras" width="130"> 
      <div align="center"><font color="#000000"><img src="images/statut.png" width="113" height="150"></font></div>
    </td>
    <td valign="top" class="Texte_Gras"> 
      <p><font color="#000000"><br>
        Status de la méduse !</font></p>
      <p><font color="#000000"><img src="images/puce.gif" width="13" height="10"> 
        Cette carte apparait dans votre jeu lorsque l'adversaire pose un bouclier de la méduse. Cette carte n'a aucune fonction. Si vous la jou&eacute;, vous subirez tous les d&eacute;gats de votre adversaire. </font></p>
    </td>
  </tr>
</table>
<div align="center" class="Vainqueur"><br>
  <span class="Description"> Bon Jeu !!! </span> 
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
