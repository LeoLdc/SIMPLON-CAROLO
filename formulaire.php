<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title></title>
	</head>
	<body>
		<style media="screen">
			.logosimplon{
				margin: -99px 46%;
			}
		</style>


		<?php include("php/header.php") ?>



		<div id="formulaire" class="container-fluid">


			<div class="row">

				<div class="col-lg-6 col-md-6 col-sm-6">

					<div class="mx-auto w-100 p-3 border border-danger">

						<h2 class="text-center text-danger">Formulaire de contact</h2>

						<form>
							<div class="field" class="form-group">
								<label for="email">Nom</label>
								<input type="text" class="form-control" id="nom" name="nom">
							</div>

							<div class="field" class="form-group">
								<label for="email">Prénom</label>
								<input type="text" class="form-control" id="prenom" name="prenom">
							</div>

							<div class="field" class="form-group">
								<label for="email">E-mail</label>
								<input type="email" class="form-control" id="email" name="email">
							</div>

							<div class="field" class="form-group">
								<label for="sujet">Sujet</label>
								<input type="text" class="form-control" id="sujet" name="sujet">
							</div>

							<div class="field" class="form-group">
								<label class="mb:-0.2rem" for="votremessage">Votre message</label>
								<textarea class="form-control" cols="10" rows="16" id="message" name="message"></textarea>
							</div>

<button type="submit" class="btn btn-danger mx-auto" style="margin-top: 20px;">Envoyer !</button>
						</form>



					</div>

				</div>

				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="mx-auto w-100 p-3 border border-danger">
						<div class="row justify-content-center"><h2 class="text-danger">Informations</h2> </div>
												<h3 class="text-left">Horaires</h3>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6">


						<div class="horairesimage">

						<table class="table table-responsive">
						    <tr>
						      <th>Lundi</th>
						      <td>9:00-12:30</td>
									<td>14:00-17:30</td>
						    </tr>
						    <tr>
						      <th>Mardi</th>
									<td >9:00-12:30</td>
									<td>14:00-17:30</td>
						    </tr>
						    <tr>
						      <th>Mercredi</th>
									<td>9:00-12:30</td>
									<td>14:00-17:30</td>
						    </tr>
						    <tr>
						      <th>Jeudi</th>
									<td>9:00-12:30</td>
									<td>14:00-17:30</td>
						    </tr>
								<tr>
									<th>Vendredi</th>
									<td>9:00-12:30</td>
									<td>14:00-17:30</td>
								</tr>
						</table>

						CCI des Ardennes <br>
						18a Avenue Georges Corneau <br>
						08000 Charleville-Mézières <br>
						Tél: 03 24 56 62 62 <br>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<img class="w-100 p-100 mw-300 mh-100" src="./images/simploncharleville.png" alt="">

					</div>


						</div>
						</div>

						<div class="mx-auto w-100 p-3 border-left border-right border-bottom
						border-danger">



						<div class="embed-responsive embed-responsive-16by9">
						<iframe class="d-flex" id="resp-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2576.956194069733!2d4.7202753161348765!3d49.76808097938706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ea0e062e03d7e9%3A0xc5cc5f6ee91f2b25!2sCCI+des+Ardennes!5e0!3m2!1sfr!2sfr!4v1528375963922" width="570" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					</div>




						</div>

					</div>
				</div>

				<footer><?php include('php/footer.php') ?></footer>






	</body>
</html>
