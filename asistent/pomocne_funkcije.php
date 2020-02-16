<?php

function preusmjeri($stranica = FALSE, $poruka = NULL, $tip_poruke = NULL) {

	if (is_string($stranica)) {
		$lokacija = $stranica;
	} else {
		$lokacija = $_SERVER['SCRIPT_NAME'];
	}

	if ($poruka != NULL) {
		$_SESSION['poruka'] = $poruka;
	}

	if ($tip_poruke != NULL) {
		$_SESSION['tip_poruke'] = $tip_poruke;
	}

	header('Location: ' . $lokacija);
	exit();
}

function pokaziPoruku() {
	if (!empty($_SESSION['poruka'])) {
		
		$poruka = $_SESSION['poruka'];

		if (!empty($_SESSION['tip_poruke'])) {
			
			$tip_poruke = $_SESSION['tip_poruke'];

			if ($tip_poruke == 'error') {
				echo '<div class="alert alert-danger">' . $poruka . '</div>';
			} else {
				echo '<div class="alert alert-success">' . $poruka . '</div>';
			}
		}

		unset($_SESSION['poruka']);
		unset($_SESSION['tip_poruke']);
	} else {
		echo '';
	}
}
