<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title></title>
	</head>
	<body>
		<div id="formulaire" class="container-fluid">


			<div class="row">

				<div class="col-lg-6 col-md-6 col-sm-6">

					<div class="mx-auto w-50 p-3 border border-danger">

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
								<label for="votremessage">Votre message</label>
								<textarea class="form-control" cols="30" rows="10" id="message" name="message"></textarea>
							</div>

							<button type="submit" class="btn btn-danger mx-auto p-6">Envoyer !</button>

						</form>



					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="mx-auto w-50 p-3 border border-danger">
						<div class="row justify-content-center"> <h2>Test</h2> </div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
