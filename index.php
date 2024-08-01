<!DOCTYPE html>
<html lang="pl">
<head>
<title>Filmy</title>
<meta charset="utf-8">
<link rel="stylesheet" href="styl1.css">    
</head>
<body>
<div id="panellewy">
<h3>Dostępne gatunki filmu</h3>
<ol>
<li>Sci-Fi</li>
<li>animacja</li>
<li>dramat</li>
<li>horror</li>
<li>komedia</li>
</ol>
        <a href="kadr.jpg" alt="Pobierz obraz">Pobierz obraz</a><br>
        <br>
        <a href="repertuar-kin.pl" target="_blank">Sprawdż repertuar kin</a>
    </div>
    <div id="panelp1"><h1>FILMOTEKA</h1></div>
    
    <div id="panelp2">
         <form action='dodaj.php' method="POST" name="filmoteka" id="filmoteka">
         <label>Tytuł</label><input type="text" name="Tytul"/>
             <br>  
         <label>Gatunek filmu:</label><input type="text"  name="Gatunek" >
         <br>
         <label> Rok produkcji</label><input type="text"
         name="Rok"> 
         <br>
         <label>Ocena</label><input type="text"  name="Ocena">
         <br>
             <input type="reset" name="CZYŚĆ" value="CZYŚĆ">
             <input type="submit" name="DODAJ" value="DODAJ">
        </form>
    </div>
    <div id="panelp3"><img src="kadr.jpg" alt="zdjecie filmowe"></div>
    <div id="stopka"><a>Autor strony : 76890987654</a></div>
    
</body>
</html>
