<?php include('includes/header.php'); ?>
<?php include('includes/menu.php'); ?>
	
<div id="contenu" class="wrapper">
	<div id="arbo"><a href="#">MC3</a> > <a href="#">Inventaire</a> > <a href="#">Espagne</a> > <a href="#">Valence</a> > <span class="arbo-current-page">Sociopolis</span></div>
	<h1>Sociopolis</h1>

	<div id="inventaire-introduction">
		<h5>— Introduction</h5>
		<p>Projet de réhabilitation urbaine de la darse intérieure du port inséré dans le programme d’aménagement du littoral de Valencia.</p>
	</div>

	<div id="inventaire-images">
		<h5>— Images</h5>
		<div class="slider">
			<div><img src="assets/images/slide-1.jpg"></div>
			<div><img src="assets/images/slide-2.jpg"></div>
			<div><img src="assets/images/slide-3.jpg"></div>
		</div>
	</div>
	
	<div id="inventaire-thematiques">
		<h5>— Thématiques</h5>
		<div id="inventaire-tabs">
			<ul>
				<li><a href="#tab-1">Temporalités</a></li>
				<li><a href="#tab-2">Relation au changement climatique</a></li>
				<li><a href="#tab-3">Programme</a></li>
			</ul>
			<div id="tab-1">
				Principes du projet
				- Concentration des constructions (tours de plus de 20 étages).
				- Toitures vertes (50% minimum).
				- Création d’un front urbain sur la mer.
				- Îlots ouverts structurés par des espaces verts publics.
				- Minimisation du traffic local.
				- Création d’un circuit urbain de Formule 1.
				Surfaces
				Indice d’edification brut 1,2 m² toit/m² sol - Surface totale à aménager 318 576 m²
				- 75 238 m² de parc
				- 90 721 m² d’espaces verts
				- 7 000 m² cimitière
				- 28 000 m² de canaux navigables
				- 286 718 m² toit de residences
				- 95 573 m² toit d’activités tertiaires
				En savoir plus : Normes d’urbanisme pour le Secteur Grao
				Document(s)
			</div>
			<div id="tab-2">tab 2</div>
			<div id="tab-3">tab 3</div>
		</div>
	</div>
	
	<div id="inventaire-carte">
		
	</div>
</div>


<script type="text/javascript">
	var geojson = {
        "type": "geojson",
        "data": {
            "type": "FeatureCollection",
            "features": [{
                "type": "Feature",
                "geometry": {
                    "type": "Point",
                    "coordinates": [2.166667, 41.383333],
                },
                "properties": {
                    "title": "Barcelone",
                    "marker-symbol": "monument",
                    url: 'http://en.wikipedia.org/'
                }
            }, {
                "type": "Feature",
                "geometry": {
                    "type": "Point",
                    "coordinates": [12.3319, 45.4398]
                },
                "properties": {
                    "title": "Venise",
                    "marker-symbol": "harbor",
                    url: 'http://en.wikipedia.org/'
                }
            }]
        }
    }
</script>



<?php include('includes/footer.php'); ?>