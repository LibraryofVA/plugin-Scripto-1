<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>custom login</title>
</head>
<body>
<?php
require_once getcwd().'/plugins/Scripto/libraries/Scripto.php';
$scripto = ScriptoPlugin::getScripto();
// using a MediaWiki users for anonymous edits instead of * account
if ($scripto->isLoggedIn()):
	// true, do nothing
else:
	// false, login temp user
	$scripto->login('scripto','PASSWORD');
endif;
?>
</body>
</html>