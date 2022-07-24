<!DOCTYPE html>
<html>
<head>
	<?php
		echo $style;
		echo $script;
		echo $navbar;
	?>
</head>
<body class="container">
	<?php
		foreach($type as $data){
			$Judul = $data['Personality'];
			$Gambar = $data['Image'];
			$Deskripsi = $data['PersonalityDesc'];
		}
	?>
	<div class="row">
		<div class="col">
			<h2 class="judul text-center mb-2">Your Personality Type Is :</h2>
			<h1 class="nama text-center text-uppercase"><?= $Judul; ?></h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<img class="gambar d-block w-50 mx-auto" src="<?php echo base_url().'assets/'.$Gambar; ?>">
		</div>
		<div class="col-md-6 text">
			<p><?= $Deskripsi; ?></p>
		</div>
	</div>
</body>
</html>
