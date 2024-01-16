<?php
include 'include/connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<header>

  <head>
    <meta charset="utf-8">
    <title>wijnerrino Dylan Udes</title>

    <link href="style.css" rel="stylesheet" type="text/css" media="screen">
    <link href="bestel.css" rel="stylesheet" type="text/css" media="screen">
    <link href="contact.css" rel="stylesheet" type="text/css" media="screen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <header>
      <div class="header">
        <a href="index.html" class="logo">Coffee Company</a>

        <nav>
        <label for="menu" class="toggle">&#9776;</label>
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
</header>
<body>



<form id="contact-form" action="#" method="post">
    <label for="name">Naam:</label>
    <input type="text" id="name" name="name">

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email">

    <label for="subject">Onderwerp:</label>
    <input type="text" id="subject" name="subject">

    <label for="message">Bericht:</label>
    <textarea id="message" name="message"></textarea>

    <button type="submit">Verstuur</button>
</form>

<script>
    document.getElementById('contact-form').addEventListener('submit', function (event) {
        event.preventDefault();
   });
</script>

</body>
<?php
include 'include/footer.php';
?>
</html>
  