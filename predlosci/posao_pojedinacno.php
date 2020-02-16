<?php include 'dijelovi/zaglavlje.php'; ?>

<h2 class="page-header"><?php echo $posao->zvanje; ?> (<?php echo $posao->mjesto; ?>)</h2>
<small>
	Postavljeno: <?php echo $posao->datum_posta; ?>
</small>
<hr>
<h4>Opis Posla:</h4>
<p><?php echo $posao->opis; ?></p>
<br>
<ul class="list-group">
	<li class="list-group-item"><strong>Tvrtka:</strong> <?php echo $posao->tvrtka; ?></li>
	<li class="list-group-item"><strong>Plaća:</strong> <?php echo $posao->placa; ?> kuna</li>
	<li class="list-group-item"><strong>Email:</strong> <?php echo $posao->kontakt_email; ?></li>
</ul>
<br><br>
<a href="index.php"> << Idi nazad</a>
<br><br>
<div class="well">
	<a href="uredi.php?id=<?php echo $posao->id; ?>" class="btn btn-secondary">Uredi</a>
	<form action="posao.php" style="display: inline;" method="POST">
		<input type="hidden" name="ukloni_id" value="<?php echo $posao->id;?>">
		<input type="submit" class="btn btn-danger" value="Ukloni">
	</form>
</div>

<?php include 'dijelovi/podnozje.php'; ?>