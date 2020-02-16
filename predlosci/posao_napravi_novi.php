<?php include 'dijelovi/zaglavlje.php'; ?>

<h2 class="page-header">Napravi posao</h2>
<form action="napravi_novi.php" method="POST">
	<div class="form-group">
		<label>Tvrtka</label>
		<input type="text" class="form-control" name="tvrtka" required>
	</div>
	<div class="form-group">
		<label>Kategorija</label>
		<select class="form-control" name="kategorija" required>
			<option value="" disabled selected>Odaberite kategoriju</option>
    		<?php foreach($kategorije as $kategorija): ?>
    			<option value="<?php echo $kategorija->id; ?>"><?php echo $kategorija->ime; ?></option>
    		<?php endforeach; ?>
		</select>
	</div>
	<div class="form-group">
		<label>Zvanje</label>
		<input type="text" class="form-control" name="zvanje" required>
	</div>
	<div class="form-group">
		<label>Opis</label>
		<textarea class="form-control" name="opis"></textarea>
	</div>
	<div class="form-group">
		<label>Mjesto</label>
		<input type="text" class="form-control" name="mjesto" required>
	</div>
	<div class="form-group">
		<label>Plaća</label>
		<input type="text" class="form-control" name="placa" required>
	</div>
	<div class="form-group">
		<label>Kontakt Email</label>
		<input type="email" class="form-control" name="kontakt_email" required>
	</div>
	<input type="submit" class="btn btn-secondary btn-block" value="Potvrdi" name="potvrdi">
</form>

<?php include 'dijelovi/podnozje.php'; ?>