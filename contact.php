<?php include("header.php"); ?>

<!-- Contact -->
<section id="contact" class="home-section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<div class="section-heading">
					<h2>Contact </h2>
					<div class="heading-line"></div>
					<p>Veillez remplir le formulaire ci-dessous pour nous contacter</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<div id="sendmessage">Saisir votre message ici. Merci!</div>
				<div id="errormessage"></div>

				<form action="" method="post" class="form-horizontal contactForm" role="form">
					<div class="col-md-offset-2 col-md-8">
						<div class="form-group has-warning">
							<input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" data-rule="minlen:4"
							data-msg="Please enter at least 4 chars" />
							<div class="validation"></div>
						</div>
					</div>

					<div class="col-md-offset-2 col-md-8">
						<div class="form-group">
							<input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" data-rule="email"
							data-msg="S'il vous plait entrer une email Valide" />
							<div class="validation"></div>
						</div>
					</div>

					<div class="col-md-offset-2 col-md-8">
						<div class="form-group">
							<input type="text" class="form-control" name="subject" id="subject" placeholder="Objet" data-rule="minlen:4"
							data-msg="enter un objet de demande" />
							<div class="validation"></div>
						</div>
					</div>

					<div class="col-md-offset-2 col-md-8">
						<div class="form-group">
							<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="ecrivent ici"
							placeholder="Message"></textarea>
							<div class="validation"></div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-offset-2 col-md-8">
							<button type="submit" class="btn btn-theme btn-lg btn-block">Envoyer</button>
						</div>
					</div>
				</form>

			</div>
		</div>

	</div>
</section>


<?php include("footer.php"); ?>