<html>
<head>
    <title>gesendet mit php - Senden</title>
    <link rel="stylesheet" type="text/css" href="styles.css"/>
</head>
<body>
    <h1>Datei - Senden</h1>
    <?php
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $nachricht = $_POST["nachricht"];

    if($name == "" or $mail =="" or $nachricht =="") {
        echo "Du hast die felder nicht ausgef&uuml;llt...";
    } else {
        $verbindung = mysql_connect ("localhost", "ergendwass", "hierauch")
        or die ("fehler im System");

        mysql_select_db("blablabla")
        or die ("Verbindung zur Datenbank war nicht möglich");

        
        mysql_close($verbindung);
    }

    ?>
</body>
</html>
