
<?php
include 'include/bestel.php';

?>

<!DOCTYPE html>
<html lang="nl">
<header>

  <head>
    <meta charset="utf-8">
    <title>wijnerrino Dylan Udes</title>
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
          </ul>
        </nav>
      </div>
       <label for="menu" class="toggle">&#9776;</label>
    
   
</header>

<div class="wrapper">

  <main>
    <article>


      <!DOCTYPE html>
      <html lang="nl">

      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wijn Bestelformulier</title>

      </head>
      <!DOCTYPE html>
      <html lang="en">

      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bestelformulier</title>
      </head>

      <body>

<form method="POST" action="include/bestel.php">

        <form id="bestelFormulier">
          <label for="voornaam">Voornaam:</label>
          <input type="text" id="voornaam" name="voornaam" value="<?php echo $voornaam?>"  placeholder="voornaam">

          <label for="achternaam">Achternaam:</label>
          <input type="text" id="achternaam" name="achternaam" placeholder="achternaam" >

          <label for="straatnaam">Straatnaam:</label>
          <input type="text" id="straatnaam" name="straatnaam"placeholder="smitsweg" >

          <label for="huisnummer">Huisnummer:</label>
          <input type="text" id="huisnummer" name="huisnummer"placeholder="88" >

          <label for="postcode">Postcode:</label>
          <input type="text" id="postcode" name="postcode" placeholder="7589 AB">

          <label for="woonplaats">Woonplaats:</label>
          <input type="text" id="woonplaats" name="woonplaats" placeholder="deventer">

          <label for="email">E-mail:</label>
          <input type="email" id="email" name="email" placeholder="@gmail.com">

          <label for="telefoon">Telefoonnummer:</label>
          <input type="tel" id="telefoon" name="telefoon" placeholder="0652555578">

          <label for="product">Gewenst product:</label>
          <select id="product" name="product" onchange="updatePrijs()" >
            <option value="rode_wijn">Rode wijn</option>
            <option value="witte_wijn">Witte wijn</option>
            <option value="rose_wijn">Rosé wijn</option>
            <option value="">champagne</option>
          </select>

          <label for="aantal">Aantal:</label>
          <input type="number" id="aantal" name="aantal" min="1" onchange="updatePrijs()" >

          <table>
            <thead>
              <tr>
                <th>Product</th>
                <th>Prijs per stuk</th>
                <th>Totaal</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td id="product-naam">Rode wijn</td>
                <td id="product-prijs">€10,00</td>
                <td id="totaal-prijs">€10,00</td>
              </tr>
            </tbody>
          </table>

          <input type="submit" value="Bestellen">
        </form>


      </body>
    </article>
  </main>
  <script src="java.js"></script>
  <aside>
    <p>de aanbieding van de wijn is
      .......
    </p>
    <img src="MoetChandon-ImperialBrut-900-CASE-T-ERetailKit-ST-OP-IN-PNG.png" alt="Beschrijvende tekst van de afbeelding">
  </aside>
</div>
<?php
include 'include/footer.php';
?>
</html>




