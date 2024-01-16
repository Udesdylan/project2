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
  <header>
      <div class="header">
        <a href="index.php" class="logo">Coffee Company</a>

        <nav>
         
          <input type="checkbox" id="menu">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="bestelFormulier.php">bestellen</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="add.php">toevoegen</a></li>
            <li><a href="add2.php">producten verwijderen + updaten</a></li>
          </ul>
        </nav>
      </div>
       <label for="menu" class="toggle">&#9776;</label>
     
    </header>

<div class="container">
    <img src="zo-wordt-de-prijs-van-een-fles-wijn-bepaald.webp" alt="Afbeelding"/>
    <div>
        <h1>Ontdek de Wereld van Wijnen</h1>
        <p>Bij Coffee Company koesteren we de kunst van wijn maken en het genot van het proeven van verfijnde wijnen. Onze selectie is zorgvuldig samengesteld om een unieke ervaring te bieden aan elke wijnliefhebber, of je nu een beginnende ontdekker bent of een doorgewinterde connaisseur.</p>
    </div>

</div>

<div class="container">
    <img src="rode-wijn-verkleuring-tanden.jpg" alt="Afbeelding"/>
    <div>
        <h1>wijnproeverijen en Evenementen</h1>
<p>Bij Coffee Company geloven we in het delen van de passie voor wijn. Doe mee met onze regelmatige wijnproeverijen en evenementen, waar je kunt genieten van nieuwe ontdekkingen, de kunst van het proeven kunt verfijnen en meer te weten kunt komen over de intrigerende wereld van wijn.</p>
    </div>
</div>

<div class="container">
    <img src="MoetChandon-ImperialBrut-900-CASE-T-ERetailKit-ST-OP-IN-PNG.png" alt="Afbeelding"/>
    <div>
        <h1>De Koning van Onze Wijnkelder</h1>
<p>
Bij Coffee Company presenteren we met trots onze meest geprezen wijn: Excellence Rouge. Deze wijn is het kroonjuweel van onze selectie en belichaamt de essentie van vakmanschap en verfijning.

De Druivenkunst:
Excellence Rouge wordt vervaardigd uit zorgvuldig geselecteerde druiven van de meest vooraanstaande wijngaarden. De combinatie van Cabernet Sauvignon, Merlot en een vleugje Petit Verdot resulteert in een complexe melange van smaken die de kenmerkende elegantie van deze wijn definiëren.</p></div>
</div>


<?php include 'include/footer.php'; ?>

</body>
</html>


<style>
  
        .container {
            display: flex;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ecf0f1;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            line-height: 1.6;
        }

        .container img {
            max-width: 50%;
            border-radius: 8px;
            margin-right: 20px;
        
        }

      
    </style>
</head>
