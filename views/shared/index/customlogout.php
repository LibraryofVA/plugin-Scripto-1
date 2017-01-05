<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>custom logout</title>
</head>
<body>
<?php
require_once getcwd().'/plugins/Scripto/libraries/Scripto.php';
$scripto = ScriptoPlugin::getScripto();
// using a MediaWiki users for anonymous edits instead of * account
$currentUser = $scripto->getUserName();
echo $currentUser;
if ($scripto->getUserName() == 'Scripto'):
	$scripto->logout();
endif;
?>
</body>
</html>