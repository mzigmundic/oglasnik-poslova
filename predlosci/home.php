<?php include 'dijelovi/zaglavlje.php'; ?>

<div class="jumbotron">
  <h1>Pronađi posao</h1>
  <form action="index.php" method="GET">
  	<select name="kategorija" class="form-control">
  		<option value="0">Odaberite kategoriju</option>
  		<?php foreach($kategorije as $kategorija): ?>
  			<option value="<?php echo $kategorija->id; ?>"><?php echo $kategorija->ime; ?></option>
  		<?php endforeach; ?>
  	</select>
  	<br>
  	<input type="submit" class="btn btn-success" value="Pretraži">
  </form>
</div>

<h3><?php echo $naslov; ?></h3>
<?php foreach($poslovi as $posao): ?>
  <div class="row marketing">
    <div class="col-md-10">
      <h4><?php echo $posao->zvanje; ?></h4>
      <p>
        <?php echo substr($posao->opis, 0, 200); 
              echo (strlen($posao->opis) > 200 ? "..." : "");
        ?>  
      </p>
    </div>
    <div class="col-md-2">
    	<a href="posao.php?id=<?php echo $posao->id; ?>" class="btn btn-secondary">Pogledaj</a>
    </div>
  </div>
<?php endforeach; ?>

<?php include 'dijelovi/podnozje.php'; ?>