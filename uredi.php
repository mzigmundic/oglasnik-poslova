<?php include_once 'konfiguracija/init.php'; ?>

<?php
$posao = new Posao;

$posao_id = isset($_GET['id']) ? $_GET['id'] : null;

if (isset($_POST['potvrdi'])) {
	$podaci = array();
	$podaci['zvanje'] = $_POST['zvanje'];
	$podaci['tvrtka'] = $_POST['tvrtka'];
	$podaci['id_kategorije'] = $_POST['kategorija'];
	$podaci['opis'] = $_POST['opis'];
	$podaci['mjesto'] = $_POST['mjesto'];
	$podaci['placa'] = $_POST['placa'];
	$podaci['kontakt_email'] = $_POST['kontakt_email'];

	if ($posao->azuriraj($posao_id, $podaci)) {
		preusmjeri('index.php', 'Vaš posao je uređen', 'uspjeh');
	} else {
		preusmjeri('index.php', 'Neuspješno', 'greska');
	}
}

$predlozak = new Predlozak('predlosci/posao_uredi.php');

$predlozak->posao = $posao->dohvatiPosao($posao_id);
$predlozak->kategorije = $posao->dohvatiKategorije();
echo $predlozak;