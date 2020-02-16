<?php

session_start();

require_once 'konfiguracija_konstanti.php';

require_once 'asistent/pomocne_funkcije.php';

function __autoload($ime_klase) {
	require_once 'klase/' . $ime_klase . '.php';
}
