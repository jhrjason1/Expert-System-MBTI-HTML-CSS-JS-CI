<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		echo $style;
		echo $script;
		echo $navbar;
	?>
</head>
<body class="home">
	<div class="container">
		<div class="title">
			<h3 class="mb-5">
				Answer to Get Your Personality Type !
			</h3>
		</div>
		<div class="container col-md-12 text-center mb-4">
			<div className="custom-scrollbar-css p-2">
				<form action="<?= site_url('Result') ?>" method="POST">
				<?php
					$i = 1;
					foreach($test as $row) {
						$soal = $row['Pernyataan'];
				?>
				<div class="row mb-5 question">
					<div class="col">
						<div className="row">
							<?= $soal; ?>
						</div>
						<div className="row">
							<div className="form-check inline-block">
								<label> Tidak Setuju </label>
									<input type="radio" name="<?= $i; ?>" value="0" required/>
									<input type="radio" name="<?= $i; ?>" value="0.2" required/>
									<input type="radio" name="<?= $i; ?>" value="0.4" required/>
									<input type="radio" name="<?= $i; ?>" value="0.6" required/>
									<input type="radio" name="<?= $i; ?>" value="0.8" required/>
									<input type="radio" name="<?= $i; ?>" value="1" required/>
								<label> Sangat Setuju </label>
							</div>
						</div>
					</div>
				</div>
				<?php
						$i++;
					}
				?>
			</div>
			<div class="row d-flex justify-content-center">
				<div class="col-md-4 text-center">
					<input type="submit" class="btn btn-lg btn-warning" name="submitTest" value="Submit">
				</div>
			</div>
				</form>
		</div>
	</div>
</body>
</html>

