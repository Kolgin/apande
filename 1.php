<?php
session_start();
$_SESSION['Language'] = 'php';
$_SESSION['i'] = 'Wowa';
$_SESSION['not_bed'] = 'agreen';
Echo $_SESSION['Language'] = 'php';
Echo $_SESSION['i'] = 'Wowa';
Echo $_SESSION['not_bed'] = 'agreen';


Function Test1 ($p,$a, $k=black) {
	echo "<br>Hello, $p, u are $a old, u are  $k human pfff";
}
Test1 (Chak, 21, white);
Test1 (Chloja, 22, yellow);
Test1 (Djon, 21);

?>