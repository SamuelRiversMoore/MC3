<?php include('includes/header.php'); ?>
<?php include('includes/menu.php'); ?>
	
<div id="contenu" class="wrapper">
	<div id="arbo"><a href="#">MC3</a> > <a href="#">Inventaire</a> > <a href="#">Espagne</a> > <a href="#">Valence</a> > <span class="arbo-current-page">Sociopolis</span></div>
	<h1>Sociopolis</h1>

	<div id="inventaire-introduction-wrapper" class="cf">
		<div id="inventaire-introduction">
			<h5>— Introduction</h5>
			<p>Projet de réhabilitation urbaine de la darse intérieure du port inséré dans le programme d’aménagement du littoral de Valencia.</p>
		</div>

		<div id="inventaire-images">
			<h5>— Images</h5>
			<div class="slider">
				<div style="background:url('assets/images/slide-1.jpg')"></div>
				<div style="background:url('assets/images/slide-2.jpg')"></div>
				<div style="background:url('assets/images/slide-3.jpg')"></div>
			</div>
		</div>
	</div>
	
	<div id="inventaire-thematiques" class="cf">
		<h5>— Thématiques</h5>
		<div id="inventaire-tabs" class="tabs-wrapper cf">
			<ul>
				<li><a href="#tab-1">Temporalités</a></li>
				<li><a href="#tab-2">Relation au changement climatique</a></li>
				<li><a href="#tab-3">Programme</a></li>
			</ul>
			<div id="tab-1">
				<!-- .thematique-intro est optionnel -->
				<div class="thematique-intro">
					<p>La politique générale de lutte contre le Changement Climatique est en Espagne géré par le Ministère de l’Environnement et deux groupements :</p>
					<p>
						<ul>
							<li>La FEMP (Federación Española de Municipios y Provincias) et la RED (Red Española de Ciudades por el Clima).
							</li>
							<li>Le Ministère dispose d’une Oficina Española de Cambio Climático (OEE) et d’un Observatorio de Salud y Cambio Climático.</li>
						</ul>
					</p>
					<p>La Fondation « Forum Ambiental » est une plateforme d’échange entre les institutions espagnoles.</p>
					<p>Le pays dispose d’un PNACC et de plans spécifiques urbains comme le Libro Verde de Sostenibilidad Urbana y Local ou le la Estrategia Española de Sostenibilidad urbana y local</p>
				</div>
				<!-- .thematique-plan est optionnel -->
				<div class="thematique-plan">
					<h5>— Sommaire</h5>
					<ul class="liste-lettres">
						<li class="medium"><a href="#chapitre-1">Plans, stratégies, politiques, réglementations</a></li>
						<li class="medium"><a href="#chapitre-2">Fédérations</a></li>
						<li class="medium"><a href="#chapitre-3">Politiques et réglementations sectorielles</a></li>
						<li class="medium"><a href="#chapitre-4">Pages web des institutions publiques</a></li>
					</ul>
				</div>
				<!-- .thematique-chapitre se repète pour chaque chapitre de la thématique -->
				<h5>&nbsp;</h5>
				<div class="thematique-chapitre cf" id="chapitre-1">
					<h2>A. Plans, stratégies, politiques, réglementations</h2>
					<!-- .thematique-document se repète pour chaque document+description publié.
					lors de l'ajout d'un document il faut pouvoir lui attribuer un chapitre si besoin.
					ça peut être un simple champs texte.
					Si deux article on pour chapitre "1-plan-strategie-politique" ils se regroupent et le nom du chapitre s'affiche en haut.-->
					<div class="thematique-document">
						<h4 class="medium">Plan Nacional de Adaptación al Cambio Climático (PNACC)</h4>
						<div class="thematique-document-meta">
							<p class="discret">
								Autor : Ministerio de Agricultura, Alimentación y Medio Ambiente<br>
								Año : 2006
							</p>
						</div>
						<div class="thematique-document-description">
							<p>El Plan Nacional de Adaptación al Cambio Climático es el marco de referencia para la coordinación entre las Administraciones Públicas en las actividades de evaluación de impactos, vulnerabilidad y adaptación al cambio climático en España.<br>
El Plan, elaborado por la Oficina Española de Cambio Climático (OECC), fue adoptado por el Consejo de Ministros en el año 2006 después de un amplio proceso de consulta pública y participación con los principales órganos de coordinación a nivel nacional : la Comisión de Coordinación de Políticas de Cambio Climático, al Consejo Nacional del Clima, el Grupo Interministerial de Cambio Climático y la Conferencia Sectorial de Medio Ambiente.</p>
							<p>El objetivo último del PNACC es lograr la integración de medidas de adaptación al cambio climático basadas en el mejor conocimiento disponible en todas las políticas sectoriales y de gestión de los recursos naturales que sean vulnerables al cambio climático, para contribuir al desarrollo sostenible a lo largo del siglo XXI.</p>
						</div>
						<div class="thematique-document-fichiers">
							<div class="fichier-pdf"><div class="fichier-nom"></div></div>
							<div class="fichier-lien"><div class="fichier-nom"></div></div>
						</div>
					</div>
				</div>
			</div>
			<div id="tab-2">tab 2</div>
			<div id="tab-3">tab 3</div>
		</div>
	</div>
	
	<div id="inventaire-carte">
		<h5>— Villes</h5>
		<div id="inventaire-mapbox"></div>
	</div>
</div>


<script type="text/javascript">
	var geojson = {
        "type": "geojson",
        "data": {
            "type": "FeatureCollection",
            "features": 
						[{
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