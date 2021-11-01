<?php
/**
* Webpage shows the disclaimer.
*/
require_once "includes/bootstrap_header.php";
require_once "classes/Database.php"
?>

<!DOCTYPE html>

	<!-- header: Include CSS files and necessary bootstrap files form the web --> 
	<head>
		<title>Gästebuch</title>
		<meta charset="UTF-8">
		<?php require_once "includes/include_bootstrap.php"; ?>
		<link rel="stylesheet" href="../resources/css/blink.css">
	</head>
	<!-- /header -->

	<!-- body: Contains the Greeting text, name of travel agency and additional offers -->
	<body style="width:auto">
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col-14">
                    <br><br>
                    <h1 style='text-align:center;font-size:50px'>Haftungsausschluss<br></h1>
                    <br><br>
                </div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col">
                </div>
                <div class="col-14">

                    <h5 style='text-align:center;'>1. Inhalt des Onlineangebotes</h5>
                    <p style='text-align:justify;'>Der Autor übernimmt keinerlei Gewähr für die Aktualität, Richtigkeit und Vollständigkeit der bereitgestellten
                    Informationen auf unserer Website. Haftungsansprüche gegen den Autor, welche sich auf Schäden materieller
                    oder ideeller Art beziehen, die durch die Nutzung oder Nichtnutzung der dargebotenen Informationen bzw.
                    durch die Nutzung fehlerhafter und unvollständiger Informationen verursacht wurden, sind grundsätzlich
                    ausgeschlossen, sofern seitens des Autors kein nachweislich vorsätzliches oder grob fahrlässiges Verschulden vorliegt.
                    Alle Angebote sind freibleibend und unverbindlich. Der Autor behält es sich ausdrücklich vor, Teile der Seiten oder das
                    gesamte Angebot ohne gesonderte Ankündigung zu verändern, zu ergänzen, zu löschen oder die Veröffentlichung zeitweise
                    oder endgültig einzustellen.</p>

                    <h5 style='text-align:center;'>2. Verweise und Links</h5>
                    <p style='text-align:justify;'>Bei direkten oder indirekten Verweisen auf fremde Webseiten (Hyperlinks), die außerhalb des Verantwortungsbereiches
                    des Autors liegen, würde eine Haftungsverpflichtung ausschließlich in dem Fall in Kraft treten, in dem der Autor
                    von den Inhalten Kenntnis hat und es ihm technisch möglich und zumutbar wäre, die Nutzung im Falle rechtswidriger
                    Inhalte zu verhindern. Der Autor erklärt hiermit ausdrücklich, dass zum Zeitpunkt der Linksetzung keine illegalen
                    Inhalte auf den zu verlinkenden Seiten erkennbar waren. Auf die aktuelle und zukünftige Gestaltung, die Inhalte oder
                    die Urheberschaft der verlinkten/verknüpften Seiten hat der Autor keinerlei Einfluss. Deshalb distanziert er sich
                    hiermit ausdrücklich von allen Inhalten aller verlinkten/verknüpften Seiten, die nach der Linksetzung verändert wurden.
                    Diese Feststellung gilt für alle innerhalb des eigenen Internetangebotes gesetzten Links und Verweise sowie für Fremdeinträge
                    in vom Autor eingerichteten Gästebüchern, Diskussionsforen, Linkverzeichnissen, Mailinglisten und in allen anderen Formen von
                    Datenbanken, auf deren Inhalt externe Schreibzugriffe möglich sind. Für illegale, fehlerhafte oder unvollständige Inhalte und
                    insbesondere für Schäden, die aus der Nutzung oder Nichtnutzung solcherart dargebotener Informationen entstehen, haftet allein
                    der Anbieter der Seite, auf welche verwiesen wurde, nicht derjenige, der über Links auf die jeweilige Veröffentlichung lediglich verweist.</p>

                    <h5 style='text-align:center;'>3. Urheber- und Kennzeichenrecht</h5>
                    <p style='text-align:justify;'>Der Autor ist bestrebt, in allen Publikationen die Urheberrechte der verwendeten Bilder, Grafiken, Tondokumente, Videosequenzen und Texte zu
                    beachten, von ihm selbst erstellte Bilder, Grafiken, Tondokumente, Videosequenzen und Texte zu nutzen oder auf lizenzfreie Grafiken,
                    Tondokumente, Videosequenzen und Texte zurückzugreifen. Alle innerhalb des Internetangebotes genannten und ggf. durch Dritte geschützten
                    Marken- und Warenzeichen unterliegen uneingeschränkt den Bestimmungen des jeweils gültigen Kennzeichenrechts und den Besitzrechten der
                    jeweiligen eingetragenen Eigentümer. Allein aufgrund der bloßen Nennung ist nicht der Schluss zu ziehen, dass Markenzeichen nicht durch
                    Rechte Dritter geschützt sind! Das Copyright für veröffentlichte, vom Autor selbst erstellte Objekte bleibt allein beim Autor der Seiten.
                    Eine Vervielfältigung oder Verwendung solcher Grafiken, Tondokumente, Videosequenzen und Texte in anderen elektronischen oder gedruckten
                    Publikationen ist ohne ausdrückliche Zustimmung des Autors nicht gestattet.</p>

                    <h5 style='text-align:center;'>4. Datenschutz</h5>
                    <p style='text-align:justify;'>Sofern innerhalb des Internetangebotes die Möglichkeit zur Eingabe persönlicher oder geschäftlicher Daten (Emailadressen, Namen, Anschriften)
                    besteht, so erfolgt die Preisgabe dieser Daten seitens des Nutzers auf ausdrücklich freiwilliger Basis. Die Inanspruchnahme und Bezahlung aller
                    angebotenen Dienste ist – soweit technisch möglich und zumutbar – auch ohne Angabe solcher Daten bzw. unter Angabe anonymisierter Daten oder
                    eines Pseudonyms gestattet. Die Nutzung der im Rahmen des Impressums oder vergleichbarer Angaben veröffentlichten Kontaktdaten wie
                    Postanschriften, Telefon- und Faxnummern sowie Emailadressen durch Dritte zur Übersendung von nicht ausdrücklich angeforderten Informationen ist
                    nicht gestattet. Rechtliche Schritte gegen die Versender von sogenannten Spam-Mails bei Verstössen gegen dieses Verbot sind ausdrücklich vorbehalten.</p>

                </div>
                <div class="col"></div>
            </div>
        </div>
        <br><br>
        <?php
        require_once "includes/bootstrap_footer.php";
        ?>

	</body>

</html>