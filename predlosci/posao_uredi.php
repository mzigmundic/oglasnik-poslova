<?php include 'dijelovi/zaglavlje.php'; ?>

	<h2 class="page-header">Uredi posao</h2>
	<form action="edit.php?id=<?php echo $posao->id; ?>" method="POST">
		<div class="form-group">
			<label>Tvrtka</label>
			<input type="text" class="form-control" name="tvrtka" value="<?php echo $posao->tvrtka; ?>" required>
		</div>
		<div class="form-group">
			<label>Kategorija</label>
			<select class="form-control" name="kategorija" required>
				<option value="" disabled selected>Odaberite kategoriju</option>
	    		<?php foreach($kategorije as $kategorija): ?>
					<?php if ($posao->id_kat == $kategorija->id) : ?>
						<option value="<?php echo $kategorija->id; ?>" selected><?php echo $kategorija->ime; ?></option>
					<?php else : ?>
						<option value="<?php echo $kategorija->id; ?>"><?php echo $kategorija->ime; ?></option>
					<?php endif; ?>

	    			
	    		<?php endforeach; ?>
			</select>
		</div>
		<div class="form-group">
			<label>Zvanje</label>
			<input type="text" class="form-control" name="zvanje" value="<?php echo $posao->zvanje; ?>" required>
		</div>
		<div class="form-group">
			<label>Opis</label>
			<textarea class="form-control" name="opis"><?php echo $posao->opis; ?></textarea>
		</div>
		<div class="form-group">
			<label>Mjesto</label>
			<input type="text" class="form-control" name="mjesto" value="<?php echo $posao->mjesto; ?>" required>
		</div>
		<div class="form-group">
			<label>Plaća</label>
			<input type="text" class="form-control" name="placa" value="<?php echo $posao->placa; ?>" required>
		</div>
		<div class="form-group">
			<label>Kontakt Email</label>
			<input type="text" class="form-control" name="kontakt_email" value="<?php echo $posao->kontakt_email; ?>" required>
		</div>
		<input type="submit" class="btn btn-secondary" value="Potvrdi" name="potvrdi">
	</form>

<?php include 'dijelovi/podnozje.php'; ?>