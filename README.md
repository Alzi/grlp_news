GRLP-News
=========

Wordpress-Plugin für die Website des Landesverbandes von
Bündnis 90/Die Grünen Rheinland Pfalz

Das PlugIn fügt einen Shortcode hinzu mit dem eine dreispaltige Ansicht
der aktuellen Beiträge der Kategorie 'Presse' dargestellt werden kann.
Die Seiten-Einstellung `Layout selbst gestalten` im
[Sunflower](https://github.com/codeispoetry/sunflower)-Theme
ist sinnvoll, weil dadurch die 3 Spalten etwas mehr Platz haben.
Das Plugin wird noch weiter entwickelt. [Hier](https://github.com/Alzi/grlp_news)
geht es zum Plugin auf Github. 

Anwendung
---------

Beispiel

	[news titel="Aktuelle Nachrichten" anzahl="3" kategorie="Presse"]

Alle Attribute können auch weggelassen werden.
Dann wird __keine__ Überschrift über die Spalten gesetzt und es werden
__3 Spalten__ der Kategorie __Presse__ angezeigt.
Wenn ein Beitragsbild eingestellt ist, wird es direkt nach dem Titel angezeigt.
Mit der Option __nur_bild="wahr"__ kann der Teasertext dann auch weggelassen
werden. Will man diese Option wieder ausschalten, muss man sie einfach wieder löschen.
(`nur_bild="falsch"` funktioniert nicht.)

Versionsverlauf
---------------

#### V 1.2.1

- Die Optionen `spalten` funktioniert nun, wie sie soll. Wenn `anzahl` > `spalten`
entstehen mehrere Zeilen.
- Thumbnail-Größe angepasst, Teasertext umfließt das Thumbnail in der Zeilen-Ansicht.
- Typo

#### V 1.2

- Die option `anzahl` gibt jetzt an, wie viele Posts angezeigt werden sollen.
  Die frühere option `spalten` soll dann ab **V1.2.1** die Anzahl der Spalten
  angeben, so dass auch mehrzeilige Darstellung möglich wird.
- Wenn ein Beitragsbild existiert wird es auch angezeigt. 
- Mit der Option `nur_bild="wahr"` kann auch der Teasertext bei vorhandenem 
Bild ausgeblendet werden.
- Die Titelschrift wird nicht mehr angeschnitten (padding hinzugefügt)


#### V 1.1.6

- Simpler Bugfix: Datum wird nun auch angezeigt wenn mehrere News-Posts am selben Tag veröffentlicht werden.

#### V 1.1.5

- Simpler Bugfix: Link in der Plugin Beschreibung korrigiert.

#### V 1.1.4

- NewFeature: Durch den Parameter `ansicht="zeilen"` könnnen die Artikel untereinander dargestellt werden. Die Anzahl der Artikel wird weiterhin über den Parameter `spalten` geregelt. (thanks to Philipp)

#### V 1.1.3

- BugFix: Ein übergebener Titel im shortcode wird nicht mehr länger durch
"Aktuelle Nachrichten" überschrieben (thanks to Philipp)

#### V 1.1.2

- Link zur Github-Seite der Beschreibung hinzugefügt.

#### V 1.1.1

- Abstand zwischen dem _Header_ der Spalte und dem _Inhalt_ veringert.

#### V 1.1

- Durch das Attribut `spalten` kann die Anzahl der angezeigten Spalten
  gesteuert werden. (Nur eine Zeile möglich)

- Durch das Attribut `kategorie` kann die Kategorie aus der die Artikel
  ausgewählt werden sollen gesetzt werden.

#### V 1.0

- Eine 3-spaltige Ansicht der aktuellsten Beiträge aus der Kategorie 'Presse'
- Durch das Attribut `titel` kann eine H1-Überschrift darüber gestellt werden.
