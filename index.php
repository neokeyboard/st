
<?php
include 'head.php';
if (isset($_GET['e'])){
	switch ($_GET['e']) {
		case '0':
			include 'reg.php';
			break;
		case '1':
			include 'aut.php';
			break;
		default:
			echo 'lo siento necesitas autorizacion para acceder';
			break;
	}
}else
	include 'subindex.php';
include 'foot.php';
?>