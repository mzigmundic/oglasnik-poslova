<?php include_once 'konfiguracija/init.php'; ?>

<?php

$posao = new Posao;

if (isset($_POST['ukloni_id'])) {
	$ukloni_id = $_POST['ukloni_id'];

	if ($posao->ukloni($ukloni_id)) {
		preusmjeri('index.php', 'Posao izbrisan', 'success');
	} else {
		preusmjeri('index.php', 'Posao nije izbrisan');
	}
}

$predlozak = new Predlozak('predlosci/posao_pojedinacno.php');

$posao_id = isset($_GET['id']) ? $_GET['id'] : null;

$predlozak->posao = $posao->dohvatiPosao($posao_id);
echo $predlozak;