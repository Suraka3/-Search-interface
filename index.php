
<!DOCTYPE html>
<html>
<head>
  <title>Zeitschriften</title>  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
 <div class="container">
      <br>
      <h3>Einfache Suche</h3>
  <form class="form" action="functions.php" method="post">
    <div class="form-group">
      <label for="text">Ihre Mediensuche:</label>
      <input type="text" class="form-control" name="zeitschriftentitel" placeholder="Geben Sie bitte einen Titel ein" name="text">
    </div> 
	<input type="submit" class="btn btn-default" name="simpleSearch" value="Suche">
  </form>  
 <hr> 

      <h3>Erweiterte Suche</h3>
  <form class="form-inline" action="functions.php" method="post">  <?php  //form-inline -- ?>
    <div class="form-group">  <?php  //form-inline -- ?>
      <label for="text">     </label>
    <select type="text" class="form-control" name="firstSelect">
        <option value="zeitschriftentitel">Zeitschriftentitel</option>
        <option value="englUebersetzung">engl Übersetzung</option>
        <option value="abkuerzungstitel">Abkürzung</option>
        <option value="signatur">Signatur</option>
        <option value="issn">ISSN</option>
        <option value="printbestand">Print-Bestand</option>
        <option value="fehlendeheftejahrg">fehlende Hefte/ Jahrg</option>
        <option value="linkurl">Link/URL</option>
        <option value="linkurl2">Link/URL</option>
        <option value="vorgaenger">Voränger</option>
        <option value="fortsetzung">Fortsetzung</option>
        <option value="bemerkungen">Bemerkungen</option>   
    </select>
    </div>
    <div class="form-group">
      <label for="text">     </label>
      <input type="text" class="form-control" placeholder="Geben Sie bitte einen Eintrag ein" name="firstInput">
    </div>
    
    <br><br>
        <div class="form-group">
      <label for="text">     </label>
    <select type="text" class="form-control" name="secondSelect">
        <option value="zeitschriftentitel">Zeitschriftentitel</option>
        <option value="englUebersetzung">engl Übersetzung</option>
        <option value="abkuerzungstitel">Abkürzung</option>
        <option value="signatur">Signatur</option>
        <option value="issn">ISSN</option>
        <option value="printbestand">Print-Bestand</option>
        <option value="fehlendeheftejahrg">fehlende Hefte/ Jahrg</option>
        <option value="linkurl">Link/URL</option>
        <option value="linkurl2">Link/URL</option>
        <option value="vorgaenger">Voränger</option>
        <option value="fortsetzung">Fortsetzung</option>
        <option value="bemerkungen">Bemerkungen</option>   
    </select>
    </div>
    <div class="form-group">
      <label for="text">     </label>
      <input type="text" class="form-control" placeholder="Geben Sie bitte einen Eintrag ein" name="secondInput">
    </div>
    <br><br>
        <div class="form-group">
      <label for="text">     </label>
    <select type="text" class="form-control" name="thirdSelect">
        <option value="zeitschriftentitel">Zeitschriftentitel</option>
        <option value="englUebersetzung">engl Übersetzung</option>
        <option value="abkuerzungstitel">Abkürzung</option>
        <option value="signatur">Signatur</option>
        <option value="issn">ISSN</option>
        <option value="printbestand">Print-Bestand</option>
        <option value="fehlendeheftejahrg">fehlende Hefte/ Jahrg</option>
        <option value="linkurl">Link/URL</option>
        <option value="linkurl2">Link/URL</option>
        <option value="vorgaenger">Voränger</option>
        <option value="fortsetzung">Fortsetzung</option>
        <option value="bemerkungen">Bemerkungen</option>   
    </select>
    </div>
    <div class="form-group">
      <label for="text">     </label>
      <input type="text" class="form-control" placeholder="Geben Sie bitte einen Eintrag ein" name="thirdInput">
    </div>
    <br><br> 
	<input type="submit" class="btn btn-default" name="multipleSearch" value="Suche">

  </form>
	<hr>

</div>  
    
</body>

</html>