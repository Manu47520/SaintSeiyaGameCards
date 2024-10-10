<html>
<HEAD>
<TITLE>Seinaru kuro no tatakai</TITLE>
<META NAME="TITLE" CONTENT="Seinaru kuro no tatakai">
<META NAME="DESCRIPTION" CONTENT="Un petit jeu de carte en ligne dans l'univers de Saint Seiya. Vous incarnez un chevalier de bronze, et devez combattre un chevalier noir.">
<META NAME="KEYWORDS" CONTENT="saint seiya, saint, seiya, gt, network, cards, chevalier du zodiac, zodiac, chevalier, jeu, game, carte, cartes, card, seiya, shiryu, shun, ikki, hyoga, andromede, phenix, pegase, dragon, cygne, chevalier noir, noir">
<META NAME="OWNER" CONTENT="Emmanuel MARCEROU">
<META NAME="AUTHOR" CONTENT="Emmanuel MARCEROU">
<META HTTP-EQUIV="CONTENT-LANGUAGE" CONTENT="French">
<META NAME="ROBOTS" CONTENT="index,nofollow">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        html, body {
			background-color: black;
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden; /* Empêche l'apparition des ascenseurs */
        }

        iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none; /* Enlève la bordure de l'iframe */
        }
    </style>
</HEAD>
<body>
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
    <iframe src="intro.php"></iframe>
</BODY>
</HTML>
