<!DOCTYPE html>
<html>
	<head>
		<title>Curl Test</title>
	</head>
	<body>
<?php

require ("include/class.fitocracy-client.php");

// create new fitocracy client
$f = new FitocracyClient("<username>", "<password>");

// attempt to get total xp stat for user
$r = $f->getTotalXp();
echo "\t\t<p>" . (empty($r['error']) ? $r['xp'] : $r['error']) . "</p>\n";

?>
	</body>
</html>
