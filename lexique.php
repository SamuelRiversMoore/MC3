<?php include('includes/header.php'); ?>
<?php include('includes/menu.php'); ?>
	
  <div id="contenu" class="wrapper">
		<div id="lexique-lettres" class="cf">
			<a href="#a" class="active">A</a>
			<a href="#b">B</a>
			<a href="#c">C</a>
			<a href="#d">D</a>
			<a href="#e">E</a>
			<a href="#f">F</a>
			<a href="#g">G</a>
			<a href="#h">H</a>
			<a href="#i">I</a>
			<a href="#j">J</a>
			<a href="#k">K</a>
			<a href="#l">L</a>
			<a href="#m">M</a>
			<a href="#n">N</a>
			<a href="#o">O</a>
			<a href="#p">P</a>
			<a href="#q">Q</a>
			<a href="#r">R</a>
			<a href="#s">S</a>
			<a href="#t">T</a>
			<a href="#u">U</a>
			<a href="#v">V</a>
			<a href="#w">W</a>
			<a href="#x">X</a>
			<a href="#y">Y</a>
			<a href="#z">Z</a>
		</div>
		<div id="lexique-mots">
			<h1>A</h1>
			<?php
			$mots = explode(',', "Albédo,Atmosfere,Acceptabilité,Adaptación,Adaptabilité,Accesibilidad universal,Accesibilidad urbana,Agenda Local 21,Antropogénico,Arquitectura Bioclimática,Arquitectura solar pasiva,Arquitectura Solar Activa,Arquitectura Sostenible,Atmosphère,Artificialisation,Atténuation (Mitigation),Atmósfera");
			foreach ($mots as $key=>$mot) :
			?>
			<div id="mot-<?= $key ?>" class="lexique-wrapper">
				<a title="<?= $mot ?>" href="#mot-<?= $key ?>" class="lexique-titre"><?= $mot ?></a>
				<div class="lexique-voisins">
					<p>Mot(s) voisin(s): <a href="#mot-1">Atmosfere (es)</a>, <a href="#mot-6">Atmosfire (it)</a></p>
				</div>
				<div class="lexique-definition">
					<p class="discret">GIEC, 2013, Atmosphère :</p>
					<?= file_get_contents('http://loripsum.net/api/1/medium') ?>
				</div>
				<div class="lexique-definition">
					<p class="discret">CLAC, 2017, Atmosphère :</p>
					<?= file_get_contents('http://loripsum.net/api/1/medium') ?>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>

<?php include('includes/footer.php'); ?>