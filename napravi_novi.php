<?php include_once 'konfiguracija/init.php'; ?>

<?php
$posao = new Posao;

if (isset($_POST['potvrdi'])) {
	$podaci = array();
	$podaci['zvanje'] = $_POST['zvanje'];
	$podaci['tvrtka'] = $_POST['tvrtka'];
	$podaci['id_kategorije'] = $_POST['kategorija'];
	$podaci['opis'] = $_POST['opis'];
	$podaci['mjesto'] = $_POST['mjesto'];
	$podaci['placa'] = $_POST['placa'];
	$podaci['kontakt_email'] = $_POST['kontakt_email'];

	if ($posao->napraviNovi($podaci)) {
		preusmjeri('index.php', 'Vaš posao je napravljen', 'uspjeh');
	} else {
		preusmjeri('index.php', 'Neuspješno', 'greska');
	}
}

$predlozak = new Predlozak('predlosci/posao_napravi_novi.php');

$predlozak->kategorije = $posao->dohvatiKategorije();
echo $predlozak;