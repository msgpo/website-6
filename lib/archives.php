<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>lists.tuxfamily.org/slitaz mailing list</title>
	<!-- link rel="stylesheet" type="text/css" href="/slitaz.css" / -->
	<style type="text/css">
body {
	background: #ffffff;
	color: black;
	font: 13px sans-serif, vernada, arial;
	margin: 0;
	#border-top: 34px solid #f1f1f1;
}
	table {
		border: 1px solid #000000;
		width: variable;
		border-collapse: collapse;
		margin: 2px 2px;
	}
	td {
		border: 1px dotted #6495ed;
		width: variable;
		padding: 2px;
	}
	.rowodd {
		background-color: #ffffff;
	}
	.roweven {
		background-color: #e1ffe1; /* the tower */
	}
	.odd {
		background-color: #ffffff;
	}
	.even {
		background-color: #e1ffe1; /* the tower */
	}
	th {
		border: 1px solid #000000;
		width: variable;
		padding: 4px;
	}
	.alignright {
		text-align: right;
	}
	</style>
</head>
<body>
<?php

function translate($word)
{
	if (isset($_GET['lang'])) switch ($_GET['lang']) {
	case "de" :
		switch ($word) {
		case "Archives"  : return "Archiv";
		case "Archive"   : return "Archiv";
		case "View by"   : return "Ansicht von";
		case "Messages count":
		case "Number"    : return "Zahl";
		case "Total size": return "Gesamtgr\&ouml;\&szlig;e";
		case " or "      : return " oder ";
		case "Month/Year":
		case "Date"      : return "datum";
		}
		break;
	case "es" :
		switch ($word) {
		case "Archives"  : return "Archivos";
		case "Archive"   : return "Archivo";
		case "View by"   : return "Vista";
		case "Messages count":
		case "Number"    : return "n\&uacute;mero";
		case "Total size": return "Tama\&ntilde;o total";
		case "Thread"    : return "hilo";
		case " or "      : return " o ";
		case "Month/Year":
		case "Date"      : return "Fecha";
		}
		break;
	case "fr" :
		switch ($word) {
		case "View by"   : return "Tri\&eacute; par";
		case "Messages count":
		case "Number"    : return "Nombre";
		case "Total size": return "Volume";
		case "Thread"    : return "Sujet";
		case " or "      : return " ou ";
		case "Month/Year": return "Date";
		}
		break;
	case "pt" :
		switch ($word) {
		case "Archives"  : return "Arquivos";
		case "Archive"   : return "Arquivo";
		case "View by"   : return "Exibir por";
		case "Messages count":
		case "Number"    : return "n\&uacute;mero";
		case "Total size": return "O tamanho total";
		case "Thread"    : return "T\&oacute;pico";
		case " or "      : return " ou ";
		case "Month/Year":
		case "Date"      : return "Data";
		}
		break;
	case "ru" :
		switch ($word) {
		case "Archives"      : return "Архивы";
		case "Archive"       : return "Архив";
		case "Month/Year"    : return "Год-месяц";
		case "View by"       : return "Смотреть по";
		case "Thread"        : return "теме";
		case " or "          : return " или ";
		case "Date"          : return "дате";
		case "Messages count": return "Сообщений";
		case "Total size"    : return "Размер";
		case "Number"        : return "номер";
		}
		break;
	default:
		switch ($word) {
		case "Messages count": return "Number";
		case "Month/Year": return "Date";
		}
		break;
	}
	return $word;
}

echo '<h4>'.translate("Archives").' 2007-'.date('Y')."</h4>\n";

$url = "://listengine.tuxfamily.org/lists.tuxfamily.org/slitaz/";

$script  = "-e '/<table/,/<\/table>/!d' ";
$script .= "-e 's|html\"|html\" target=\"_blank\"|g' ";
$script .= "-e 's|https*$url||g' -e 's|href=\"|href=\"https$url|g' ";
foreach (array("Archive","View by","Number","Total size",
	       "Messages count", "Month/Year",
	       "Thread"," or ","Date") as $word) {
	$script .= "-e 's|".$word."|".translate($word)."|' ";
}
system("wget -q --no-check-certificate -O - https$url | sed $script");
?>
</body>
</html>
