<?php

class Posao {

	private $baza;

	public function __construct() {
		$this->baza = new Baza;
	}

	public function dohvatiSvePoslove() {
		$this->baza->query("SELECT poslovi.*, kategorije.ime AS kime
			 				FROM poslovi
							INNER JOIN kategorije
							ON poslovi.id_kat = kategorije.id
							ORDER BY datum_posta DESC");

		$results = $this->baza->resultSet();

		return $results;
	}

	public function dohvatiKategorije() {
		$this->baza->query("SELECT *  FROM kategorije");

		$results = $this->baza->resultSet();

		return $results;
	}

	public function dohvatiPoKategoriji($kategorija) {
		$this->baza->query("SELECT poslovi.*, kategorije.ime AS kime
			 				FROM poslovi
							INNER JOIN kategorije
							ON poslovi.id_kat = kategorije.id
							WHERE poslovi.id_kat = $kategorija
							ORDER BY datum_posta DESC");

		$results = $this->baza->resultSet();

		return $results;
	}

	public function dohvatiKategoriju($id_kategorije) {
		$this->baza->query("SELECT * FROM kategorije WHERE id = :id_kat");
		$this->baza->bind(':id_kat', $id_kategorije);

		$zapis = $this->baza->single();

		return $zapis;
	}

	public function dohvatiPosao($id) {
		$this->baza->query("SELECT * FROM poslovi WHERE id = :id");
		$this->baza->bind(':id', $id);

		$zapis = $this->baza->single();

		return $zapis;
	}

	public function napraviNovi($podaci) {
		$this->baza->query("INSERT INTO poslovi (id_kat, zvanje, tvrtka, opis, mjesto, placa, kontakt_email) VALUES (:id_kategorije, :zvanje, :tvrtka, :opis, :mjesto, :placa, :kontakt_email)");

		$this->baza->bind(':id_kategorije', $podaci['id_kategorije']);
		$this->baza->bind(':zvanje', $podaci['zvanje']);
		$this->baza->bind(':tvrtka', $podaci['tvrtka']);
		$this->baza->bind(':opis', $podaci['opis']);
		$this->baza->bind(':mjesto', $podaci['mjesto']);
		$this->baza->bind(':placa', $podaci['placa']);
		$this->baza->bind(':kontakt_email', $podaci['kontakt_email']);

		if ($this->baza->execute()) {
			return true;
		} else {
			return false;
		}
	}

	public function ukloni($id) {
		$this->baza->query("DELETE FROM poslovi WHERE id = $id");

		if ($this->baza->execute()) {
			return true;
		} else {
			return false;
		}
	}

	public function azuriraj($id, $podaci) {
		$this->baza->query("UPDATE poslovi
							SET 
							id_kat = :id_kategorije,
							zvanje = :zvanje,
							tvrtka = :tvrtka,
							opis = :opis,
							mjesto = :mjesto,
							placa = :placa,
							kontakt_email = :kontakt_email
							WHERE id = $id");

		$this->baza->bind(':id_kategorije', $podaci['id_kategorije']);
		$this->baza->bind(':zvanje', $podaci['zvanje']);
		$this->baza->bind(':tvrtka', $podaci['tvrtka']);
		$this->baza->bind(':opis', $podaci['opis']);
		$this->baza->bind(':mjesto', $podaci['mjesto']);
		$this->baza->bind(':placa', $podaci['placa']);
		$this->baza->bind(':kontakt_email', $podaci['kontakt_email']);

		if ($this->baza->execute()) {
			return true;
		} else {
			return false;
		}
	}
}