<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Print Nilai</title>
      <link rel="stylesheet" href="<?php echo base_url() ?>style.css"/>
</head>
<body>
  <div class="caption">Data Barang</div>
<div id="table">
	<div class="header-row row">
    <span class="cell primary">ID Nilai</span>
    <span class="cell">ID Banjar</span>
    <span class="cell">ID Juri</span>
    <span class="cell">Keutuhan</span>
    <span class="cell">Bahan</span>
    <span class="cell">Tinggi</span>
    <span class="cell">Unsur</span>
    <span class="cell">Ekspresi</span>
    <span class="cell">Keindahan</span>
    <span class="cell">Keserasian</span>
    <span class="cell">Inovasi</span>
  </div>
  <?php foreach ($nilai as $nilai): ?>
  <div class="row">
	<input type="radio" name="expand">
    <span class="cell primary" data-label="ID Nilai"><?php echo $nilai->id?></span>
    <span class="cell" data-label="ID Banjar"><?php echo $nilai->banjar_id?></span>
    <span class="cell" data-label="ID Juri"><?php echo $nilai->juri_id?></span>
    <span class="cell" data-label="Keutuhan"><?php echo $nilai->keutuhan?></span>
    <span class="cell" data-label="Bahan"><?php echo $nilai->bahan?></span>
    <span class="cell" data-label="Tinggi"><?php echo $nilai->tinggi?></span>
    <span class="cell" data-label="Unsur"><?php echo $nilai->unsur?></span>
    <span class="cell" data-label="Ekspresi"><?php echo $nilai->ekspresi?></span>
    <span class="cell" data-label="Keindahan"><?php echo $nilai->keindahan?></span>
    <span class="cell" data-label="Keserasian"><?php echo $nilai->keserasian?></span>
    <span class="cell" data-label="Inovasi"><?php echo $nilai->inovasi?></span>
  </div>
  <?php endforeach; ?>
</div>
<script>
  window.print();
</script>

</body>

</html>
