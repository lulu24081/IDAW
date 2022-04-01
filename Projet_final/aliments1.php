<head>
	<link rel="stylesheet" media="screen" type="text/css" href="css/bootstrap.css"/>
	<div class="form-body">
			<div class="row">
					<div class="form-holder">
							<div class="form-content">
									<div class="form-items">
											<h3>Profil</h3>
											<p>Remplissez le formulaire suivant.</p>
											<form action="profil.php" method="post">
											<form class="requires-validation" novalidate>
													<div class="col-md-12">
															<input class="form-control" type="text" id="username" name="username" placeholder="Nom d'utilisateur" required>
													</div>
													<div class="col-md-12">
														 <input class="form-control" type="text" id="Nom" name="lastName" placeholder="Nom" required>
													</div>
													<div class="col-md-12">
															<input class="form-control" type="text" id="Prénom" name="firstName" placeholder="Prenom" required>
													</div>
													<div class="col-md-12">
															<input class="form-control" type="text" id="Age" name="age" placeholder="Age" required>
													</div>
												 <div class="col-md-12">
															<select id="niveau" name="niveau_sport" class="form-control" required>
																		<option selected disabled>Niveau de pratique sportive</option>
																		<option value="bas" id="lvl1">Bas</option>
																		<option value="moyen" id="lvl2">Moyen</option>
																		<option value="élevé" id="lvl3">Eleve</option>
														 </select>
												 </div>


												 <div class="col-md-12">
														<input class="form-control" type="password" id="password" name="password" placeholder="Mot de passe" required>
												 </div>

												 <br>
												 <div class="col-md-12 mt-3">
													<label class="mb-3 mr-1" for="gender">Genre : </label>

													<input type="radio" class="btn-check" id="gender1" name="gender" value="Homme" required>
													<label class="btn btn-sm btn-outline-secondary" for="Homme" >Homme</label>

													<input type="radio" class="btn-check" name="gender" id="gender1" value="Femme" required>
													<label class="btn btn-sm btn-outline-secondary" for="Femme">Femme</label>

													</div>
											<br>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
												<label class="form-check-label">Je confirme que toutes mes données sont correctes.</label>
											 <div class="invalid-feedback">Veuillez confirmer l'excactitude de vos données.</div>
											</div>
											<br>


													<div class="form-button mt-3">
															<button id="submit" type="submit" class="btn btn-primary">Register</button>
													</div>
											</form>
									</div>
							</div>
					</div>
			</div>
	</div>
</head>