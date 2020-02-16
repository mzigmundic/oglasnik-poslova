<?php include_once 'konfiguracija/init.php'; ?>

<?php
$posao = new Posao;

$predlozak = new Predlozak('predlosci/home.php');

$kategorija = isset($_GET['kategorija']) ? $_GET['kategorija'] : null;

if ($kategorija) {
	$predlozak->poslovi = $posao->dohvatiPoKategoriji($kategorija);
	$predlozak->naslov = 'Poslovi iz kotegorije ' . $posao->dohvatiKategoriju($kategorija)->ime;
} else {
	$predlozak->naslov = 'Najnoviji poslovi';
	$predlozak->poslovi = $posao->dohvatiSvePoslove();
}

$predlozak->kategorije = $posao->dohvatiKategorije();
echo $predlozak;