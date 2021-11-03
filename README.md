GRLP-News
=========

Wordpress-Plugin für die Website des Landesverbandes von
Bündnis 90/Die Grünen Rheinland Pfalz

Das PlugIn fügt einen Shortcode hinzu mit dem eine dreispaltige Ansicht
der aktuellen Beiträge der Kategorie 'Presse' dargestellt werden kann.
Die Seiten-Einstellung `Layout selbst gestalten` im __Sunflower__ Theme
ist sinnvoll, weil dadurch die 3 Spalten etwas mehr Platz haben.
Das PlugIn wird noch weiterentwickelt.

Anwendung
---------

	[news 
		titel="Eine optionale Überschrift"
		spalten="<anzahl der darzustellenden Spalten>"
		kategorie="<name der Kategorie>"
	]

Der Shortcode muss in einer Zeile stehen. Hier ist es nur zur besseren
Darstellung der möglichen Attribute mehrzeilig dargestellt. Alle Attribute
können weggelassen werden. Dann wird __keine__ Überschrift über die Spalten
gesetzt und es werden __3 Spalten__ der Kategorie __Presse__ angezeigt.

Versionsverlauf
---------------

### V 1.1.1

- Abstand zwischen dem _Header_ der Spalte und dem _Inhalt_ veringert.

### V 1.1

- Durch das Attribut `spalten` kann die Anzahl der angezeigten Spalten
  gesteuert werden. (Nur eine Zeile möglich)

- Durch das Attribut `kategorie` kann die Kategorie aus der die Artikel
  ausgewählt werden sollen gesetzt werden.

### V 1.0

- Eine 3-spaltige Ansicht der aktuellsten Beiträge aus der Kategorie 'Presse'
- Durch das Attribut `titel` kann einen H1-Überschrift darüber gestellt werden.
