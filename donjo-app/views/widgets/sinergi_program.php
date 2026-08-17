<!-- widget Sinergi Program-->
<link rel="stylesheet" href="<?= base_url()?>assets/css/sinergi-program.css">
<div class="box box-primary box-solid">
	<div class="box-header">
		<h3 class="box-title"><i class="fa fa-external-link"></i> Sinergi Program</h3>
	</div>
	<div id="sinergi_program" class="box-body">
		<table>
			<?php foreach($sinergi_program as $key => $program) : ?>
				<?php $baris[$program['baris']][$program['kolom']] = $program; ?>
			<?php endforeach; ?>

			<?php foreach($baris as $baris_program) : ?>
				<tr>
					<td>
						<?php $width = 100/count($baris_program)-count($baris_program)?>
						<?php foreach($baris_program as $key => $program) : ?>
							<span style="display: inline-block; width: <?= $width.'%'?>">
								<a href="<?= $program['tautan'] ?>" target="_blank"><img src="<?= base_url().LOKASI_GAMBAR_WIDGET.$program['gambar'] ?>" alt="<?= $program['judul'] ?>" /></a>
							</span>
						<?php endforeach; ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
</div>