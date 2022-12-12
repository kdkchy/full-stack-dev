<?php
// qrcode https://sourceforge.net/projects/phpqrcode/
// barcode https://github.com/herziwp/php7-barcode/blob/main/barcode.php
include "phpqrcode/qrlib.php"; 

if($_GET['type'] == 'QR') {
	QRcode::png($_GET['input'] ? $_GET['input'] : 'nihil'); 
} elseif($_GET['type'] == 'BRC') {
	header('Location: barcode.php?text='. $_GET['input']);
}
else {
	QRcode::png($_GET['input'] ? $_GET['input'] : 'nihil'); 
}

?>