<?php
include 'header.php';
?>



<!-- Page Content -->
<div class="container">

	<!-- Portfolio Item Heading -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Profil
				<small>(Pseudo)</small>
			</h1>
		</div>
	</div>
	<!-- /.row -->

	<!-- Portfolio Item Row -->
	<div class="row">

		<div class="col-md-4">
			<img class="img-responsive" src="http://placehold.it/200x200" alt="">
		</div>

		<div class="col-md-8">
			<?php
			// lancement de la requête (on impose aucune condition puisque l'on désire obtenir la liste complète des propriétaires
			$sql = 'SELECT telephone, nom FROM liste_proprietaire';

			// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
			$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

			// on va scanner tous les tuples un par un
			while ($data = mysql_fetch_array($req)) {
				// on affiche les résultats
				echo 'Nom : '.$data['nom'].'<br />';
				echo 'Son tél : '.$data['telephone'].'<br /><br />';
			}
			mysql_free_result ($req);
			mysql_close ();
			?>
			<h3>Description</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
			<h3>Infos</h3>
			<ul style="list-style: none;display: inline;">
				<li>Nom :</li>
				<li>Prénom :</li>
				<li>E-mail :</li>
				<li>date de Naissance :</li>
			</ul>
		</div>

	</div>
	<!-- /.row -->

	<!-- Related Projects Row -->
	<div class="row">

		<div class="col-lg-12">
			<h3 class="page-header">Jeux Possédés</h3>
		</div>

		<div class="col-sm-2 col-xs-6 infosjeu">
			<a href="#">
				<img class="img-responsive portfolio-item" src="img/assassin_creed.jpg" alt="">
				<div class="nomdujeu">
					<h4>Assassin Creed</h4>
			</a>
			<a href="">
				Aventure
			</a>
		</div>
		</div>

		<div class="col-sm-2 col-xs-6 infosjeu">
			<a href="#">
				<img class="img-responsive portfolio-item" src="img/battlefield.jpg" alt="">
				<div class="nomdujeu">
					<h4>
						Battlefield
					</h4>
			</a>
			<a href="">
				Multijoueur
			</a>
				</div>

		</div>

		<div class="col-sm-2 col-xs-6 infosjeu">
			<a href="#">
				<img class="img-responsive portfolio-item" src="img/LOL.jpg" alt="">
				<div class="nomdujeu">
					<h4>
						Ligue of Legends
					</h4>
				</div>
			</a>
			<a href="">MOBA</a>
		</div>

		<div class="col-sm-2 col-xs-6 infosjeu">
			<a href="#">
				<img class="img-responsive portfolio-item" src="img/callof.jpg" alt="">
				<div class="nomdujeu">
					<h4>
						Call of Duty : Advanced Warfare
					</h4>
				</div>
			</a>
		</div>

		<div class="col-sm-2 col-xs-6 infosjeu">
			<a href="#">
				<img class="img-responsive portfolio-item" src="img/fifa.jpg" alt="">
				<div class="nomdujeu">
					<h4>
						FIFA 17
					</h4>
				</div>
			</a>
		</div>

	</div>
	<!-- /.row -->

	<hr>

	<!-- Footer -->
	<footer>
	</footer>

</div>
<!-- /.container -->
<?php
include 'footer.php';
?>
