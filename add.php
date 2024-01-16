<?php

?>
<!DOCTYPE html>
<html lang="nl">
<header>

  <head>
    <meta charset="utf-8">
    <title>wijnerrino Dylan Udes</title>
    <link href="add.css" rel="stylesheet" type="text/css" media="screen">

    <link href="style.css" rel="stylesheet" type="text/css" media="screen">
    <link href="bestel.css" rel="stylesheet" type="text/css" media="screen">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
 
      <div class="header">
        <a href="index.html" class="logo">Coffee Company</a>

        <nav>
         
          <input type="checkbox" id="menu">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="bestelFormulier.php">bestellen</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="add.php">toevoegen</a></li>
            <li><a href="add.php2">producten verwijderen + updaten</a></li>
          </ul>
        </nav>
      </div>
       <label for="menu" class="toggle">&#9776;</label>
    
   
</header

<body>
   <main>
<section>
<article>
<h1>product toevoegen</h1>

<form method="POST" action="add2.php">
<p>
    <label>type:</label>
    <select name="type ">
        <option value="bier">Bier</option>
        <option value="wijn">wijn</option>
        <option value="champagne">champagne</option>

</p>

<p>
<label>producent</label>

<input type="text" name="producent" value="" placeholder="producent">
</p>

<p>
<label><h1>naam</h1></label>
<input type="text" name="naam" value="" placeholder="naam">
</p>

<p>
<label><h1>soort</h1></label>
<input type="text" name="soort" value="" placeholder="soort">
</p>

<p>
<label><h1>land</h1></label>
<input type="text" name="land" value="" placeholder="land">
</p>

<p>
<label><h1>prijs</h1></label>
<input type="text" name="prijs" value="" placeholder="prijs">
</p>

<p>
<label><h1>voorraad</h1></label>
<input type="text" name="voorraad" value="" placeholder="voorraad">
</p>
<p><input type="submit" value="opslaan"></p>
</form>
</article>


</section>


   </main>
 

</body>

</html>




<?php
include 'include/footer.php';
?>
