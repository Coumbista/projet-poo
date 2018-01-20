<!DOCTYPE html>
<html lang="en">
<head>
	<title>Formulaire Contrat</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
</head>
<body>
<style type="text/css" >

body{
	background-color:#008080;
}
</style>

	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url('cont.jpg');">
				<span class="contact100-form-title-1">
					AJOUT CONTRAT
				</span>
			</div>

			<form class="contact100-form validate-form">
			<!-- formulaire proprietaire -->
				<div class="wrap-input100 validate-input" data-validate="Numero obligatoire">
					<span class="label-input100">Numero de pièce </span>
					<input class="input100" type="text" name="numpiece" placeholder="votre numéro de pièce">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Nom obligatoire">
					<span class="label-input100">Nom proprietaire</span>
					<input class="input100" type="text" name="nompro" placeholder="votre nom">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Numero obligatoire">
					<span class="label-input100">Telephone</span>
					<input class="input100" type="text" name="tel" placeholder="votre numero de telephone">
					<span class="focus-input100"></span>
				</div>
				<!-- fin formulaire proprietaire -->
				<!-- debut formulaire bien -->
				<div class="wrap-input100 validate-input" data-validate="Nom obligatoire">
					<span class="label-input100">Nom du bien</span>
					<input class="input100" type="text" name="nombien" placeholder="nom du bien">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Adresse obligatoire">
					<span class="label-input100">Adresse</span>
					<input class="input100" type="text" name="adressbien" placeholder="votre adresse">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Montant obligatoire">
					<span class="label-input100">Montant de location</span>
					<input class="input100" type="text" name="montanloc" placeholder="votre montant de location">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Montant obligatoire">
					<span class="label-input100">Commission</span>
					<input class="input100" type="text"  name="commission" placeholder="la commission">
					<span class="focus-input100"></span>
				</div>
<!-- fin formulaire bien -->
<!-- debut formulaire contrat -->

				<div class="wrap-input100 validate-input" data-validate = "date obligatoire">
					<span class="label-input100">date debut signature</span>
					<input class="input100" type="text" id="date1" name="datedeb" placeholder="Entrez la date du debut signature">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "date obligatoire">
					<span class="label-input100">date signature</span>
					<input class="input100" type="text" id="date2" name="datesignature" placeholder="Entrez la date du debut signature">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="date obligatoire">
					<span class="label-input100">date fin signature</span>
					<input class="input100" type="text" id="date3" name="datefin" placeholder="Entrez la date de le fin signature">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Montant obligatoire">
					<span class="label-input100">Montant voulu</span>
					<input class="input100" type="number" name="montantpro" min="20000" placeholder="Entrer montant du proprietaire">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input">
      <span class="label-input100">Text contrat</span>
      <textarea class="form-control" rows="8" id="comment"></textarea>
    </div>

				<div class="wrap-input100 validate-input" data-validate = "cocher svp">
					<span class="label-input100">accepter</span>
				<input type="radio" id="valid" name="coche">				
								</div>
								<div class="wrap-input100 validate-input" data-validate = "cocher">
				<span class="label-input100" >refuser</span>
						<input type="radio" id="unvalid" name="coche">				
				</div>

				<div class="container-contact100-form-btn submit">
					<button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
<script  type="text/javascript">
$('.submit').hide();
$('#valid').on("click",function(){
	$('.submit').show().delay(1000);
});
$('#unvalid').on("click",function(){
	$('.submit').hide();
});
</script>



					</button>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	
	<script src="js/main.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="https://code.jquery.com/ui/jquery-ui-git.js">
   

<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>

</body>
</html>
