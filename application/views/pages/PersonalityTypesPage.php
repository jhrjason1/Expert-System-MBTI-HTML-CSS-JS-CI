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
	<div class="title">
		<h3>Search Your Personality Details Here</h3>
	</div>
	<div class="main">
		<form method="POST">
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="fa fa-search input-group-text"></span>
				</div>
				<input type="text" class="form-control" name="keyword" placeholder="Type MBTI Here">
			</div>
		</form>
	</div>
	<div class="row">
		<?php
			foreach($tipe as $row) {
				$Personality = $row['Personality'];
				$Deskripsi = $row['PersonalityDesc'];
				$Gambar = $row['Image'];
				$i = 0;
				if($i == 4) {
					echo "<div class='row'>";
				}
		?>
		<div class="col-md-3 mb-3">
			<div class="card text-center shadow">
				<img src="<?php echo base_url().'assets/'.$Gambar ?>" class="card-img-top top-1">
				<div class="card-body">
					<h5 class="card-title"><?= $Personality; ?></h5>
					<p class="card-text"><?= $Deskripsi; ?></p>
				</div>
			</div>
		</div>
		<?php
				if($i == 4) {
					echo "</div>";
					$i = 0;
				}
				$i++;
			}
		?>
	</div>
</body>
</html>
</html>
